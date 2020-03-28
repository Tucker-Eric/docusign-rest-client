<?php

namespace DocuSign\Rest\Api;

/**
 * Class Connect
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\ConnectApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method \DocuSign\eSign\Model\ConnectCustomConfiguration createConfiguration(\DocuSign\eSign\Model\ConnectCustomConfiguration $connect_custom_configuration = null) Creates a connect configuration for the specified account
 * @method void deleteConfiguration(string $connect_id) Deletes the specified connect configuration
 * @method void deleteEventFailureLog(string $failure_id) Deletes a Connect failure log entry
 * @method void deleteEventLog(string $log_id) Deletes a specified Connect log entry
 * @method void deleteEventLogs() Gets a list of Connect log entries
 * @method \DocuSign\eSign\Model\ConnectConfigResults getConfiguration(string $connect_id) Get a Connect Configuration Information
 * @method \DocuSign\eSign\Model\ConnectLog getEventLog(string $log_id) Get the specified Connect log entry
 * @method \DocuSign\eSign\Model\ConnectConfigResults listConfigurations() Get Connect Configuration Information
 * @method \DocuSign\eSign\Model\ConnectLogs listEventFailureLogs() Gets the Connect failure log information
 * @method \DocuSign\eSign\Model\ConnectLogs listEventLogs() Gets the Connect log
 * @method \DocuSign\eSign\Model\IntegratedUserInfoList listUsers(string $connect_id) Returns users from the configured Connect service
 * @method \DocuSign\eSign\Model\ConnectFailureResults retryEventForEnvelope(string $envelope_id) Republishes Connect information for the specified envelope
 * @method \DocuSign\eSign\Model\ConnectFailureResults retryEventForEnvelopes(\DocuSign\eSign\Model\ConnectFailureFilter $connect_failure_filter = null) Republishes Connect information for multiple envelopes
 * @method \DocuSign\eSign\Model\ConnectCustomConfiguration updateConfiguration(\DocuSign\eSign\Model\ConnectCustomConfiguration $connect_custom_configuration = null) Updates a specified Connect configuration
 */
class Connect extends BaseApi
{

}