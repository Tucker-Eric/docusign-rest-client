<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class Folders
 * @method Api\FoldersApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method Models\FoldersResponse callList(Api\FoldersApi\ListOptions $options = null) Gets a list of the folders for the account
 * @method Api\FoldersApi\ListItemsOptions listItemsOptions(array $options = ['set_from_date' => null, 'set_include_items' => null, 'set_owner_email' => null, 'set_owner_name' => null, 'set_search_text' => null, 'set_start_position' => null, 'set_status' => null, 'set_to_date' => null])
 * @method Models\FolderItemsResponse listItems(?string $folder_id, Api\FoldersApi\ListItemsOptions $options = null) Gets a list of the envelopes in the specified folder
 * @method Models\FoldersResponse moveEnvelopes(?string $folder_id, Models\FoldersRequest $folders_request = null) Moves an envelope from its current folder to the specified folder
 * @method Api\FoldersApi\SearchOptions searchOptions(array $options = ['set_all' => null, 'set_count' => null, 'set_from_date' => null, 'set_include_recipients' => null, 'set_order' => null, 'set_order_by' => null, 'set_start_position' => null, 'set_to_date' => null])
 * @method Models\FolderItemResponse search(?string $search_folder_id, Api\FoldersApi\SearchOptions $options = null) Gets a list of envelopes in folders matching the specified criteria
 */
class Folders extends BaseApi
{
    protected $methodsWithAccountId = [
        'callList',
        'callListWithHttpInfo',
        'listItems',
        'listItemsWithHttpInfo',
        'moveEnvelopes',
        'moveEnvelopesWithHttpInfo',
        'search',
        'searchWithHttpInfo'
];
}