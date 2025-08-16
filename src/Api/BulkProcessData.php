<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class BulkProcessData
 * @method Api\BulkProcessDataApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method mixed createBulkProcessRequest(?string $process_action) Uses the specified bulk envelopes list to update the envelopes specified in the payload
 * @method Models\BulkProcessResponse createBulkProcessRequestToQueue(?string $bulk_process_list_id, ?string $process_action, Models\BulkProcessRequest $bulk_process_request = null) Uses the specified bulk envelopes list to update the envelopes specified in the payload
 * @method Models\BulkProcessResult deleteBulkProcessList(?string $bulk_process_list_id, ?string $process_action) Deletes a specific bulk process list
 * @method Models\BulkProcessResult deleteBulkProcessLists(?string $process_action, Models\BulkProcessingLists $bulk_processing_lists = null) Deletes a specific bulk process list
 * @method mixed getBulkProcessList(?string $bulk_process_list_id, ?string $process_action) Gets a specific bulk process list
 * @method Models\BulkProcessingListSummaries getBulkProcessLists(?string $process_action) Lists top
 * @method mixed updateBulkProcessList(?string $bulk_process_list_id, ?string $process_action) Updates a specific bulk process list
 */
class BulkProcessData extends BaseApi
{
    protected $methodsWithAccountId = [
        'createBulkProcessRequest',
        'createBulkProcessRequestWithHttpInfo',
        'createBulkProcessRequestToQueue',
        'createBulkProcessRequestToQueueWithHttpInfo',
        'deleteBulkProcessList',
        'deleteBulkProcessListWithHttpInfo',
        'deleteBulkProcessLists',
        'deleteBulkProcessListsWithHttpInfo',
        'getBulkProcessList',
        'getBulkProcessListWithHttpInfo',
        'getBulkProcessLists',
        'getBulkProcessListsWithHttpInfo',
        'updateBulkProcessList',
        'updateBulkProcessListWithHttpInfo'
];
}