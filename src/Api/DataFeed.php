<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class DataFeed
 * @method Api\DataFeedApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method mixed getDataFeedElement(?string $data_feed_element_id) Retrieves a Datafeed element by Id
 */
class DataFeed extends BaseApi
{
    protected $methodsWithAccountId = [
        'getDataFeedElement',
        'getDataFeedElementWithHttpInfo'
];
}