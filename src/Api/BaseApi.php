<?php

namespace DocuSign\Rest\Api;

use DocuSign\Rest\Client as ApiClient;
use DocuSign\Rest\Exceptions\ClassNotFoundException;

abstract class BaseApi
{
    /**
     * An array of Docusign option objects
     *
     * @var array
     */
    protected $_options = [];

    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * @var \Docusign\Esign\Api\{client}Api
     */
    protected $client;

    /**
     * The first parameter of every call is the account_id
     *
     * @var bool
     */
    protected $usesAccountId = true;

    /**
     * BaseApi constructor.
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        $this->initClient();
    }

    private function initClient()
    {
        $docusignClass = str_replace(__NAMESPACE__, "DocuSign\\eSign\\Api", get_class($this)) . 'Api';
        $this->client = new $docusignClass($this->apiClient->getClient());
    }

    /**
     * Magic method to construct an options model or call an api method
     * @param $method
     * @param $args
     * @return mixed
     */
    public function __call($method, $args)
    {
        // If the method matches this signature instantiate the options
        if (preg_match('/^\w+Options$/', $method)) {
            return $this->setOptionsObject($method, $args);
        }

        if ($method !== 'login' && !$this->apiClient->isAuthenticated()) {
            $host = $this->apiClient->getHost();
            $this->apiClient->authenticate();
            // If the host has changed, update host on client config
            if ($host !== $this->apiClient->getHost()) {
                $this->initClient();
            }
        }

        if ($this->usesAccountId) {
            array_unshift($args, $this->apiClient->getAccountId());
        }

        return call_user_func_array([$this->client, $method], $args);
    }

    /**
     * Get an options object or all of them for current Api class
     *
     * @param null $method
     * @return array|mixed
     * @throws ClassNotFoundException
     */
    public function getOptions($method = null)
    {
        if ($method === null) {
            return $this->_options;
        }

        if (!array_key_exists($method, $this->_options)) {
            $optionsClass = get_class($this->client) . "\\" . ucfirst($method);
            if (!class_exists($optionsClass)) {
                throw new ClassNotFoundException("$optionsClass Does Not Exist As Defined In ->getOptions($method)");
            }
            $this->_options[$method] = new $optionsClass;
        }

        return $this->_options[$method];
    }

    /**
     * Sets the given options object and stores it
     * @param $method
     * @param $args
     * @return mixed
     */
    public function setOptionsObject($method, $args)
    {
        // All options are stored as a child namespace so the below is possible
        $class = get_class($this->client) . "\\" . ucfirst($method);

        // If there is no array passed to the function just return the object
        if (!is_array($args[0]) || count($args[0]) === 0) {
            return new $class;
        }

        $optionClass = new $class;

        foreach ($args[0] as $key => $val) {
            $setterMethod = str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));
            if (method_exists($optionClass, 'set' . $setterMethod)) {
                $optionClass->{'set' . $setterMethod}($val);
            }
        }

        $this->_options[$method] = $optionClass;

        return $optionClass;
    }
}
