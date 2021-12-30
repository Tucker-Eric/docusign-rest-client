<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class CustomTabs
 * @method Api\CustomTabsApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method Models\TabMetadataList callList(Api\CustomTabsApi\ListOptions $options = null) Gets a list of all account tabs
 * @method Models\TabMetadata create(Models\TabMetadata $tab_metadata = null) Creates a custom tab
 * @method mixed delete(?string $custom_tab_id) Deletes custom tab information
 * @method Models\TabMetadata get(?string $custom_tab_id) Gets custom tab information
 * @method Models\TabMetadata update(?string $custom_tab_id, Models\TabMetadata $tab_metadata = null) Updates custom tab information
 */
class CustomTabs extends BaseApi
{
    protected $methodsWithAccountId = [
        'callList',
        'callListWithHttpInfo',
        'create',
        'createWithHttpInfo',
        'delete',
        'deleteWithHttpInfo',
        'get',
        'getWithHttpInfo',
        'update',
        'updateWithHttpInfo'
];
}