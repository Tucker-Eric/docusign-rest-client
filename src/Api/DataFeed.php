<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class DataFeed
 * @method Api\DataFeedApi getClient()
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method Api\DataFeedApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method void getDataFeedElement(string $data_feed_element_id) Retrieves a Datafeed element by Id
 */
class DataFeed extends BaseApi
{
    protected $methodsWithAccountId = [
        'getDataFeedElement',
        'getDataFeedElementWithHttpInfo'
];
}