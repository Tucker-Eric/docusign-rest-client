<?php

namespace DocuSign\Rest\Api;

/**
 * Class Groups
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\GroupsApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method \DocuSign\eSign\Model\GroupInformation createGroups(\DocuSign\eSign\Model\GroupInformation $group_information = null) Creates one or more groups for the account
 * @method \DocuSign\eSign\Model\BrandsResponse deleteBrands(string $group_id, \DocuSign\eSign\Model\BrandsRequest $brands_request = null) Deletes brand information from the requested group
 * @method \DocuSign\eSign\Model\UsersResponse deleteGroupUsers(string $group_id, \DocuSign\eSign\Model\UserInfoList $user_info_list = null) Deletes one or more users from a gro
 * @method \DocuSign\eSign\Model\GroupInformation deleteGroups(\DocuSign\eSign\Model\GroupInformation $group_information = null) Deletes an existing user group
 * @method \DocuSign\eSign\Model\BrandsResponse getBrands(string $group_id) Gets group brand ID Information
 * @method \DocuSign\eSign\Api\GroupsApi\ListGroupUsersOptions listGroupUsersOptions(array $options = ['set_count' => null, 'set_start_position' => null])
 * @method \DocuSign\eSign\Model\UsersResponse listGroupUsers(string $group_id, \DocuSign\eSign\Api\GroupsApi\ListGroupUsersOptions $options = null) Gets a list of users in a group
 * @method \DocuSign\eSign\Api\GroupsApi\ListGroupsOptions listGroupsOptions(array $options = ['set_count' => null, 'set_group_type' => null, 'set_search_text' => null, 'set_start_position' => null])
 * @method \DocuSign\eSign\Model\GroupInformation listGroups(\DocuSign\eSign\Api\GroupsApi\ListGroupsOptions $options = null) Gets information about groups associated with the account
 * @method \DocuSign\eSign\Model\BrandsResponse updateBrands(string $group_id, \DocuSign\eSign\Model\BrandsRequest $brands_request = null) Adds group brand ID information to a group
 * @method \DocuSign\eSign\Model\UsersResponse updateGroupUsers(string $group_id, \DocuSign\eSign\Model\UserInfoList $user_info_list = null) Adds one or more users to an existing group
 * @method \DocuSign\eSign\Model\GroupInformation updateGroups(\DocuSign\eSign\Model\GroupInformation $group_information = null) Updates the group information for a group
 */
class Groups extends BaseApi
{

}