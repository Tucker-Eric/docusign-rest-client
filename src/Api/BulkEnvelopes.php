<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class BulkEnvelopes
 * @method Api\BulkEnvelopesApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method Models\BulkSendingList createBulkSendList(Models\BulkSendingList $bulk_sending_list = null) Creates a new bulk send list
 * @method Models\BulkSendResponse createBulkSendRequest(?string $bulk_send_list_id, Models\BulkSendRequest $bulk_send_request = null) Uses the specified bulk send list to send the envelope specified in the payload
 * @method Models\BulkSendTestResponse createBulkSendTestRequest(?string $bulk_send_list_id, Models\BulkSendRequest $bulk_send_request = null) Tests whether the specified bulk sending list can be used to send an envelope
 * @method Models\BulkSendingListSummaries deleteBulkSendList(?string $bulk_send_list_id) Deletes an existing bulk send list
 * @method Api\BulkEnvelopesApi\GetBulkSendBatchEnvelopesOptions getBulkSendBatchEnvelopesOptions(array $options = ['set_count' => null, 'set_include' => null, 'set_order' => null, 'set_order_by' => null, 'set_search_text' => null, 'set_start_position' => null, 'set_status' => null])
 * @method Models\EnvelopesInformation getBulkSendBatchEnvelopes(?string $bulk_send_batch_id, Api\BulkEnvelopesApi\GetBulkSendBatchEnvelopesOptions $options = null) Gets envelopes from a specific bulk send batch
 * @method Models\BulkSendBatchStatus getBulkSendBatchStatus(?string $bulk_send_batch_id) Gets a specific bulk send batch status
 * @method Api\BulkEnvelopesApi\GetBulkSendBatchesOptions getBulkSendBatchesOptions(array $options = ['set_batch_ids' => null, 'set_count' => null, 'set_from_date' => null, 'set_search_text' => null, 'set_start_position' => null, 'set_status' => null, 'set_to_date' => null, 'set_user_id' => null])
 * @method Models\BulkSendBatchSummaries getBulkSendBatches(Api\BulkEnvelopesApi\GetBulkSendBatchesOptions $options = null) Returns a list of bulk send batch satuses initiated by account
 * @method Models\BulkSendingList getBulkSendList(?string $bulk_send_list_id) Gets a specific bulk send list
 * @method Models\BulkSendingListSummaries getBulkSendLists() Lists top
 * @method Models\BulkSendBatchStatus updateBulkSendBatchAction(?string $bulk_action, ?string $bulk_send_batch_id, Models\BulkSendBatchActionRequest $bulk_send_batch_action_request = null) Initiate a specific bulk send batch action
 * @method Models\BulkSendBatchStatus updateBulkSendBatchStatus(?string $bulk_send_batch_id, Models\BulkSendBatchRequest $bulk_send_batch_request = null) Put
 * @method Models\BulkSendingList updateBulkSendList(?string $bulk_send_list_id, Models\BulkSendingList $bulk_sending_list = null) Updates an existing bulk send list
 */
class BulkEnvelopes extends BaseApi
{
    protected $methodsWithAccountId = [
        'createBulkSendList',
        'createBulkSendListWithHttpInfo',
        'createBulkSendRequest',
        'createBulkSendRequestWithHttpInfo',
        'createBulkSendTestRequest',
        'createBulkSendTestRequestWithHttpInfo',
        'deleteBulkSendList',
        'deleteBulkSendListWithHttpInfo',
        'getBulkSendBatchEnvelopes',
        'getBulkSendBatchEnvelopesWithHttpInfo',
        'getBulkSendBatchStatus',
        'getBulkSendBatchStatusWithHttpInfo',
        'getBulkSendBatches',
        'getBulkSendBatchesWithHttpInfo',
        'getBulkSendList',
        'getBulkSendListWithHttpInfo',
        'getBulkSendLists',
        'getBulkSendListsWithHttpInfo',
        'updateBulkSendBatchAction',
        'updateBulkSendBatchActionWithHttpInfo',
        'updateBulkSendBatchStatus',
        'updateBulkSendBatchStatusWithHttpInfo',
        'updateBulkSendList',
        'updateBulkSendListWithHttpInfo'
];
}