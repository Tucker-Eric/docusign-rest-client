<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class SigningGroups
 * @method Api\SigningGroupsApi getClient()
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method Api\SigningGroupsApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method Models\SigningGroupInformation callList(Api\SigningGroupsApi\ListOptions $options = null) Gets a list of the Signing Groups in an account
 * @method Models\SigningGroupInformation createList(Models\SigningGroupInformation $signing_group_information = null) Creates a signing group
 * @method Models\SigningGroupInformation deleteList(Models\SigningGroupInformation $signing_group_information = null) Deletes one or more signing groups
 * @method Models\SigningGroupUsers deleteUsers(string $signing_group_id, Models\SigningGroupUsers $signing_group_users = null) Deletes  one or more members from a signing group
 * @method Models\SigningGroup get(string $signing_group_id) Gets information about a signing group
 * @method Models\SigningGroupUsers listUsers(string $signing_group_id) Gets a list of members in a Signing Group
 * @method Models\SigningGroup update(string $signing_group_id, Models\SigningGroup $signing_group = null) Updates a signing group
 * @method Models\SigningGroupInformation updateList(Models\SigningGroupInformation $signing_group_information = null) Updates signing group names
 * @method Models\SigningGroupUsers updateUsers(string $signing_group_id, Models\SigningGroupUsers $signing_group_users = null) Adds members to a signing group
 */
class SigningGroups extends BaseApi
{
    protected $methodsWithAccountId = [
        'callList',
        'callListWithHttpInfo',
        'createList',
        'createListWithHttpInfo',
        'deleteList',
        'deleteListWithHttpInfo',
        'deleteUsers',
        'deleteUsersWithHttpInfo',
        'get',
        'getWithHttpInfo',
        'listUsers',
        'listUsersWithHttpInfo',
        'update',
        'updateWithHttpInfo',
        'updateList',
        'updateListWithHttpInfo',
        'updateUsers',
        'updateUsersWithHttpInfo'
];
}