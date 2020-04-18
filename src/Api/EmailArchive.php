<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class EmailArchive
 * @method Api\EmailArchiveApi getClient()
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method Api\EmailArchiveApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method Models\BccEmailArchive createBCCEmailArchive(Models\BccEmailArchive $bcc_email_archive = null) Creates a blind carbon copy email archive entry
 * @method void deleteBCCEmailArchive(string $bcc_email_archive_id) Delete a blind carbon copy email archive for an account
 * @method Api\EmailArchiveApi\GetBccEmailArchiveHistoryListOptions getBCCEmailArchiveHistoryListOptions(array $options = ['set_count' => null, 'set_start_position' => null])
 * @method Models\BccEmailArchiveHistoryList getBCCEmailArchiveHistoryList(string $bcc_email_archive_id, Api\EmailArchiveApi\GetBccEmailArchiveHistoryListOptions $options = null) Get the blind carbon copy email archive history entries for the specified archive
 * @method Api\EmailArchiveApi\GetBccEmailArchiveListOptions getBCCEmailArchiveListOptions(array $options = ['set_count' => null, 'set_start_position' => null])
 * @method Models\BccEmailArchiveList getBCCEmailArchiveList(Api\EmailArchiveApi\GetBccEmailArchiveListOptions $options = null) Get the blind carbon copy email archive entries owned by the specified account
 */
class EmailArchive extends BaseApi
{
    protected $methodsWithAccountId = [
        'createBCCEmailArchive',
        'createBCCEmailArchiveWithHttpInfo',
        'deleteBCCEmailArchive',
        'deleteBCCEmailArchiveWithHttpInfo',
        'getBCCEmailArchiveHistoryList',
        'getBCCEmailArchiveHistoryListWithHttpInfo',
        'getBCCEmailArchiveList',
        'getBCCEmailArchiveListWithHttpInfo'
];
}