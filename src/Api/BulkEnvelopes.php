<?php

namespace DocuSign\Rest\Api;

/**
 * Class BulkEnvelopes
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\BulkEnvelopesApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method \DocuSign\eSign\Model\BulkEnvelopesResponse callList(\DocuSign\eSign\Api\BulkEnvelopesApi\ListOptions $options = null) Gets status information about bulk recipient batches
 * @method \DocuSign\eSign\Model\BulkRecipientsUpdateResponse deleteRecipients(string $envelope_id, string $recipient_id) Deletes the bulk recipient file from an envelope
 * @method \DocuSign\eSign\Api\BulkEnvelopesApi\GetOptions getOptions(array $options = [])
 * @method \DocuSign\eSign\Model\BulkEnvelopeStatus get(string $batch_id, \DocuSign\eSign\Api\BulkEnvelopesApi\GetOptions $options = null) Gets the status of a specified bulk send operation
 * @method \DocuSign\eSign\Api\BulkEnvelopesApi\GetRecipientsOptions getRecipientsOptions(array $options = [])
 * @method \DocuSign\eSign\Model\BulkRecipientsResponse getRecipients(string $envelope_id, string $recipient_id, \DocuSign\eSign\Api\BulkEnvelopesApi\GetRecipientsOptions $options = null) Gets the bulk recipient file from an envelope
 * @method \DocuSign\eSign\Model\BulkRecipientsSummaryResponse updateRecipients(string $envelope_id, string $recipient_id, \DocuSign\eSign\Model\BulkRecipientsRequest $bulk_recipients_request = null) Adds or replaces envelope bulk recipients
 */
class BulkEnvelopes extends BaseApi
{

}