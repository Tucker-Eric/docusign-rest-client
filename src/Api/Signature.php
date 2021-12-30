<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class Signature
 * @method Api\SignatureApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method DocuSign\eSign\Model\CompleteSignHashResponse completeSignHash(Models\CompleteSignRequest $complete_sign_request = null) Complete Sign Hash
 * @method DocuSign\eSign\Model\UserInfoResponse getUserInfo() Get User Info To Sign Document
 * @method mixed healthCheck(Models\TspHealthCheckRequest $tsp_health_check_request = null) Report status from the TSP to DocuSign
 * @method DocuSign\eSign\Model\SignHashSessionInfoResponse signHashSessionInfo(Models\SignSessionInfoRequest $sign_session_info_request = null) Get Signature Session Info To Sign Document Hash
 * @method DocuSign\eSign\Model\UpdateTransactionResponse updateTransaction(Models\UpdateTransactionRequest $update_transaction_request = null) Report an error from the tsp to docusign
 */
class Signature extends BaseApi
{

}