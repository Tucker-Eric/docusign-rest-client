<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class Comments
 * @method Api\CommentsApi getClient()
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method Api\CommentsApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method Api\CommentsApi\GetCommentsTranscriptOptions getCommentsTranscriptOptions(array $options = ['set_encoding' => null])
 * @method \SplFileObject getCommentsTranscript(string $envelope_id, Api\CommentsApi\GetCommentsTranscriptOptions $options = null) Gets comment transcript for envelope and user
 */
class Comments extends BaseApi
{
    protected $methodsWithAccountId = [
        'getCommentsTranscript',
        'getCommentsTranscriptWithHttpInfo'
];
}