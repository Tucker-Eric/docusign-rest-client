<?php

namespace DocuSign\Rest\Api;

/**
 * Class CloudStorage
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\CloudStorageApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method \DocuSign\eSign\Model\ExternalFolder callList(string $folder_id, string $service_id, string $user_id, \DocuSign\eSign\Api\CloudStorageApi\ListOptions $options = null) Gets a list of all the items from the specified cloud storage provider
 * @method \DocuSign\eSign\Model\CloudStorageProviders createProvider(string $user_id, \DocuSign\eSign\Model\CloudStorageProviders $cloud_storage_providers = null) Configures the redirect URL information  for one or more cloud storage providers for the specified user
 * @method \DocuSign\eSign\Model\CloudStorageProviders deleteProvider(string $service_id, string $user_id) Deletes the user authentication information for the specified cloud storage provider
 * @method \DocuSign\eSign\Model\CloudStorageProviders deleteProviders(string $user_id, \DocuSign\eSign\Model\CloudStorageProviders $cloud_storage_providers = null) Deletes the user authentication information for one or more cloud storage providers
 * @method \DocuSign\eSign\Api\CloudStorageApi\GetProviderOptions getProviderOptions(array $options = ['set_redirect_url' => null])
 * @method \DocuSign\eSign\Model\CloudStorageProviders getProvider(string $service_id, string $user_id, \DocuSign\eSign\Api\CloudStorageApi\GetProviderOptions $options = null) Gets the specified Cloud Storage Provider configuration for the User
 * @method \DocuSign\eSign\Api\CloudStorageApi\ListFoldersOptions listFoldersOptions(array $options = ['set_cloud_storage_folder_path' => null, 'set_count' => null, 'set_order' => null, 'set_order_by' => null, 'set_search_text' => null, 'set_start_position' => null])
 * @method \DocuSign\eSign\Model\ExternalFolder listFolders(string $service_id, string $user_id, \DocuSign\eSign\Api\CloudStorageApi\ListFoldersOptions $options = null) Retrieves a list of all the items in a specified folder from the specified cloud storage provider
 * @method \DocuSign\eSign\Api\CloudStorageApi\ListProvidersOptions listProvidersOptions(array $options = ['set_redirect_url' => null])
 * @method \DocuSign\eSign\Model\CloudStorageProviders listProviders(string $user_id, \DocuSign\eSign\Api\CloudStorageApi\ListProvidersOptions $options = null) Get the Cloud Storage Provider configuration for the specified user
 */
class CloudStorage extends BaseApi
{

}