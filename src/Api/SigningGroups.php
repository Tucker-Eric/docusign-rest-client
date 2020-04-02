<?php

namespace DocuSign\Rest\Api;

/**
 * Class SigningGroups
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\SigningGroupsApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method \DocuSign\eSign\Model\SigningGroupInformation callList(\DocuSign\eSign\Api\SigningGroupsApi\ListOptions $options = null) Gets a list of the Signing Groups in an account
 * @method \DocuSign\eSign\Model\SigningGroupInformation createList(\DocuSign\eSign\Model\SigningGroupInformation $signing_group_information = null) Creates a signing group
 * @method \DocuSign\eSign\Model\SigningGroupInformation deleteList(\DocuSign\eSign\Model\SigningGroupInformation $signing_group_information = null) Deletes one or more signing groups
 * @method \DocuSign\eSign\Model\SigningGroupUsers deleteUsers(string $signing_group_id, \DocuSign\eSign\Model\SigningGroupUsers $signing_group_users = null) Deletes  one or more members from a signing group
 * @method \DocuSign\eSign\Model\SigningGroup get(string $signing_group_id) Gets information about a signing group
 * @method \DocuSign\eSign\Model\SigningGroupUsers listUsers(string $signing_group_id) Gets a list of members in a Signing Group
 * @method \DocuSign\eSign\Model\SigningGroup update(string $signing_group_id, \DocuSign\eSign\Model\SigningGroup $signing_group = null) Updates a signing group
 * @method \DocuSign\eSign\Model\SigningGroupInformation updateList(\DocuSign\eSign\Model\SigningGroupInformation $signing_group_information = null) Updates signing group names
 * @method \DocuSign\eSign\Model\SigningGroupUsers updateUsers(string $signing_group_id, \DocuSign\eSign\Model\SigningGroupUsers $signing_group_users = null) Adds members to a signing group
 */
class SigningGroups extends BaseApi
{

}