<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class Notary
 * @method Api\NotaryApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method Models\Notary createNotary(Models\Notary $notary = null) Add a notary to the system
 * @method Models\NotaryJurisdiction createNotaryJurisdictions(Models\NotaryJurisdiction $notary_jurisdiction = null) Add a notary jurisdiction to the system
 * @method mixed deleteNotaryJurisdiction(?string $jurisdiction_id) Delete a notary jurisdiction a specified user
 * @method Api\NotaryApi\GetNotaryOptions getNotaryOptions(array $options = ['set_include_jurisdictions' => null])
 * @method Models\NotaryResult getNotary(Api\NotaryApi\GetNotaryOptions $options = null) Get notary settings for a user
 * @method Models\NotaryJurisdiction getNotaryJurisdiction(?string $jurisdiction_id) Get notary a jurisdiction for a user
 * @method mixed getNotaryJurisdictionSeal(?string $jurisdiction_id) Get notary seal for a jurisdiction
 * @method Models\NotaryJurisdictionList getNotaryJurisdictions() Get notary jurisdictions for a user
 * @method Api\NotaryApi\ListNotaryJournalsOptions listNotaryJournalsOptions(array $options = ['set_count' => null, 'set_search_text' => null, 'set_start_position' => null])
 * @method Models\NotaryJournalList listNotaryJournals(Api\NotaryApi\ListNotaryJournalsOptions $options = null) Get notary jurisdictions for a user
 * @method Models\Notary updateNotary(Models\Notary $notary = null) Update a notary
 * @method Models\NotaryJurisdiction updateNotaryJurisdiction(?string $jurisdiction_id, Models\NotaryJurisdiction $notary_jurisdiction = null) Update a notary jurisdiction
 */
class Notary extends BaseApi
{

}