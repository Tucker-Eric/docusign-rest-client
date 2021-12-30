<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class CloudStorage
 * @method Api\CloudStorageApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method Models\ExternalFolder callList(?string $folder_id, ?string $service_id, ?string $user_id, Api\CloudStorageApi\ListOptions $options = null) Gets a list of all the items from the specified cloud storage provider
 * @method Models\CloudStorageProviders createProvider(?string $user_id, Models\CloudStorageProviders $cloud_storage_providers = null) Configures the redirect URL information  for one or more cloud storage providers for the specified user
 * @method Models\CloudStorageProviders deleteProvider(?string $service_id, ?string $user_id) Deletes the user authentication information for the specified cloud storage provider
 * @method Models\CloudStorageProviders deleteProviders(?string $user_id, Models\CloudStorageProviders $cloud_storage_providers = null) Deletes the user authentication information for one or more cloud storage providers
 * @method Api\CloudStorageApi\GetProviderOptions getProviderOptions(array $options = ['set_redirect_url' => null])
 * @method Models\CloudStorageProviders getProvider(?string $service_id, ?string $user_id, Api\CloudStorageApi\GetProviderOptions $options = null) Gets the specified Cloud Storage Provider configuration for the User
 * @method Api\CloudStorageApi\ListFoldersOptions listFoldersOptions(array $options = ['set_cloud_storage_folder_path' => null, 'set_count' => null, 'set_order' => null, 'set_order_by' => null, 'set_search_text' => null, 'set_start_position' => null])
 * @method Models\ExternalFolder listFolders(?string $service_id, ?string $user_id, Api\CloudStorageApi\ListFoldersOptions $options = null) Retrieves a list of all the items in a specified folder from the specified cloud storage provider
 * @method Api\CloudStorageApi\ListProvidersOptions listProvidersOptions(array $options = ['set_redirect_url' => null])
 * @method Models\CloudStorageProviders listProviders(?string $user_id, Api\CloudStorageApi\ListProvidersOptions $options = null) Get the Cloud Storage Provider configuration for the specified user
 */
class CloudStorage extends BaseApi
{
    protected $methodsWithAccountId = [
        'callList',
        'callListWithHttpInfo',
        'createProvider',
        'createProviderWithHttpInfo',
        'deleteProvider',
        'deleteProviderWithHttpInfo',
        'deleteProviders',
        'deleteProvidersWithHttpInfo',
        'getProvider',
        'getProviderWithHttpInfo',
        'listFolders',
        'listFoldersWithHttpInfo',
        'listProviders',
        'listProvidersWithHttpInfo'
];
}