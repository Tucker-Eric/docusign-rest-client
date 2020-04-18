<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class Organizations
 * @method Api\OrganizationsApi getClient()
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method Api\OrganizationsApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method void deleteReport(string $organization_id, string $report_correlation_id) Retrieves org level report by correlation id and site
 * @method void getReport(string $organization_id, string $report_correlation_id) Retrieves org level report by correlation id and site
 */
class Organizations extends BaseApi
{

}