<?php

namespace DocuSign\Rest\Api;

/**
 * Class Folders
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\FoldersApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method \DocuSign\eSign\Model\FoldersResponse callList() Gets a list of the folders for the account
 * @method \DocuSign\eSign\Model\FolderItemsResponse listItems(string $folder_id) Gets a list of the envelopes in the specified folder
 * @method void moveEnvelopes(string $folder_id, \DocuSign\eSign\Model\FoldersRequest $folders_request = null) Moves an envelope from its current folder to the specified folder
 * @method \DocuSign\eSign\Model\FolderItemResponse search(string $search_folder_id) Gets a list of envelopes in folders matching the specified criteria
 */
class Folders extends BaseApi
{

}