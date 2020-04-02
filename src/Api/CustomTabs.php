<?php

namespace DocuSign\Rest\Api;

/**
 * Class CustomTabs
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\CustomTabsApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method \DocuSign\eSign\Model\TabMetadataList callList(\DocuSign\eSign\Api\CustomTabsApi\ListOptions $options = null) Gets a list of all account tabs
 * @method \DocuSign\eSign\Model\TabMetadata create(\DocuSign\eSign\Model\TabMetadata $tab_metadata = null) Creates a custom tab
 * @method void delete(string $custom_tab_id) Deletes custom tab information
 * @method \DocuSign\eSign\Model\TabMetadata get(string $custom_tab_id) Gets custom tab information
 * @method \DocuSign\eSign\Model\TabMetadata update(string $custom_tab_id, \DocuSign\eSign\Model\TabMetadata $tab_metadata = null) Updates custom tab information
 */
class CustomTabs extends BaseApi
{

}