<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class BulkEnvelopes
 * @method Api\BulkEnvelopesApi getClient()
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method Api\BulkEnvelopesApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method Models\BulkEnvelopesResponse callList(Api\BulkEnvelopesApi\ListOptions $options = null) Gets status information about bulk recipient batches
 * @method Models\BulkSendingList createBulkSendList(Models\BulkSendingList $bulk_sending_list = null) Creates a new bulk send list
 * @method Models\BulkSendResponse createBulkSendRequest(string $bulk_send_list_id, Models\BulkSendRequest $bulk_send_request = null) Uses the specified bulk send list to send the envelope specified in the payload
 * @method Models\BulkSendTestResponse createBulkSendTestRequest(string $bulk_send_list_id, Models\BulkSendRequest $bulk_send_request = null) Tests whether the specified bulk sending list can be used to send an envelope
 * @method Models\BulkSendingListSummaries deleteBulkSendList(string $bulk_send_list_id) Deletes an existing bulk send list
 * @method Models\BulkRecipientsUpdateResponse deleteRecipients(string $envelope_id, string $recipient_id) Deletes the bulk recipient file from an envelope
 * @method Api\BulkEnvelopesApi\GetOptions getOptions(array $options = ['set_count' => null, 'set_include' => null, 'set_start_position' => null])
 * @method Models\BulkEnvelopeStatus get(string $batch_id, Api\BulkEnvelopesApi\GetOptions $options = null) Gets the status of a specified bulk send operation
 * @method Models\BulkSendBatchStatus getBulkSendBatchStatus(string $bulk_send_batch_id) Gets a specific bulk send batch status
 * @method Api\BulkEnvelopesApi\GetBulkSendBatchesOptions getBulkSendBatchesOptions(array $options = ['set_batch_ids' => null, 'set_count' => null, 'set_start_position' => null, 'set_status' => null])
 * @method Models\BulkSendBatchSummaries getBulkSendBatches(Api\BulkEnvelopesApi\GetBulkSendBatchesOptions $options = null) Returns a list of bulk send batch satuses initiated by account
 * @method Models\BulkSendingList getBulkSendList(string $bulk_send_list_id) Gets a specific bulk send list
 * @method Models\BulkSendingListSummaries getBulkSendLists() Lists top
 * @method Api\BulkEnvelopesApi\GetRecipientsOptions getRecipientsOptions(array $options = ['set_include_tabs' => null, 'set_start_position' => null])
 * @method Models\BulkRecipientsResponse getRecipients(string $envelope_id, string $recipient_id, Api\BulkEnvelopesApi\GetRecipientsOptions $options = null) Gets the bulk recipient file from an envelope
 * @method Models\BulkSendingList updateBulkSendList(string $bulk_send_list_id, Models\BulkSendingList $bulk_sending_list = null) Updates an existing bulk send list
 * @method Models\BulkRecipientsSummaryResponse updateRecipients(string $envelope_id, string $recipient_id, string $bulk_recipients_request) Adds or replaces envelope bulk recipients
 */
class BulkEnvelopes extends BaseApi
{
    protected $methodsWithAccountId = [
        'callList',
        'callListWithHttpInfo',
        'createBulkSendList',
        'createBulkSendListWithHttpInfo',
        'createBulkSendRequest',
        'createBulkSendRequestWithHttpInfo',
        'createBulkSendTestRequest',
        'createBulkSendTestRequestWithHttpInfo',
        'deleteBulkSendList',
        'deleteBulkSendListWithHttpInfo',
        'deleteRecipients',
        'deleteRecipientsWithHttpInfo',
        'get',
        'getWithHttpInfo',
        'getBulkSendBatchStatus',
        'getBulkSendBatchStatusWithHttpInfo',
        'getBulkSendBatches',
        'getBulkSendBatchesWithHttpInfo',
        'getBulkSendList',
        'getBulkSendListWithHttpInfo',
        'getBulkSendLists',
        'getBulkSendListsWithHttpInfo',
        'getRecipients',
        'getRecipientsWithHttpInfo',
        'updateBulkSendList',
        'updateBulkSendListWithHttpInfo',
        'updateRecipients',
        'updateRecipientsWithHttpInfo'
];
}