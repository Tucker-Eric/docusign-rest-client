<?php

namespace DocuSign\Rest\Api;

/**
 * Class Diagnostics
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\DiagnosticsApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method void deleteRequestLogs() Deletes the request log files
 * @method \SplFileObject getRequestLog(string $request_log_id) Gets a request logging log file
 * @method \DocuSign\eSign\Model\DiagnosticsSettingsInformation getRequestLogSettings() Gets the API request logging settings
 * @method \DocuSign\eSign\Model\ResourceInformation getResources() Lists resources for REST version specified
 * @method \DocuSign\eSign\Model\ServiceInformation getService() Retrieves the available REST API versions
 * @method \DocuSign\eSign\Model\ApiRequestLogsResult listRequestLogs() Gets the API request logging log files
 * @method \DocuSign\eSign\Model\DiagnosticsSettingsInformation updateRequestLogSettings(\DocuSign\eSign\Model\DiagnosticsSettingsInformation $diagnostics_settings_information = null) Enables or disables API request logging for troubleshooting
 */
class Diagnostics extends BaseApi
{
    protected $usesAccountId = false;
}