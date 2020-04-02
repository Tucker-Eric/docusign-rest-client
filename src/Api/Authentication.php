<?php

namespace DocuSign\Rest\Api;

/**
 * Class Authentication
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\AuthenticationApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method void deleteSocialLogin(string $user_id, \DocuSign\eSign\Model\SocialAccountInformation $social_account_information = null) Deletes user
 * @method \DocuSign\eSign\Model\OauthAccess getOAuthToken() Creates an authorization token
 * @method \DocuSign\eSign\Model\UserSocialIdResult listSocialLogins(string $user_id) Gets a list of a user
 * @method \DocuSign\eSign\Api\AuthenticationApi\LoginOptions loginOptions(array $options = [])
 * @method \DocuSign\eSign\Model\LoginInformation login(\DocuSign\eSign\Api\AuthenticationApi\LoginOptions $options = null) Gets login information for a specified user
 * @method void revokeOAuthToken() Revokes an authorization token
 * @method void updatePassword(string $login_part, \DocuSign\eSign\Model\UserPasswordInformation $user_password_information = null) Updates the password for a specified user is supported
 * @method void updateSocialLogin(string $user_id, \DocuSign\eSign\Model\SocialAccountInformation $social_account_information = null) Adds social account for a user
 */
class Authentication extends BaseApi
{

}