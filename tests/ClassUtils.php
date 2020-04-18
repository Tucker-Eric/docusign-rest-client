<?php

namespace Docusign\Rest\Tests;

use DocuSign\Rest\Api\BaseApi;

class ClassUtils
{
    public const DOCUSIGN_SRC_DIR = __DIR__ . '/../vendor/docusign/esign-client/src';

    public const DOCUSIGN_NAMESPACE = 'DocuSign\\eSign';

    public const DOCUSIGN_API_NAMESPACE = self::DOCUSIGN_NAMESPACE . '\\Api';

    public const DOCUSIGN_MODEL_NAMESPACE = self::DOCUSIGN_NAMESPACE . '\\Model';


    public const SRC_DIR = __DIR__ . '/../src';

    public const PROXY_API_DIR = self::SRC_DIR . '/Api';

    public const BASE_NAMESPACE = 'DocuSign\\Rest';

    public const PROXY_API_NAMESPACE = self::BASE_NAMESPACE . '\\Api';

    private static $_cache = [
        'apiClasses'      => [],
        'models'          => [],
        'apiProxyClasses' => []
    ];

    /**
     * @return string[]
     */
    public static function getDocusignApiClasses(): array
    {
        return static::get('apiClasses', static function () {
            return static::qualifiedClassnameFromFilesInDir(self::DOCUSIGN_SRC_DIR . '/Api', self::DOCUSIGN_API_NAMESPACE);
        });
    }

    /**
     * @return array
     */
    public static function getDocusignModelClasses(): array
    {
        return static::get('models', static function () {
            return static::qualifiedClassnameFromFilesInDir(self::DOCUSIGN_SRC_DIR . '/Model', self::DOCUSIGN_MODEL_NAMESPACE);
        });
    }

    /**
     * @return array
     */
    public static function getApiProxyClasses(): array
    {
        return static::get('apiProxyClasses', static function () {
            // Don't want to return the BaseApi as a proxy class
            return \array_filter(
                static::qualifiedClassnameFromFilesInDir(self::PROXY_API_DIR, self::PROXY_API_NAMESPACE),
                static function ($class) {
                    return $class !== BaseApi::class;
                });
        });
    }

    /**
     * @param $directory
     * @param null $callback
     * @return array
     */
    private static function getAllFilesInDirectory($directory, $callback = null): array
    {
        $callback = $callback ?: static function ($f) {
            return $f;
        };

        $files = [];
        foreach (glob($directory . '/*.php') as $file) {
            $files[] = $callback($file);
        }

        return $files;
    }

    /**
     * @param $prop
     * @param $callback
     * @return mixed
     */
    private static function get($prop, $callback)
    {
        if (!empty(static::$_cache[$prop])) {
            return static::$_cache[$prop];
        }

        return static::$_cache[$prop] = $callback();
    }

    /**
     * @param $file
     * @return string
     */
    private static function classNameFromFile($file): string
    {
        return \str_replace('.php', '', \basename($file));
    }

    /**
     * @param $dir
     * @param $namespace
     * @return string[]
     */
    private static function qualifiedClassnameFromFilesInDir($dir, $namespace): array
    {
        return static::getAllFilesInDirectory($dir, static function ($file) use ($namespace) {
            return $namespace . '\\' . static::classNameFromFile($file);
        });
    }

}