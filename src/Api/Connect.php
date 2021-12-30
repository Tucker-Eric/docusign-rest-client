<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class Connect
 * @method Api\ConnectApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method Models\ConnectCustomConfiguration createConfiguration(Models\ConnectCustomConfiguration $connect_custom_configuration = null) Creates a connect configuration for the specified account
 * @method mixed deleteConfiguration(?string $connect_id) Deletes the specified connect configuration
 * @method Models\ConnectDeleteFailureResult deleteEventFailureLog(?string $failure_id) Deletes a Connect failure log entry
 * @method mixed deleteEventLog(?string $log_id) Deletes a specified Connect log entry
 * @method mixed deleteEventLogs() Gets a list of Connect log entries
 * @method Models\MobileNotifierConfigurationInformation deleteMobileNotifiers(Models\MobileNotifierConfigurationInformation $mobile_notifier_configuration_information = null) Reserved
 * @method Models\ConnectConfigResults getConfiguration(?string $connect_id) Get a Connect Configuration Information
 * @method Api\ConnectApi\GetConnectAllUsersOptions getConnectAllUsersOptions(array $options = ['set_count' => null, 'set_email_substring' => null, 'set_is_recipient_connect_config' => null, 'set_start_position' => null, 'set_status' => null, 'set_user_name_substring' => null])
 * @method Models\IntegratedConnectUserInfoList getConnectAllUsers(?string $connect_id, Api\ConnectApi\GetConnectAllUsersOptions $options = null) Returns all users from the configured Connect service
 * @method Api\ConnectApi\GetEventLogOptions getEventLogOptions(array $options = ['set_additional_info' => null])
 * @method Models\ConnectLog getEventLog(?string $log_id, Api\ConnectApi\GetEventLogOptions $options = null) Get the specified Connect log entry
 * @method Models\ConnectConfigResults listConfigurations() Get Connect Configuration Information
 * @method Api\ConnectApi\ListEventFailureLogsOptions listEventFailureLogsOptions(array $options = ['set_from_date' => null, 'set_to_date' => null])
 * @method Models\ConnectLogs listEventFailureLogs(Api\ConnectApi\ListEventFailureLogsOptions $options = null) Gets the Connect failure log information
 * @method Api\ConnectApi\ListEventLogsOptions listEventLogsOptions(array $options = ['set_from_date' => null, 'set_to_date' => null])
 * @method Models\ConnectLogs listEventLogs(Api\ConnectApi\ListEventLogsOptions $options = null) Gets the Connect log
 * @method Models\MobileNotifierConfigurationInformation listMobileNotifiers() Reserved
 * @method Api\ConnectApi\ListUsersOptions listUsersOptions(array $options = ['set_count' => null, 'set_email_substring' => null, 'set_list_included_users' => null, 'set_start_position' => null, 'set_status' => null, 'set_user_name_substring' => null])
 * @method Models\IntegratedUserInfoList listUsers(?string $connect_id, Api\ConnectApi\ListUsersOptions $options = null) Returns users from the configured Connect service
 * @method Models\ConnectFailureResults retryEventForEnvelope(?string $envelope_id) Republishes Connect information for the specified envelope
 * @method Models\ConnectFailureResults retryEventForEnvelopes(Models\ConnectFailureFilter $connect_failure_filter = null) Republishes Connect information for multiple envelopes
 * @method Models\ConnectCustomConfiguration updateConfiguration(Models\ConnectCustomConfiguration $connect_custom_configuration = null) Updates a specified Connect configuration
 * @method Models\MobileNotifierConfigurationInformation updateMobileNotifiers(Models\MobileNotifierConfigurationInformation $mobile_notifier_configuration_information = null) Reserved
 */
class Connect extends BaseApi
{
    protected $methodsWithAccountId = [
        'createConfiguration',
        'createConfigurationWithHttpInfo',
        'deleteConfiguration',
        'deleteConfigurationWithHttpInfo',
        'deleteEventFailureLog',
        'deleteEventFailureLogWithHttpInfo',
        'deleteEventLog',
        'deleteEventLogWithHttpInfo',
        'deleteEventLogs',
        'deleteEventLogsWithHttpInfo',
        'deleteMobileNotifiers',
        'deleteMobileNotifiersWithHttpInfo',
        'getConfiguration',
        'getConfigurationWithHttpInfo',
        'getConnectAllUsers',
        'getConnectAllUsersWithHttpInfo',
        'getEventLog',
        'getEventLogWithHttpInfo',
        'listConfigurations',
        'listConfigurationsWithHttpInfo',
        'listEventFailureLogs',
        'listEventFailureLogsWithHttpInfo',
        'listEventLogs',
        'listEventLogsWithHttpInfo',
        'listMobileNotifiers',
        'listMobileNotifiersWithHttpInfo',
        'listUsers',
        'listUsersWithHttpInfo',
        'retryEventForEnvelope',
        'retryEventForEnvelopeWithHttpInfo',
        'retryEventForEnvelopes',
        'retryEventForEnvelopesWithHttpInfo',
        'updateConfiguration',
        'updateConfigurationWithHttpInfo',
        'updateMobileNotifiers',
        'updateMobileNotifiersWithHttpInfo'
];
}