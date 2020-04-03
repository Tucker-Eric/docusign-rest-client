<?php

namespace DocuSign\Rest\Api;

/**
 * Class Accounts
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\AccountsApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method \DocuSign\eSign\Api\AccountsApi\CreateOptions createOptions(array $options = ['set_preview_billing_plan' => null])
 * @method \DocuSign\eSign\Model\NewAccountSummary create(\DocuSign\eSign\Model\NewAccountDefinition $new_account_definition = null, \DocuSign\eSign\Api\AccountsApi\CreateOptions $options = null) Creates new accounts
 * @method \DocuSign\eSign\Model\BrandsResponse createBrand(\DocuSign\eSign\Model\Brand $brand = null) Creates one or more brand profile files for the account
 * @method \DocuSign\eSign\Api\AccountsApi\CreateCustomFieldOptions createCustomFieldOptions(array $options = ['set_apply_to_templates' => null])
 * @method \DocuSign\eSign\Model\CustomFields createCustomField(\DocuSign\eSign\Model\CustomField $custom_field = null, \DocuSign\eSign\Api\AccountsApi\CreateCustomFieldOptions $options = null) Creates an acount custom field
 * @method \DocuSign\eSign\Api\AccountsApi\CreatePermissionProfileOptions createPermissionProfileOptions(array $options = ['set_include' => null])
 * @method \DocuSign\eSign\Model\PermissionProfile createPermissionProfile(\DocuSign\eSign\Model\PermissionProfile $permission_profile = null, \DocuSign\eSign\Api\AccountsApi\CreatePermissionProfileOptions $options = null) Creates a new permission profile in the specified account
 * @method void delete() Deletes the specified account
 * @method void deleteBrand(string $brand_id) Removes a brand
 * @method void deleteBrandLogoByType(string $brand_id, string $logo_type) Delete one branding logo or
 * @method \DocuSign\eSign\Model\BrandsResponse deleteBrands(\DocuSign\eSign\Model\BrandsRequest $brands_request = null) Deletes one or more brand profiles
 * @method \DocuSign\eSign\Model\CaptiveRecipientInformation deleteCaptiveRecipient(string $recipient_part, \DocuSign\eSign\Model\CaptiveRecipientInformation $captive_recipient_information = null) Deletes the signature for one or more captive recipient records
 * @method \DocuSign\eSign\Api\AccountsApi\DeleteCustomFieldOptions deleteCustomFieldOptions(array $options = ['set_apply_to_templates' => null])
 * @method void deleteCustomField(string $custom_field_id, \DocuSign\eSign\Api\AccountsApi\DeleteCustomFieldOptions $options = null) Delete an existing account custom field
 * @method void deleteENoteConfiguration() Deletes configuration information for the eNote eOriginal integration
 * @method void deletePermissionProfile(string $permission_profile_id) Deletes a permissions profile within the specified account
 * @method \DocuSign\eSign\Model\AccountIdentityVerificationResponse getAccountIdentityVerification() Get the list of identity verification options for an account
 * @method \DocuSign\eSign\Api\AccountsApi\GetAccountInformationOptions getAccountInformationOptions(array $options = ['set_include_account_settings' => null])
 * @method \DocuSign\eSign\Model\AccountInformation getAccountInformation(\DocuSign\eSign\Api\AccountsApi\GetAccountInformationOptions $options = null) Retrieves the account information for the specified account
 * @method \DocuSign\eSign\Model\TabAccountSettings getAccountTabSettings() Returns tab settings list for specified account
 * @method \DocuSign\eSign\Model\PaymentGatewayAccountsInfo getAllPaymentGatewayAccounts() Get all payment gateway account for the provided accountId
 * @method \DocuSign\eSign\Api\AccountsApi\GetBillingChargesOptions getBillingChargesOptions(array $options = ['set_include_charges' => null])
 * @method \DocuSign\eSign\Model\BillingChargeResponse getBillingCharges(\DocuSign\eSign\Api\AccountsApi\GetBillingChargesOptions $options = null) Gets list of recurring and usage charges for the account
 * @method \DocuSign\eSign\Api\AccountsApi\GetBrandOptions getBrandOptions(array $options = ['set_include_external_references' => null, 'set_include_logos' => null])
 * @method \DocuSign\eSign\Model\Brand getBrand(string $brand_id, \DocuSign\eSign\Api\AccountsApi\GetBrandOptions $options = null) Get information for a specific brand
 * @method void getBrandExportFile(string $brand_id) Export a specific brand
 * @method \SplFileObject getBrandLogoByType(string $brand_id, string $logo_type) Obtains the specified image for a brand or
 * @method \DocuSign\eSign\Model\BrandResourcesList getBrandResources(string $brand_id) Returns the specified account
 * @method \DocuSign\eSign\Api\AccountsApi\GetBrandResourcesByContentTypeOptions getBrandResourcesByContentTypeOptions(array $options = ['set_langcode' => null, 'set_return_master' => null])
 * @method void getBrandResourcesByContentType(string $brand_id, string $resource_content_type, \DocuSign\eSign\Api\AccountsApi\GetBrandResourcesByContentTypeOptions $options = null) Returns the specified branding resource file
 * @method \DocuSign\eSign\Model\ConsumerDisclosure getConsumerDisclosure(string $lang_code) Gets the Electronic Record and Signature Disclosure
 * @method \DocuSign\eSign\Api\AccountsApi\GetConsumerDisclosureDefaultOptions getConsumerDisclosureDefaultOptions(array $options = ['set_lang_code' => null])
 * @method \DocuSign\eSign\Model\ConsumerDisclosure getConsumerDisclosureDefault(\DocuSign\eSign\Api\AccountsApi\GetConsumerDisclosureDefaultOptions $options = null) Gets the Electronic Record and Signature Disclosure for the account
 * @method \DocuSign\eSign\Model\ENoteConfiguration getENoteConfiguration() Returns the configuration information for the eNote eOriginal integration
 * @method \DocuSign\eSign\Model\AccountPasswordRules getPasswordRules() Get the password rules
 * @method \DocuSign\eSign\Api\AccountsApi\GetPermissionProfileOptions getPermissionProfileOptions(array $options = ['set_include' => null])
 * @method \DocuSign\eSign\Model\PermissionProfile getPermissionProfile(string $permission_profile_id, \DocuSign\eSign\Api\AccountsApi\GetPermissionProfileOptions $options = null) Returns a permissions profile in the specified account
 * @method \DocuSign\eSign\Model\ProvisioningInformation getProvisioning() Retrieves the account provisioning information for the account
 * @method \DocuSign\eSign\Model\SupportedLanguages getSupportedLanguages() Gets list of supported languages for recipient language setting
 * @method \DocuSign\eSign\Model\Watermark getWatermark() Get watermark information
 * @method \DocuSign\eSign\Model\Watermark getWatermarkPreview(\DocuSign\eSign\Model\Watermark $watermark = null) Get watermark preview
 * @method \DocuSign\eSign\Api\AccountsApi\ListBrandsOptions listBrandsOptions(array $options = ['set_exclude_distributor_brand' => null, 'set_include_logos' => null])
 * @method \DocuSign\eSign\Model\BrandsResponse listBrands(\DocuSign\eSign\Api\AccountsApi\ListBrandsOptions $options = null) Gets a list of brand profiles
 * @method \DocuSign\eSign\Model\CustomFields listCustomFields() Gets a list of custom fields associated with the account
 * @method \DocuSign\eSign\Api\AccountsApi\ListPermissionsOptions listPermissionsOptions(array $options = ['set_include' => null])
 * @method \DocuSign\eSign\Model\PermissionProfileInformation listPermissions(\DocuSign\eSign\Api\AccountsApi\ListPermissionsOptions $options = null) Gets a list of permission profiles
 * @method \DocuSign\eSign\Api\AccountsApi\ListRecipientNamesByEmailOptions listRecipientNamesByEmailOptions(array $options = ['set_email' => null])
 * @method \DocuSign\eSign\Model\RecipientNamesResponse listRecipientNamesByEmail(\DocuSign\eSign\Api\AccountsApi\ListRecipientNamesByEmailOptions $options = null) Gets recipient names associated with an email address
 * @method \DocuSign\eSign\Model\AccountSettingsInformation listSettings() Gets account settings information
 * @method \DocuSign\eSign\Api\AccountsApi\ListSharedAccessOptions listSharedAccessOptions(array $options = ['set_count' => null, 'set_envelopes_not_shared_user_status' => null, 'set_folder_ids' => null, 'set_item_type' => null, 'set_search_text' => null, 'set_shared' => null, 'set_start_position' => null, 'set_user_ids' => null])
 * @method \DocuSign\eSign\Model\AccountSharedAccess listSharedAccess(\DocuSign\eSign\Api\AccountsApi\ListSharedAccessOptions $options = null) Reserved
 * @method \DocuSign\eSign\Model\AccountSignatureProviders listSignatureProviders() Returns Account available signature providers for specified account
 * @method \DocuSign\eSign\Model\FileTypeList listUnsupportedFileTypes() Gets a list of unsupported file types
 * @method \DocuSign\eSign\Model\TabAccountSettings updateAccountTabSettings(\DocuSign\eSign\Model\TabAccountSettings $tab_account_settings = null) Modifies tab settings for specified account
 * @method \DocuSign\eSign\Model\Brand updateBrand(string $brand_id, \DocuSign\eSign\Model\Brand $brand = null) Updates an existing brand
 * @method void updateBrandLogoByType(string $brand_id, string $logo_type, string $logo_file_bytes) Put one branding logo or
 * @method \DocuSign\eSign\Model\BrandResources updateBrandResourcesByContentType(string $brand_id, string $resource_content_type) Uploads a branding resource file
 * @method \DocuSign\eSign\Api\AccountsApi\UpdateConsumerDisclosureOptions updateConsumerDisclosureOptions(array $options = ['set_include_metadata' => null])
 * @method \DocuSign\eSign\Model\ConsumerDisclosure updateConsumerDisclosure(string $lang_code, \DocuSign\eSign\Model\ConsumerDisclosure $consumer_disclosure = null, \DocuSign\eSign\Api\AccountsApi\UpdateConsumerDisclosureOptions $options = null) Update Consumer Disclosure
 * @method \DocuSign\eSign\Api\AccountsApi\UpdateCustomFieldOptions updateCustomFieldOptions(array $options = ['set_apply_to_templates' => null])
 * @method \DocuSign\eSign\Model\CustomFields updateCustomField(string $custom_field_id, \DocuSign\eSign\Model\CustomField $custom_field = null, \DocuSign\eSign\Api\AccountsApi\UpdateCustomFieldOptions $options = null) Updates an existing account custom field
 * @method \DocuSign\eSign\Model\ENoteConfiguration updateENoteConfiguration(\DocuSign\eSign\Model\ENoteConfiguration $e_note_configuration = null) Updates configuration information for the eNote eOriginal integration
 * @method \DocuSign\eSign\Model\AccountPasswordRules updatePasswordRules(\DocuSign\eSign\Model\AccountPasswordRules $account_password_rules = null) Update the password rules
 * @method \DocuSign\eSign\Api\AccountsApi\UpdatePermissionProfileOptions updatePermissionProfileOptions(array $options = ['set_include' => null])
 * @method \DocuSign\eSign\Model\PermissionProfile updatePermissionProfile(string $permission_profile_id, \DocuSign\eSign\Model\PermissionProfile $permission_profile = null, \DocuSign\eSign\Api\AccountsApi\UpdatePermissionProfileOptions $options = null) Updates a permission profile within the specified account
 * @method void updateSettings(\DocuSign\eSign\Model\AccountSettingsInformation $account_settings_information = null) Updates the account settings for an account
 * @method \DocuSign\eSign\Api\AccountsApi\UpdateSharedAccessOptions updateSharedAccessOptions(array $options = ['set_item_type' => null, 'set_user_ids' => null])
 * @method \DocuSign\eSign\Model\AccountSharedAccess updateSharedAccess(\DocuSign\eSign\Model\AccountSharedAccess $account_shared_access = null, \DocuSign\eSign\Api\AccountsApi\UpdateSharedAccessOptions $options = null) Reserved
 * @method \DocuSign\eSign\Model\Watermark updateWatermark(\DocuSign\eSign\Model\Watermark $watermark = null) Update watermark information
 */
class Accounts extends BaseApi
{

}