<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class Diagnostics
 * @method Api\DiagnosticsApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method mixed deleteRequestLogs() Deletes the request log files
 * @method \SplFileObject getRequestLog(?string $request_log_id) Gets a request logging log file
 * @method Models\DiagnosticsSettingsInformation getRequestLogSettings() Gets the API request logging settings
 * @method Models\ResourceInformation getResources() Lists resources for REST version specified
 * @method Models\ServiceInformation getService() Retrieves the available REST API versions
 * @method Api\DiagnosticsApi\ListRequestLogsOptions listRequestLogsOptions(array $options = ['set_encoding' => null])
 * @method Models\ApiRequestLogsResult listRequestLogs(Api\DiagnosticsApi\ListRequestLogsOptions $options = null) Gets the API request logging log files
 * @method Models\DiagnosticsSettingsInformation updateRequestLogSettings(Models\DiagnosticsSettingsInformation $diagnostics_settings_information = null) Enables or disables API request logging for troubleshooting
 */
class Diagnostics extends BaseApi
{

}