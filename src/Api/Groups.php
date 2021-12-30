<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class Groups
 * @method Api\GroupsApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method Models\GroupInformation createGroups(Models\GroupInformation $group_information = null) Creates one or more groups for the account
 * @method Models\GroupBrands deleteBrands(?string $group_id, Models\BrandsRequest $brands_request = null) Deletes brand information from the requested group
 * @method Models\UsersResponse deleteGroupUsers(?string $group_id, Models\UserInfoList $user_info_list = null) Deletes one or more users from a gro
 * @method Models\GroupInformation deleteGroups(Models\GroupInformation $group_information = null) Deletes an existing user group
 * @method Models\GroupBrands getBrands(?string $group_id) Gets group brand ID Information
 * @method Api\GroupsApi\ListGroupUsersOptions listGroupUsersOptions(array $options = ['set_count' => null, 'set_start_position' => null])
 * @method Models\UsersResponse listGroupUsers(?string $group_id, Api\GroupsApi\ListGroupUsersOptions $options = null) Gets a list of users in a group
 * @method Api\GroupsApi\ListGroupsOptions listGroupsOptions(array $options = ['set_count' => null, 'set_group_type' => null, 'set_include_usercount' => null, 'set_search_text' => null, 'set_start_position' => null])
 * @method Models\GroupInformation listGroups(Api\GroupsApi\ListGroupsOptions $options = null) Gets information about groups associated with the account
 * @method Models\GroupBrands updateBrands(?string $group_id, Models\BrandsRequest $brands_request = null) Adds group brand ID information to a group
 * @method Models\UsersResponse updateGroupUsers(?string $group_id, Models\UserInfoList $user_info_list = null) Adds one or more users to an existing group
 * @method Models\GroupInformation updateGroups(Models\GroupInformation $group_information = null) Updates the group information for a group
 */
class Groups extends BaseApi
{
    protected $methodsWithAccountId = [
        'createGroups',
        'createGroupsWithHttpInfo',
        'deleteBrands',
        'deleteBrandsWithHttpInfo',
        'deleteGroupUsers',
        'deleteGroupUsersWithHttpInfo',
        'deleteGroups',
        'deleteGroupsWithHttpInfo',
        'getBrands',
        'getBrandsWithHttpInfo',
        'listGroupUsers',
        'listGroupUsersWithHttpInfo',
        'listGroups',
        'listGroupsWithHttpInfo',
        'updateBrands',
        'updateBrandsWithHttpInfo',
        'updateGroupUsers',
        'updateGroupUsersWithHttpInfo',
        'updateGroups',
        'updateGroupsWithHttpInfo'
];
}