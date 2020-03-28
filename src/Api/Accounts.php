<?php

namespace DocuSign\Rest\Api;

/**
 * Class Accounts
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\AccountsApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method \DocuSign\eSign\Model\NewAccountSummary create(\DocuSign\eSign\Model\NewAccountDefinition $new_account_definition = null) Creates new accounts
 * @method \DocuSign\eSign\Model\BrandsResponse createBrand(\DocuSign\eSign\Model\Brand $brand = null) Creates one or more brand profile files for the account
 * @method \DocuSign\eSign\Model\CustomFields createCustomField(\DocuSign\eSign\Model\CustomField $custom_field = null) Creates an acount custom field
 * @method \DocuSign\eSign\Model\PermissionProfile createPermissionProfile(\DocuSign\eSign\Model\PermissionProfile $permission_profile = null) Creates a new permission profile in the specified account
 * @method void delete() Deletes the specified account
 * @method void deleteBrand(string $brand_id) Removes a brand
 * @method void deleteBrandLogoByType(string $brand_id, string $logo_type) Delete one branding logo or
 * @method \DocuSign\eSign\Model\BrandsResponse deleteBrands(\DocuSign\eSign\Model\BrandsRequest $brands_request = null) Deletes one or more brand profiles
 * @method \DocuSign\eSign\Model\CaptiveRecipientInformation deleteCaptiveRecipient(string $recipient_part = null) Deletes the signature for one or more captive recipient records
 * @method void deleteCustomField(string $custom_field_id = null) Delete an existing account custom field
 * @method void deleteENoteConfiguration() Deletes configuration information for the eNote eOriginal integration
 * @method void deletePermissionProfile(string $permission_profile_id) Deletes a permissions profile within the specified account
 * @method \DocuSign\eSign\Model\AccountIdentityVerificationResponse getAccountIdentityVerification() Get the list of identity verification options for an account
 * @method \DocuSign\eSign\Model\AccountInformation getAccountInformation() Retrieves the account information for the specified account
 * @method \DocuSign\eSign\Model\TabAccountSettings getAccountTabSettings() Returns tab settings list for specified account
 * @method \DocuSign\eSign\Model\PaymentGatewayAccountsInfo getAllPaymentGatewayAccounts() Get all payment gateway account for the provided accountId
 * @method \DocuSign\eSign\Model\BillingChargeResponse getBillingCharges() Gets list of recurring and usage charges for the account
 * @method \DocuSign\eSign\Model\Brand getBrand(string $brand_id) Get information for a specific brand
 * @method void getBrandExportFile(string $brand_id) Export a specific brand
 * @method \SplFileObject getBrandLogoByType(string $brand_id, string $logo_type) Obtains the specified image for a brand or
 * @method \DocuSign\eSign\Model\BrandResourcesList getBrandResources(string $brand_id) Returns the specified account
 * @method void getBrandResourcesByContentType(string $brand_id, string $resource_content_type = null) Returns the specified branding resource file
 * @method \DocuSign\eSign\Model\ConsumerDisclosure getConsumerDisclosure(string $lang_code) Gets the Electronic Record and Signature Disclosure
 * @method \DocuSign\eSign\Model\ConsumerDisclosure getConsumerDisclosureDefault() Gets the Electronic Record and Signature Disclosure for the account
 * @method \DocuSign\eSign\Model\ENoteConfiguration getENoteConfiguration() Returns the configuration information for the eNote eOriginal integration
 * @method \DocuSign\eSign\Model\AccountPasswordRules getPasswordRules() Get the password rules
 * @method \DocuSign\eSign\Model\PermissionProfile getPermissionProfile(string $permission_profile_id = null) Returns a permissions profile in the specified account
 * @method \DocuSign\eSign\Model\ProvisioningInformation getProvisioning() Retrieves the account provisioning information for the account
 * @method \DocuSign\eSign\Model\SupportedLanguages getSupportedLanguages() Gets list of supported languages for recipient language setting
 * @method \DocuSign\eSign\Model\Watermark getWatermark() Get watermark information
 * @method \DocuSign\eSign\Model\Watermark getWatermarkPreview(\DocuSign\eSign\Model\Watermark $watermark = null) Get watermark preview
 * @method \DocuSign\eSign\Model\BrandsResponse listBrands() Gets a list of brand profiles
 * @method \DocuSign\eSign\Model\CustomFields listCustomFields() Gets a list of custom fields associated with the account
 * @method \DocuSign\eSign\Model\PermissionProfileInformation listPermissions() Gets a list of permission profiles
 * @method \DocuSign\eSign\Model\RecipientNamesResponse listRecipientNamesByEmail() Gets recipient names associated with an email address
 * @method \DocuSign\eSign\Model\AccountSettingsInformation listSettings() Gets account settings information
 * @method \DocuSign\eSign\Model\AccountSharedAccess listSharedAccess() Reserved
 * @method \DocuSign\eSign\Model\AccountSignatureProviders listSignatureProviders() Returns Account available signature providers for specified account
 * @method \DocuSign\eSign\Model\FileTypeList listUnsupportedFileTypes() Gets a list of unsupported file types
 * @method \DocuSign\eSign\Model\TabAccountSettings updateAccountTabSettings(\DocuSign\eSign\Model\TabAccountSettings $tab_account_settings = null) Modifies tab settings for specified account
 * @method \DocuSign\eSign\Model\Brand updateBrand(string $brand_id, \DocuSign\eSign\Model\Brand $brand = null) Updates an existing brand
 * @method void updateBrandLogoByType(string $brand_id, string $logo_type, string $logo_file_bytes) Put one branding logo or
 * @method \DocuSign\eSign\Model\BrandResources updateBrandResourcesByContentType(string $brand_id, string $resource_content_type) Uploads a branding resource file
 * @method \DocuSign\eSign\Model\ConsumerDisclosure updateConsumerDisclosure(string $lang_code, \DocuSign\eSign\Model\ConsumerDisclosure $consumer_disclosure = null) Update Consumer Disclosure
 * @method \DocuSign\eSign\Model\CustomFields updateCustomField(string $custom_field_id = null) Updates an existing account custom field
 * @method \DocuSign\eSign\Model\ENoteConfiguration updateENoteConfiguration(\DocuSign\eSign\Model\ENoteConfiguration $e_note_configuration = null) Updates configuration information for the eNote eOriginal integration
 * @method \DocuSign\eSign\Model\AccountPasswordRules updatePasswordRules(\DocuSign\eSign\Model\AccountPasswordRules $account_password_rules = null) Update the password rules
 * @method \DocuSign\eSign\Model\PermissionProfile updatePermissionProfile(string $permission_profile_id = null) Updates a permission profile within the specified account
 * @method void updateSettings(\DocuSign\eSign\Model\AccountSettingsInformation $account_settings_information = null) Updates the account settings for an account
 * @method \DocuSign\eSign\Model\AccountSharedAccess updateSharedAccess(\DocuSign\eSign\Model\AccountSharedAccess $account_shared_access = null) Reserved
 * @method \DocuSign\eSign\Model\Watermark updateWatermark(\DocuSign\eSign\Model\Watermark $watermark = null) Update watermark information
 */
class Accounts extends BaseApi
{

}