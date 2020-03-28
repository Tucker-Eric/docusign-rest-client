<?php

require_once __DIR__ . '/../vendor/autoload.php';

const API_DIR = __DIR__ . '/../src/Api';

function createApiDocbloc($classname)
{
    $vendorClassname = '\DocuSign\\eSign\\Api\\' . $classname . 'Api';
    $reflectionClass = new ReflectionClass($vendorClassname);
    $publicMethods = $reflectionClass->getMethods(ReflectionMethod::IS_PUBLIC);
    $methods = [];
    foreach ($publicMethods as $method) {
        if (strpos($method->name, 'WithHttpInfo') !== false || strpos($method->name, '_') !== false) {
            continue;
        }

        $params = $method->getParameters();
        if (count($params) !== 0 && $params[0]->name === 'account_id') {
            array_shift($params);
        }

        $description = '';
        if (preg_match_all('/\*\s+([\w\s\(\)]+)/', $method->getDocComment(), $textMatches)) {
            $description = implode(' ', array_filter(array_map('trim', $textMatches[1]), static function ($param) {
                return !empty($param) && stripos($param, 'operation') !== 0;
            }));
        }

        $paramDoc = [];
        if (preg_match_all('/@param\s+(\S+)\s+(\$\w+)\s+(.*)/', $method->getDocComment(), $matches)) {
            [$allMatches, $types, $varNames, $descriptions] = $matches;
            foreach ($allMatches as $k => $m) {
                if ($varNames[$k] !== '$account_id') {
                    $paramDoc[] = $types[$k] . ' ' . $varNames[$k] . (strpos($descriptions[$k], '(optional)') !== false ? ' = null' : '');
                }
            }
        }

        $returnType = '';
        if (preg_match('/@return\s+(\S+)/', $method->getDocComment(), $returnMatch)) {
            if ($returnMatch[1] === $classname . 'Api') {
                $returnMatch[1] = '\DocuSign\\eSign\\Api\\' . $returnMatch[1];
            }
            $returnType = $returnMatch[1];
        }

        $methods[] = ' * @method ' . $returnType . ' ' . $method->name . '(' . implode(', ', $paramDoc) . ') ' . $description;
    }

    $methodBlock = implode("\n", $methods);

    return <<<DOCBLOC
/**
 * Class $classname
$methodBlock
 */
DOCBLOC;
}

function applyApiDocblocs()
{
    foreach (glob(API_DIR . '/*.php') as $file) {
        $content = file_get_contents($file);
        // Make sure this isn't the base class
        if (strpos($content, 'abstract class') === false) {
            $classname = str_replace('.php', '', basename($file));
            // Remove original class (if present)
            $content = removeClassDocblock($content);
            // Add the docblocs here
            $content = addClassDocBlock($content, createApiDocbloc($classname));

            echo 'Writing src/Api/' . $classname . '.php';
            echo "\n";
            // Write the file
            file_put_contents($file, $content);
        }
    }
}

function createClientApiEndpoints()
{
    $props = ['/**', ' * Class Client'];
    foreach (glob(API_DIR . '/*.php') as $file) {
        if (strpos($file, 'BaseApi') === false) {
            $filename = basename($file);
            $classname = str_replace('.php', '', $filename);
            $varName = '$' . lcfirst($classname);
            $props[] = ' * @property-read \DocuSign\\eSign\\Api\\' . $classname . 'Api ' . $varName;
        }
    }

    $props[] = ' */';
    $client = API_DIR . '/../Client.php';
    $content = removeClassDocblock(file_get_contents($client));
    $content = addClassDocBlock($content, implode("\n", $props));
//    print_r($content);
    echo 'Writing Client';
    file_put_contents($client, $content);
}

function removeClassDocblock($content)
{
    return preg_replace('/\/\*\*\n(?:[\n]|.)+(?=\*\/)\*\/\n(class\s[^\n]+)/m', '$1', $content);
}

function addClassDocBlock($content, $docBlock)
{
    return preg_replace('/(class\s+\w+[^\n]+)/', $docBlock . "\n" . '$1', $content);
}


//applyApiDocblocs();
createClientApiEndpoints();