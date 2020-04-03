<?php

namespace DocuSign\Rest\Api;

/**
 * Class Users
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\UsersApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method \DocuSign\eSign\Model\UserInformationList callList(\DocuSign\eSign\Api\UsersApi\ListOptions $options = null) Retrieves the list of users for the specified account
 * @method \DocuSign\eSign\Model\NewUsersSummary create(\DocuSign\eSign\Model\NewUsersDefinition $new_users_definition = null) Adds news user to the specified account
 * @method \DocuSign\eSign\Model\UserSignaturesInformation createSignatures(string $user_id, \DocuSign\eSign\Model\UserSignaturesInformation $user_signatures_information = null) Adds user Signature and initials images to a Signature
 * @method \DocuSign\eSign\Api\UsersApi\DeleteOptions deleteOptions(array $options = ['set_delete' => null])
 * @method \DocuSign\eSign\Model\UsersResponse delete(\DocuSign\eSign\Model\UserInfoList $user_info_list = null, \DocuSign\eSign\Api\UsersApi\DeleteOptions $options = null) Removes users account privileges
 * @method \DocuSign\eSign\Model\ContactUpdateResponse deleteContactWithId(string $contact_id) Replaces a particular contact associated with an account for the DocuSign service
 * @method \DocuSign\eSign\Model\ContactUpdateResponse deleteContacts(\DocuSign\eSign\Model\ContactModRequest $contact_mod_request = null) Delete contacts associated with an account for the DocuSign service
 * @method \DocuSign\eSign\Model\CustomSettingsInformation deleteCustomSettings(string $user_id, \DocuSign\eSign\Model\CustomSettingsInformation $custom_settings_information = null) Deletes custom user settings for a specified user
 * @method void deleteProfileImage(string $user_id) Deletes the user profile image for the specified user
 * @method void deleteSignature(string $signature_id, string $user_id) Removes removes signature information for the specified user
 * @method \DocuSign\eSign\Model\UserSignature deleteSignatureImage(string $image_type, string $signature_id, string $user_id) Deletes the user initials image or the  user signature image for the specified user or
 * @method \DocuSign\eSign\Model\ContactGetResponse getContactById(string $contact_id) Gets a particular contact associated with the user
 * @method \DocuSign\eSign\Api\UsersApi\GetInformationOptions getInformationOptions(array $options = ['set_additional_info' => null, 'set_email' => null])
 * @method \DocuSign\eSign\Model\UserInformation getInformation(string $user_id, \DocuSign\eSign\Api\UsersApi\GetInformationOptions $options = null) Gets the user information for a specified user
 * @method \DocuSign\eSign\Model\UserProfile getProfile(string $user_id) Retrieves the user profile for a specified user
 * @method \DocuSign\eSign\Api\UsersApi\GetProfileImageOptions getProfileImageOptions(array $options = ['set_encoding' => null])
 * @method \SplFileObject getProfileImage(string $user_id, \DocuSign\eSign\Api\UsersApi\GetProfileImageOptions $options = null) Retrieves the user profile image for the specified user
 * @method \DocuSign\eSign\Model\UserSettingsInformation getSettings(string $user_id) Gets the user account settings for a specified user
 * @method \DocuSign\eSign\Model\UserSignature getSignature(string $signature_id, string $user_id) Gets the user signature information for the specified user
 * @method \DocuSign\eSign\Api\UsersApi\GetSignatureImageOptions getSignatureImageOptions(array $options = ['set_include_chrome' => null])
 * @method \SplFileObject getSignatureImage(string $image_type, string $signature_id, string $user_id, \DocuSign\eSign\Api\UsersApi\GetSignatureImageOptions $options = null) Retrieves the user initials image or the  user signature image for the specified user or
 * @method \DocuSign\eSign\Model\CustomSettingsInformation listCustomSettings(string $user_id) Retrieves the custom user settings for a specified user
 * @method \DocuSign\eSign\Api\UsersApi\ListSignaturesOptions listSignaturesOptions(array $options = ['set_stamp_type' => null])
 * @method \DocuSign\eSign\Model\UserSignaturesInformation listSignatures(string $user_id, \DocuSign\eSign\Api\UsersApi\ListSignaturesOptions $options = null) Retrieves a list of user signature definitions for a specified user
 * @method \DocuSign\eSign\Model\ContactUpdateResponse postContacts(\DocuSign\eSign\Model\ContactModRequest $contact_mod_request = null) Imports multiple new contacts into the contacts collection from CSV
 * @method \DocuSign\eSign\Model\ContactUpdateResponse putContacts(\DocuSign\eSign\Model\ContactModRequest $contact_mod_request = null) Replaces contacts associated with an account for the DocuSign service
 * @method \DocuSign\eSign\Model\CustomSettingsInformation updateCustomSettings(string $user_id, \DocuSign\eSign\Model\CustomSettingsInformation $custom_settings_information = null) Adds or updates custom user settings for the specified user
 * @method void updateProfile(string $user_id, \DocuSign\eSign\Model\UserProfile $user_profile = null) Updates the user profile information for the specified user
 * @method void updateProfileImage(string $user_id) Updates the user profile image for a specified user
 * @method void updateSettings(string $user_id, \DocuSign\eSign\Model\UserSettingsInformation $user_settings_information = null) Updates the user account settings for a specified user
 * @method \DocuSign\eSign\Api\UsersApi\UpdateSignatureOptions updateSignatureOptions(array $options = ['set_close_existing_signature' => null])
 * @method \DocuSign\eSign\Model\UserSignature updateSignature(string $signature_id, string $user_id, \DocuSign\eSign\Model\UserSignatureDefinition $user_signature_definition = null, \DocuSign\eSign\Api\UsersApi\UpdateSignatureOptions $options = null) Updates the user signature for a specified user
 * @method \DocuSign\eSign\Model\UserSignature updateSignatureImage(string $image_type, string $signature_id, string $user_id) Updates the user signature image or user initials image for the specified user or
 * @method \DocuSign\eSign\Model\UserSignaturesInformation updateSignatures(string $user_id, \DocuSign\eSign\Model\UserSignaturesInformation $user_signatures_information = null) Adds
 * @method \DocuSign\eSign\Model\UserInformation updateUser(string $user_id, \DocuSign\eSign\Model\UserInformation $user_information = null) Updates the specified user information
 * @method \DocuSign\eSign\Model\UserInformationList updateUsers(\DocuSign\eSign\Model\UserInformationList $user_information_list = null) Change one or more user in the specified account
 */
class Users extends BaseApi
{

}