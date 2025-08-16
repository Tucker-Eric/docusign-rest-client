<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class Users
 * @method Api\UsersApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method Models\UserInformationList callList(Api\UsersApi\ListOptions $options = null) Retrieves the list of users for the specified account
 * @method Models\NewUsersSummary create(Models\NewUsersDefinition $new_users_definition = null) Adds news user to the specified account
 * @method Models\UserSignaturesInformation createSignatures(?string $user_id, Models\UserSignaturesInformation $user_signatures_information = null) Adds user Signature and initials images to a Signature
 * @method Api\UsersApi\DeleteOptions deleteOptions(array $options = ['set_delete' => null])
 * @method Models\UsersResponse delete(Models\UserInfoList $user_info_list = null, Api\UsersApi\DeleteOptions $options = null) Removes users account privileges
 * @method Models\ContactUpdateResponse deleteContactWithId(?string $contact_id) Replaces a particular contact associated with an account for the DocuSign service
 * @method Models\ContactUpdateResponse deleteContacts(Models\ContactModRequest $contact_mod_request = null) Delete contacts associated with an account for the DocuSign service
 * @method Models\CustomSettingsInformation deleteCustomSettings(?string $user_id, Models\CustomSettingsInformation $custom_settings_information = null) Deletes custom user settings for a specified user
 * @method mixed deleteProfileImage(?string $user_id) Deletes the user profile image for the specified user
 * @method mixed deleteSignature(?string $signature_id, ?string $user_id) Removes removes signature information for the specified user
 * @method Models\UserSignature deleteSignatureImage(?string $image_type, ?string $signature_id, ?string $user_id) Deletes the user initials image or the  user signature image for the specified user or
 * @method Api\UsersApi\GetContactByIdOptions getContactByIdOptions(array $options = ['set_cloud_provider' => null])
 * @method Models\ContactGetResponse getContactById(?string $contact_id, Api\UsersApi\GetContactByIdOptions $options = null) Gets a particular contact associated with the user
 * @method Api\UsersApi\GetInformationOptions getInformationOptions(array $options = ['set_additional_info' => null, 'set_email' => null])
 * @method Models\UserInformation getInformation(?string $user_id, Api\UsersApi\GetInformationOptions $options = null) Gets the user information for a specified user
 * @method Models\UserProfile getProfile(?string $user_id) Retrieves the user profile for a specified user
 * @method Api\UsersApi\GetProfileImageOptions getProfileImageOptions(array $options = ['set_encoding' => null])
 * @method \SplFileObject getProfileImage(?string $user_id, Api\UsersApi\GetProfileImageOptions $options = null) Retrieves the user profile image for the specified user
 * @method Models\UserSettingsInformation getSettings(?string $user_id) Gets the user account settings for a specified user
 * @method Models\UserSignature getSignature(?string $signature_id, ?string $user_id) Gets the user signature information for the specified user
 * @method Api\UsersApi\GetSignatureImageOptions getSignatureImageOptions(array $options = ['set_include_chrome' => null])
 * @method \SplFileObject getSignatureImage(?string $image_type, ?string $signature_id, ?string $user_id, Api\UsersApi\GetSignatureImageOptions $options = null) Retrieves the user initials image or the  user signature image for the specified user or
 * @method Models\CustomSettingsInformation listCustomSettings(?string $user_id) Retrieves the custom user settings for a specified user
 * @method Api\UsersApi\ListSignaturesOptions listSignaturesOptions(array $options = ['set_stamp_type' => null])
 * @method Models\UserSignaturesInformation listSignatures(?string $user_id, Api\UsersApi\ListSignaturesOptions $options = null) Retrieves a list of user signature definitions for a specified user
 * @method Models\ContactUpdateResponse postContacts(Models\ContactModRequest $contact_mod_request = null) Imports multiple new contacts into the contacts collection from CSV
 * @method Models\ContactUpdateResponse putContacts(Models\ContactModRequest $contact_mod_request = null) Replaces contacts associated with an account for the DocuSign service
 * @method Models\CustomSettingsInformation updateCustomSettings(?string $user_id, Models\CustomSettingsInformation $custom_settings_information = null) Adds or updates custom user settings for the specified user
 * @method mixed updateProfile(?string $user_id, Models\UserProfile $user_profile = null) Updates the user profile information for the specified user
 * @method mixed updateProfileImage(?string $user_id) Updates the user profile image for a specified user
 * @method Api\UsersApi\UpdateSettingsOptions updateSettingsOptions(array $options = ['set_allow_all_languages' => null])
 * @method mixed updateSettings(?string $user_id, Models\UserSettingsInformation $user_settings_information = null, Api\UsersApi\UpdateSettingsOptions $options = null) Updates the user account settings for a specified user
 * @method Api\UsersApi\UpdateSignatureOptions updateSignatureOptions(array $options = ['set_close_existing_signature' => null])
 * @method Models\UserSignature updateSignature(?string $signature_id, ?string $user_id, Models\UserSignatureDefinition $user_signature_definition = null, Api\UsersApi\UpdateSignatureOptions $options = null) Updates the user signature for a specified user
 * @method Api\UsersApi\UpdateSignatureImageOptions updateSignatureImageOptions(array $options = ['set_transparent_png' => null])
 * @method Models\UserSignature updateSignatureImage(?string $image_type, ?string $signature_id, ?string $user_id, ?string $image_bytes, Api\UsersApi\UpdateSignatureImageOptions $options = null) Updates the user signature image or user initials image for the specified user or
 * @method Models\UserSignaturesInformation updateSignatures(?string $user_id, Models\UserSignaturesInformation $user_signatures_information = null) Adds
 * @method Api\UsersApi\UpdateUserOptions updateUserOptions(array $options = ['set_allow_all_languages' => null])
 * @method Models\UserInformation updateUser(?string $user_id, Models\UserInformation $user_information = null, Api\UsersApi\UpdateUserOptions $options = null) Updates the specified user information
 * @method Api\UsersApi\UpdateUsersOptions updateUsersOptions(array $options = ['set_allow_all_languages' => null])
 * @method Models\UserInformationList updateUsers(Models\UserInformationList $user_information_list = null, Api\UsersApi\UpdateUsersOptions $options = null) Change one or more user in the specified account
 */
class Users extends BaseApi
{
    protected $methodsWithAccountId = [
        'callList',
        'callListWithHttpInfo',
        'create',
        'createWithHttpInfo',
        'createSignatures',
        'createSignaturesWithHttpInfo',
        'delete',
        'deleteWithHttpInfo',
        'deleteContactWithId',
        'deleteContactWithIdWithHttpInfo',
        'deleteContacts',
        'deleteContactsWithHttpInfo',
        'deleteCustomSettings',
        'deleteCustomSettingsWithHttpInfo',
        'deleteProfileImage',
        'deleteProfileImageWithHttpInfo',
        'deleteSignature',
        'deleteSignatureWithHttpInfo',
        'deleteSignatureImage',
        'deleteSignatureImageWithHttpInfo',
        'getContactById',
        'getContactByIdWithHttpInfo',
        'getInformation',
        'getInformationWithHttpInfo',
        'getProfile',
        'getProfileWithHttpInfo',
        'getProfileImage',
        'getProfileImageWithHttpInfo',
        'getSettings',
        'getSettingsWithHttpInfo',
        'getSignature',
        'getSignatureWithHttpInfo',
        'getSignatureImage',
        'getSignatureImageWithHttpInfo',
        'listCustomSettings',
        'listCustomSettingsWithHttpInfo',
        'listSignatures',
        'listSignaturesWithHttpInfo',
        'postContacts',
        'postContactsWithHttpInfo',
        'putContacts',
        'putContactsWithHttpInfo',
        'updateCustomSettings',
        'updateCustomSettingsWithHttpInfo',
        'updateProfile',
        'updateProfileWithHttpInfo',
        'updateProfileImage',
        'updateProfileImageWithHttpInfo',
        'updateSettings',
        'updateSettingsWithHttpInfo',
        'updateSignature',
        'updateSignatureWithHttpInfo',
        'updateSignatureImage',
        'updateSignatureImageWithHttpInfo',
        'updateSignatures',
        'updateSignaturesWithHttpInfo',
        'updateUser',
        'updateUserWithHttpInfo',
        'updateUsers',
        'updateUsersWithHttpInfo'
];
}