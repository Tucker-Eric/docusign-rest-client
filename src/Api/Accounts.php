<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class Accounts
 * @method Api\AccountsApi getClient()
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method Api\AccountsApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method Api\AccountsApi\CreateOptions createOptions(array $options = ['set_preview_billing_plan' => null])
 * @method Models\NewAccountSummary create(Models\NewAccountDefinition $new_account_definition = null, Api\AccountsApi\CreateOptions $options = null) Creates new accounts
 * @method Api\AccountsApi\CreateAccountSignaturesOptions createAccountSignaturesOptions(array $options = ['set_decode_only' => null])
 * @method Models\AccountSignaturesInformation createAccountSignatures(Models\AccountSignaturesInformation $account_signatures_information = null, Api\AccountsApi\CreateAccountSignaturesOptions $options = null) Adds
 * @method Models\BrandsResponse createBrand(Models\Brand $brand = null) Creates one or more brand profile files for the account
 * @method Api\AccountsApi\CreateCustomFieldOptions createCustomFieldOptions(array $options = ['set_apply_to_templates' => null])
 * @method Models\CustomFields createCustomField(Models\CustomField $custom_field = null, Api\AccountsApi\CreateCustomFieldOptions $options = null) Creates an acount custom field
 * @method Api\AccountsApi\CreatePermissionProfileOptions createPermissionProfileOptions(array $options = ['set_include' => null])
 * @method Models\PermissionProfile createPermissionProfile(Models\PermissionProfile $permission_profile = null, Api\AccountsApi\CreatePermissionProfileOptions $options = null) Creates a new permission profile in the specified account
 * @method Models\ReportInProductSaveResponse createReportInProductCreate(Models\ReportInProductRunRequest $report_in_product_run_request = null) Creates a customized report
 * @method void delete() Deletes the specified account
 * @method void deleteAccountSignature(string $signature_id) Close the specified signature by Id
 * @method Models\AccountSignature deleteAccountSignatureImage(string $image_type, string $signature_id) Deletes a signature or
 * @method void deleteBrand(string $brand_id) Removes a brand
 * @method void deleteBrandLogoByType(string $brand_id, string $logo_type) Delete one branding logo or
 * @method Models\BrandsResponse deleteBrands(Models\BrandsRequest $brands_request = null) Deletes one or more brand profiles
 * @method Models\CaptiveRecipientInformation deleteCaptiveRecipient(string $recipient_part, Models\CaptiveRecipientInformation $captive_recipient_information = null) Deletes the signature for one or more captive recipient records
 * @method Api\AccountsApi\DeleteCustomFieldOptions deleteCustomFieldOptions(array $options = ['set_apply_to_templates' => null])
 * @method void deleteCustomField(string $custom_field_id, Api\AccountsApi\DeleteCustomFieldOptions $options = null) Delete an existing account custom field
 * @method void deleteENoteConfiguration() Deletes configuration information for the eNote eOriginal integration
 * @method Api\AccountsApi\DeletePermissionProfileOptions deletePermissionProfileOptions(array $options = ['set_move_users_to' => null])
 * @method void deletePermissionProfile(string $permission_profile_id, Api\AccountsApi\DeletePermissionProfileOptions $options = null) Deletes a permissions profile within the specified account
 * @method Models\ReportInProductSaveResponse deleteReportInProduct(string $id) Removes a customized report
 * @method Models\AccountIdentityVerificationResponse getAccountIdentityVerification() Get the list of identity verification options for an account
 * @method Api\AccountsApi\GetAccountInformationOptions getAccountInformationOptions(array $options = ['set_include_account_settings' => null])
 * @method Models\AccountInformation getAccountInformation(Api\AccountsApi\GetAccountInformationOptions $options = null) Retrieves the account information for the specified account
 * @method Models\AccountSignature getAccountSignature(string $signature_id) Returns information about a single signature by specifed signatureId
 * @method Api\AccountsApi\GetAccountSignatureImageOptions getAccountSignatureImageOptions(array $options = ['set_include_chrome' => null])
 * @method \SplFileObject getAccountSignatureImage(string $image_type, string $signature_id, Api\AccountsApi\GetAccountSignatureImageOptions $options = null) Returns a signature or
 * @method Api\AccountsApi\GetAccountSignaturesOptions getAccountSignaturesOptions(array $options = ['set_stamp_format' => null, 'set_stamp_name' => null, 'set_stamp_type' => null])
 * @method Models\AccountSignaturesInformation getAccountSignatures(Api\AccountsApi\GetAccountSignaturesOptions $options = null) Returns the managed signature definitions for the account
 * @method Models\TabAccountSettings getAccountTabSettings() Returns tab settings list for specified account
 * @method Models\PaymentGatewayAccountsInfo getAllPaymentGatewayAccounts() Get all payment gateway account for the provided accountId
 * @method Api\AccountsApi\GetBillingChargesOptions getBillingChargesOptions(array $options = ['set_include_charges' => null])
 * @method Models\BillingChargeResponse getBillingCharges(Api\AccountsApi\GetBillingChargesOptions $options = null) Gets list of recurring and usage charges for the account
 * @method Api\AccountsApi\GetBrandOptions getBrandOptions(array $options = ['set_include_external_references' => null, 'set_include_logos' => null])
 * @method Models\Brand getBrand(string $brand_id, Api\AccountsApi\GetBrandOptions $options = null) Get information for a specific brand
 * @method void getBrandExportFile(string $brand_id) Export a specific brand
 * @method \SplFileObject getBrandLogoByType(string $brand_id, string $logo_type) Obtains the specified image for a brand or
 * @method Models\BrandResourcesList getBrandResources(string $brand_id) Returns the specified account
 * @method Api\AccountsApi\GetBrandResourcesByContentTypeOptions getBrandResourcesByContentTypeOptions(array $options = ['set_langcode' => null, 'set_return_master' => null])
 * @method void getBrandResourcesByContentType(string $brand_id, string $resource_content_type, Api\AccountsApi\GetBrandResourcesByContentTypeOptions $options = null) Returns the specified branding resource file
 * @method Models\ConsumerDisclosure getConsumerDisclosure(string $lang_code) Gets the Electronic Record and Signature Disclosure
 * @method Api\AccountsApi\GetConsumerDisclosureDefaultOptions getConsumerDisclosureDefaultOptions(array $options = ['set_lang_code' => null])
 * @method Models\ConsumerDisclosure getConsumerDisclosureDefault(Api\AccountsApi\GetConsumerDisclosureDefaultOptions $options = null) Gets the Electronic Record and Signature Disclosure for the account
 * @method Models\ENoteConfiguration getENoteConfiguration() Returns the configuration information for the eNote eOriginal integration
 * @method Models\EnvelopePurgeConfiguration getEnvelopePurgeConfiguration() Select envelope purge configuration
 * @method Models\FavoriteTemplatesInfo getFavoriteTemplates() Retrieves the list of favorited templates for this caller
 * @method Models\NotificationDefaults getNotificationDefaults() Returns default user level settings for a specified account
 * @method Models\AccountPasswordRules getPasswordRules() Get the password rules
 * @method Api\AccountsApi\GetPermissionProfileOptions getPermissionProfileOptions(array $options = ['set_include' => null])
 * @method Models\PermissionProfile getPermissionProfile(string $permission_profile_id, Api\AccountsApi\GetPermissionProfileOptions $options = null) Returns a permissions profile in the specified account
 * @method Models\ProvisioningInformation getProvisioning() Retrieves the account provisioning information for the account
 * @method Models\ReportInProductGet getReportInProduct(string $id) Gets the specified report
 * @method Models\ReportInProductList getReportInProductList() Gets the descriptors for all of an account
 * @method Models\SupportedLanguages getSupportedLanguages() Gets list of supported languages for recipient language setting
 * @method Models\Watermark getWatermark() Get watermark information
 * @method Models\Watermark getWatermarkPreview(Models\Watermark $watermark = null) Get watermark preview
 * @method Api\AccountsApi\ListBrandsOptions listBrandsOptions(array $options = ['set_exclude_distributor_brand' => null, 'set_include_logos' => null])
 * @method Models\BrandsResponse listBrands(Api\AccountsApi\ListBrandsOptions $options = null) Gets a list of brand profiles
 * @method Models\CustomFields listCustomFields() Gets a list of custom fields associated with the account
 * @method Api\AccountsApi\ListPermissionsOptions listPermissionsOptions(array $options = ['set_include' => null])
 * @method Models\PermissionProfileInformation listPermissions(Api\AccountsApi\ListPermissionsOptions $options = null) Gets a list of permission profiles
 * @method Api\AccountsApi\ListRecipientNamesByEmailOptions listRecipientNamesByEmailOptions(array $options = ['set_email' => null])
 * @method Models\RecipientNamesResponse listRecipientNamesByEmail(Api\AccountsApi\ListRecipientNamesByEmailOptions $options = null) Gets recipient names associated with an email address
 * @method Models\AccountSettingsInformation listSettings() Gets account settings information
 * @method Api\AccountsApi\ListSharedAccessOptions listSharedAccessOptions(array $options = ['set_count' => null, 'set_envelopes_not_shared_user_status' => null, 'set_folder_ids' => null, 'set_item_type' => null, 'set_search_text' => null, 'set_shared' => null, 'set_start_position' => null, 'set_user_ids' => null])
 * @method Models\AccountSharedAccess listSharedAccess(Api\AccountsApi\ListSharedAccessOptions $options = null) Reserved
 * @method Models\AccountSignatureProviders listSignatureProviders() Returns Account available signature providers for specified account
 * @method Models\FileTypeList listUnsupportedFileTypes() Gets a list of unsupported file types
 * @method Models\FavoriteTemplatesInfo unFavoriteTemplate(Models\FavoriteTemplatesInfo $favorite_templates_info = null) Unfavorite a template
 * @method Models\AccountSignaturesInformation updateAccountSignature(Models\AccountSignaturesInformation $account_signatures_information = null) Updates a account signature
 * @method Api\AccountsApi\UpdateAccountSignatureByIdOptions updateAccountSignatureByIdOptions(array $options = ['set_close_existing_signature' => null])
 * @method Models\AccountSignature updateAccountSignatureById(string $signature_id, Models\AccountSignatureDefinition $account_signature_definition = null, Api\AccountsApi\UpdateAccountSignatureByIdOptions $options = null) Updates a account signature
 * @method Api\AccountsApi\UpdateAccountSignatureImageOptions updateAccountSignatureImageOptions(array $options = ['set_transparent_png' => null])
 * @method Models\AccountSignature updateAccountSignatureImage(string $image_type, string $signature_id, Api\AccountsApi\UpdateAccountSignatureImageOptions $options = null) Sets a signature or
 * @method Models\TabAccountSettings updateAccountTabSettings(Models\TabAccountSettings $tab_account_settings = null) Modifies tab settings for specified account
 * @method Models\Brand updateBrand(string $brand_id, Models\Brand $brand = null) Updates an existing brand
 * @method void updateBrandLogoByType(string $brand_id, string $logo_type, string $logo_file_bytes) Put one branding logo
 * @method Models\BrandResources updateBrandResourcesByContentType(string $brand_id, string $resource_content_type, \SplFileObject $file_xml) Uploads a branding resource file
 * @method Api\AccountsApi\UpdateConsumerDisclosureOptions updateConsumerDisclosureOptions(array $options = ['set_include_metadata' => null])
 * @method Models\ConsumerDisclosure updateConsumerDisclosure(string $lang_code, Models\ConsumerDisclosure $consumer_disclosure = null, Api\AccountsApi\UpdateConsumerDisclosureOptions $options = null) Update Consumer Disclosure
 * @method Api\AccountsApi\UpdateCustomFieldOptions updateCustomFieldOptions(array $options = ['set_apply_to_templates' => null])
 * @method Models\CustomFields updateCustomField(string $custom_field_id, Models\CustomField $custom_field = null, Api\AccountsApi\UpdateCustomFieldOptions $options = null) Updates an existing account custom field
 * @method Models\ENoteConfiguration updateENoteConfiguration(Models\ENoteConfiguration $e_note_configuration = null) Updates configuration information for the eNote eOriginal integration
 * @method Models\EnvelopePurgeConfiguration updateEnvelopePurgeConfiguration(Models\EnvelopePurgeConfiguration $envelope_purge_configuration = null) Updates envelope purge configuration
 * @method Models\FavoriteTemplatesInfo updateFavoriteTemplate(Models\FavoriteTemplatesInfo $favorite_templates_info = null) Favorites a template
 * @method Models\NotificationDefaults updateNotificationDefaults(Models\NotificationDefaults $notification_defaults = null) Updates default user level settings for a specified account
 * @method Models\AccountPasswordRules updatePasswordRules(Models\AccountPasswordRules $account_password_rules = null) Update the password rules
 * @method Api\AccountsApi\UpdatePermissionProfileOptions updatePermissionProfileOptions(array $options = ['set_include' => null])
 * @method Models\PermissionProfile updatePermissionProfile(string $permission_profile_id, Models\PermissionProfile $permission_profile = null, Api\AccountsApi\UpdatePermissionProfileOptions $options = null) Updates a permission profile within the specified account
 * @method Models\ReportInProductRunResponse updateReportInProductRunResults(Models\ReportInProductRunRequest $report_in_product_run_request = null) Returns the result set from running the specified report
 * @method Models\ReportInProductSaveResponse updateReportInProductSave(string $id, Models\ReportInProductRunRequest $report_in_product_run_request = null) Saves a customized report
 * @method void updateReportResultsCsv(Models\ReportInProductCsvRunRequest $report_in_product_csv_run_request = null) Returns the specified report as a CSV string
 * @method void updateSettings(Models\AccountSettingsInformation $account_settings_information = null) Updates the account settings for an account
 * @method Api\AccountsApi\UpdateSharedAccessOptions updateSharedAccessOptions(array $options = ['set_item_type' => null, 'set_preserve_existing_shared_access' => null, 'set_user_ids' => null])
 * @method Models\AccountSharedAccess updateSharedAccess(Models\AccountSharedAccess $account_shared_access = null, Api\AccountsApi\UpdateSharedAccessOptions $options = null) Reserved
 * @method Models\Watermark updateWatermark(Models\Watermark $watermark = null) Update watermark information
 */
class Accounts extends BaseApi
{
    protected $methodsWithAccountId = [
        'createAccountSignatures',
        'createAccountSignaturesWithHttpInfo',
        'createBrand',
        'createBrandWithHttpInfo',
        'createCustomField',
        'createCustomFieldWithHttpInfo',
        'createPermissionProfile',
        'createPermissionProfileWithHttpInfo',
        'createReportInProductCreate',
        'createReportInProductCreateWithHttpInfo',
        'delete',
        'deleteWithHttpInfo',
        'deleteAccountSignature',
        'deleteAccountSignatureWithHttpInfo',
        'deleteAccountSignatureImage',
        'deleteAccountSignatureImageWithHttpInfo',
        'deleteBrand',
        'deleteBrandWithHttpInfo',
        'deleteBrandLogoByType',
        'deleteBrandLogoByTypeWithHttpInfo',
        'deleteBrands',
        'deleteBrandsWithHttpInfo',
        'deleteCaptiveRecipient',
        'deleteCaptiveRecipientWithHttpInfo',
        'deleteCustomField',
        'deleteCustomFieldWithHttpInfo',
        'deleteENoteConfiguration',
        'deleteENoteConfigurationWithHttpInfo',
        'deletePermissionProfile',
        'deletePermissionProfileWithHttpInfo',
        'deleteReportInProduct',
        'deleteReportInProductWithHttpInfo',
        'getAccountIdentityVerification',
        'getAccountIdentityVerificationWithHttpInfo',
        'getAccountInformation',
        'getAccountInformationWithHttpInfo',
        'getAccountSignature',
        'getAccountSignatureWithHttpInfo',
        'getAccountSignatureImage',
        'getAccountSignatureImageWithHttpInfo',
        'getAccountSignatures',
        'getAccountSignaturesWithHttpInfo',
        'getAccountTabSettings',
        'getAccountTabSettingsWithHttpInfo',
        'getAllPaymentGatewayAccounts',
        'getAllPaymentGatewayAccountsWithHttpInfo',
        'getBillingCharges',
        'getBillingChargesWithHttpInfo',
        'getBrand',
        'getBrandWithHttpInfo',
        'getBrandExportFile',
        'getBrandExportFileWithHttpInfo',
        'getBrandLogoByType',
        'getBrandLogoByTypeWithHttpInfo',
        'getBrandResources',
        'getBrandResourcesWithHttpInfo',
        'getBrandResourcesByContentType',
        'getBrandResourcesByContentTypeWithHttpInfo',
        'getConsumerDisclosure',
        'getConsumerDisclosureWithHttpInfo',
        'getConsumerDisclosureDefault',
        'getConsumerDisclosureDefaultWithHttpInfo',
        'getENoteConfiguration',
        'getENoteConfigurationWithHttpInfo',
        'getEnvelopePurgeConfiguration',
        'getEnvelopePurgeConfigurationWithHttpInfo',
        'getFavoriteTemplates',
        'getFavoriteTemplatesWithHttpInfo',
        'getNotificationDefaults',
        'getNotificationDefaultsWithHttpInfo',
        'getPasswordRules',
        'getPasswordRulesWithHttpInfo',
        'getPermissionProfile',
        'getPermissionProfileWithHttpInfo',
        'getReportInProduct',
        'getReportInProductWithHttpInfo',
        'getReportInProductList',
        'getReportInProductListWithHttpInfo',
        'getSupportedLanguages',
        'getSupportedLanguagesWithHttpInfo',
        'getWatermark',
        'getWatermarkWithHttpInfo',
        'getWatermarkPreview',
        'getWatermarkPreviewWithHttpInfo',
        'listBrands',
        'listBrandsWithHttpInfo',
        'listCustomFields',
        'listCustomFieldsWithHttpInfo',
        'listPermissions',
        'listPermissionsWithHttpInfo',
        'listRecipientNamesByEmail',
        'listRecipientNamesByEmailWithHttpInfo',
        'listSettings',
        'listSettingsWithHttpInfo',
        'listSharedAccess',
        'listSharedAccessWithHttpInfo',
        'listSignatureProviders',
        'listSignatureProvidersWithHttpInfo',
        'listUnsupportedFileTypes',
        'listUnsupportedFileTypesWithHttpInfo',
        'unFavoriteTemplate',
        'unFavoriteTemplateWithHttpInfo',
        'updateAccountSignature',
        'updateAccountSignatureWithHttpInfo',
        'updateAccountSignatureById',
        'updateAccountSignatureByIdWithHttpInfo',
        'updateAccountSignatureImage',
        'updateAccountSignatureImageWithHttpInfo',
        'updateAccountTabSettings',
        'updateAccountTabSettingsWithHttpInfo',
        'updateBrand',
        'updateBrandWithHttpInfo',
        'updateBrandLogoByType',
        'updateBrandLogoByTypeWithHttpInfo',
        'updateBrandResourcesByContentType',
        'updateBrandResourcesByContentTypeWithHttpInfo',
        'updateConsumerDisclosure',
        'updateConsumerDisclosureWithHttpInfo',
        'updateCustomField',
        'updateCustomFieldWithHttpInfo',
        'updateENoteConfiguration',
        'updateENoteConfigurationWithHttpInfo',
        'updateEnvelopePurgeConfiguration',
        'updateEnvelopePurgeConfigurationWithHttpInfo',
        'updateFavoriteTemplate',
        'updateFavoriteTemplateWithHttpInfo',
        'updateNotificationDefaults',
        'updateNotificationDefaultsWithHttpInfo',
        'updatePasswordRules',
        'updatePasswordRulesWithHttpInfo',
        'updatePermissionProfile',
        'updatePermissionProfileWithHttpInfo',
        'updateReportInProductRunResults',
        'updateReportInProductRunResultsWithHttpInfo',
        'updateReportInProductSave',
        'updateReportInProductSaveWithHttpInfo',
        'updateReportResultsCsv',
        'updateReportResultsCsvWithHttpInfo',
        'updateSettings',
        'updateSettingsWithHttpInfo',
        'updateSharedAccess',
        'updateSharedAccessWithHttpInfo',
        'updateWatermark',
        'updateWatermarkWithHttpInfo'
];
}