<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class TrustServiceProviders
 * @method Api\TrustServiceProvidersApi getClient()
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method Api\TrustServiceProvidersApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method Models\AccountSeals getSealProviders() Returns Account available seals for specified account
 */
class TrustServiceProviders extends BaseApi
{
    protected $methodsWithAccountId = [
        'getSealProviders',
        'getSealProvidersWithHttpInfo'
];
}