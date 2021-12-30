<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class TrustServiceProviders
 * @method Api\TrustServiceProvidersApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method Models\AccountSeals getSealProviders() Returns Account available seals for specified account
 */
class TrustServiceProviders extends BaseApi
{
    protected $methodsWithAccountId = [
        'getSealProviders',
        'getSealProvidersWithHttpInfo'
];
}