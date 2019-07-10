<?php

namespace DocuSign\Rest;

use DocuSign\eSign\Client\ApiClient;
use DocuSign\eSign\Configuration;


class Client
{
    /**
     * Change to production before going live
     *
     * @var string
     */
    protected $host = "https://demo.docusign.net/restapi";

    /**
     * Docusign Username
     *
     * @var string
     */
    protected $username = '';

    /**
     * Docusign Password
     *
     * @var string
     */
    protected $password = '';

    /**
     * Docusign Integrator Key
     *
     * @var string
     */
    protected $integrator_key = '';

    /**
     * Docusign Esign Api Client
     *
     * @var ApiClient
     */
    protected $client;

    /**
     * Docusign Account Id
     *
     * @var string
     */
    protected $account_id;

    /**
     * Container for all instantiated api objects
     * @var array
     */
    private $_api_container = [];

    /**
     * @var bool
     */
    protected $authenticated = false;

    public function __construct($params = [])
    {
        foreach ($params as $key => $val) {
            $this->{$key} = $val;
        }

        $this->initApiClient();
    }

    private function initApiClient()
    {
        $this->client = new ApiClient($this->setConfiguration());
    }

    public function setConfiguration()
    {
        return (new Configuration)->setHost($this->host)
            ->addDefaultHeader("X-DocuSign-Authentication", json_encode([
                'Username'      => $this->username,
                'Password'      => $this->password,
                'IntegratorKey' => $this->integrator_key
            ]));
    }

    public function getHost()
    {
        return $this->host;
    }

    /**
     * This magic method is to instantiate all classes in the \DocuSign\eSign\Model namespace
     *
     * @param $method
     * @param $args
     * @return mixed
     * @throws Exceptions\ClassNotFoundException
     */
    public function __call($method, $args)
    {
        $model = "DocuSign\\eSign\\Model\\" . ucfirst($method);
        if (class_exists($model)) {
            // Instantiate the new model
            $docusignModel = new $model;
            if (is_array($args[0])) {
                $setters = $docusignModel->setters();
                // We have to set it this way because if we dont the indexes of docusign's construct
                // Are all undefined.  So this way we can set what we want
                foreach ($args[0] as $field => $val) {
                    $docusignModel->{$setters[$field]}($val);
                }
            }

            return $docusignModel;
        }

        throw new Exceptions\ClassNotFoundException("Cannot Find Model Class $model");
    }

    /**
     * Used to instantiate our helper classes in the DocuSign\Rest\Api namespace
     * Which are really just accessors for the \DocuSign\eSign\Api namespace
     * that automatically inject the account_id and saves us the headache of passing that around
     *
     * @param $name
     * @return mixed
     * @throws Exceptions\ClassNotFoundException
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->_api_container)) {
            return $this->_api_container[$name];
        }

        if (!class_exists($apiClass = "DocuSign\\Rest\\Api\\" . ucfirst($name))) {
            throw new Exceptions\ClassNotFoundException("Cannot Find Api Class $apiClass");
        }

        return $this->_api_container[$name] = new $apiClass($this);
    }

    /**
     * Authenticates api client, stores account_id, and updates host if changed by docusign
     *
     * @return $this
     */
    public function authenticate()
    {
        if (!isset($this->account_id)) {
            $accounts = $this->authentication->login();
            $login_accounts = $accounts->getLoginAccounts();
            $account = $login_accounts[0];
            $this->account_id = $account->getAccountId();
            $base_url = $account->getBaseUrl();
            $base_url = strtolower(substr($base_url, 0, strpos($base_url,'/restapi') + 8));
            // If the host has changed, update host on client config
            if ($this->host !== $base_url) {
              $this->host = $base_url;
              $this->_api_container = [];
              $this->initApiClient();
            }
        }

        $this->authenticated = true;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAuthenticated()
    {
        return $this->authenticated;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
        if (null === $this->account_id) {
            $this->authenticate();
        }

        return $this->account_id;
    }

    /**
     * @return ApiClient
     */
    public function getClient()
    {
        return $this->client;
    }
}
