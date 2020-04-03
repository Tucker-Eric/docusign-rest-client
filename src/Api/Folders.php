<?php

namespace DocuSign\Rest\Api;

/**
 * Class Folders
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\FoldersApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method \DocuSign\eSign\Model\FoldersResponse callList(\DocuSign\eSign\Api\FoldersApi\ListOptions $options = null) Gets a list of the folders for the account
 * @method \DocuSign\eSign\Api\FoldersApi\ListItemsOptions listItemsOptions(array $options = ['set_from_date' => null, 'set_owner_email' => null, 'set_owner_name' => null, 'set_search_text' => null, 'set_start_position' => null, 'set_status' => null, 'set_to_date' => null])
 * @method \DocuSign\eSign\Model\FolderItemsResponse listItems(string $folder_id, \DocuSign\eSign\Api\FoldersApi\ListItemsOptions $options = null) Gets a list of the envelopes in the specified folder
 * @method void moveEnvelopes(string $folder_id, \DocuSign\eSign\Model\FoldersRequest $folders_request = null) Moves an envelope from its current folder to the specified folder
 * @method \DocuSign\eSign\Api\FoldersApi\SearchOptions searchOptions(array $options = ['set_all' => null, 'set_count' => null, 'set_from_date' => null, 'set_include_recipients' => null, 'set_order' => null, 'set_order_by' => null, 'set_start_position' => null, 'set_to_date' => null])
 * @method \DocuSign\eSign\Model\FolderItemResponse search(string $search_folder_id, \DocuSign\eSign\Api\FoldersApi\SearchOptions $options = null) Gets a list of envelopes in folders matching the specified criteria
 */
class Folders extends BaseApi
{

}