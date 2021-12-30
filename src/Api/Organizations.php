<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class Organizations
 * @method Api\OrganizationsApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method mixed deleteReport(?string $organization_id, ?string $report_correlation_id) Retrieves org level report by correlation id and site
 * @method mixed getReport(?string $organization_id, ?string $report_correlation_id) Retrieves org level report by correlation id and site
 */
class Organizations extends BaseApi
{

}