<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class BulkProcessDataSend
 * @method Api\BulkProcessDataSendApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method Models\BulkProcessResponse createBulkProcessRequestToQueue(?string $bulk_process_list_id, ?string $process_action, Models\BulkProcessRequest $bulk_process_request = null) Uses the specified bulk envelopes list to update the envelopes specified in the payload
 * @method Models\BulkProcessResult deleteBulkProcessList(?string $bulk_process_list_id, ?string $process_action) Deletes a specific bulk process list
 * @method mixed getBulkProcessList(?string $bulk_process_list_id, ?string $process_action) Gets a specific bulk process list
 * @method mixed updateBulkProcessList(?string $bulk_process_list_id, ?string $process_action) Updates a specific bulk process list
 */
class BulkProcessDataSend extends BaseApi
{
    protected $methodsWithAccountId = [
        'createBulkProcessRequestToQueue',
        'createBulkProcessRequestToQueueWithHttpInfo',
        'deleteBulkProcessList',
        'deleteBulkProcessListWithHttpInfo',
        'getBulkProcessList',
        'getBulkProcessListWithHttpInfo',
        'updateBulkProcessList',
        'updateBulkProcessListWithHttpInfo'
];
}