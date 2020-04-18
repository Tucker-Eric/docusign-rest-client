<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class Templates
 * @method Api\TemplatesApi getClient()
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method Api\TemplatesApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method Models\CustomFields createCustomFields(string $template_id, Models\TemplateCustomFields $template_custom_fields = null) Creates custom document fields in an existing template document
 * @method Models\DocumentFieldsInformation createDocumentFields(string $document_id, string $template_id, Models\DocumentFieldsInformation $document_fields_information = null) Creates custom document fields in an existing template document
 * @method Models\ViewUrl createEditView(string $template_id, Models\ReturnUrlRequest $return_url_request = null) Provides a URL to start an edit view of the Template UI
 * @method Models\LockInformation createLock(string $template_id, Models\LockRequest $lock_request = null) Lock a template
 * @method Api\TemplatesApi\CreateRecipientsOptions createRecipientsOptions(array $options = ['set_resend_envelope' => null])
 * @method Models\Recipients createRecipients(string $template_id, Models\TemplateRecipients $template_recipients = null, Api\TemplatesApi\CreateRecipientsOptions $options = null) Adds tabs for a recipient
 * @method Models\Tabs createTabs(string $recipient_id, string $template_id, Models\TemplateTabs $template_tabs = null) Adds tabs for a recipient
 * @method Models\TemplateSummary createTemplate(Models\EnvelopeTemplate $envelope_template = null) Creates an envelope from a template
 * @method Models\DocumentHtmlDefinitions createTemplateDocumentResponsiveHtmlPreview(string $document_id, string $template_id, Models\DocumentHtmlDefinition $document_html_definition = null) Post Responsive HTML Preview for a document in a template
 * @method Models\Tabs createTemplateDocumentTabs(string $document_id, string $template_id, Models\TemplateTabs $template_tabs = null) Adds the tabs to a tempate
 * @method Models\ViewUrl createTemplateRecipientPreview(string $template_id, Models\RecipientPreviewRequest $recipient_preview_request = null) Provides a URL to start a recipient view of the Envelope UI
 * @method Models\DocumentHtmlDefinitions createTemplateResponsiveHtmlPreview(string $template_id, Models\DocumentHtmlDefinition $document_html_definition = null) Get Responsive HTML Preview for all documents in a template
 * @method Models\BulkRecipientsUpdateResponse deleteBulkRecipients(string $recipient_id, string $template_id) Deletes the bulk recipient list on a template
 * @method Models\CustomFields deleteCustomFields(string $template_id, Models\TemplateCustomFields $template_custom_fields = null) Deletes envelope custom fields in a template
 * @method Models\DocumentFieldsInformation deleteDocumentFields(string $document_id, string $template_id, Models\DocumentFieldsInformation $document_fields_information = null) Deletes custom document fields from an existing template document
 * @method void deleteDocumentPage(string $document_id, string $page_number, string $template_id, Models\PageRequest $page_request = null) Deletes a page from a document in an template
 * @method Models\TemplateDocumentsResult deleteDocuments(string $template_id, Models\EnvelopeDefinition $envelope_definition = null) Deletes documents from a template
 * @method Models\GroupInformation deleteGroupShare(string $template_id, string $template_part, Models\GroupInformation $group_information = null) Removes a member group
 * @method Models\LockInformation deleteLock(string $template_id, Models\LockRequest $lock_request = null) Deletes a template lock
 * @method Models\Recipients deleteRecipient(string $recipient_id, string $template_id, Models\TemplateRecipients $template_recipients = null) Deletes the specified recipient file from a template
 * @method Models\Recipients deleteRecipients(string $template_id, Models\TemplateRecipients $template_recipients = null) Deletes recipients from a template
 * @method Models\Tabs deleteTabs(string $recipient_id, string $template_id, Models\TemplateTabs $template_tabs = null) Deletes the tabs associated with a recipient in a template
 * @method Models\Tabs deleteTemplateDocumentTabs(string $document_id, string $template_id, Models\TemplateTabs $template_tabs = null) Deletes tabs from an envelope document
 * @method Api\TemplatesApi\GetOptions getOptions(array $options = ['set_include' => null])
 * @method Models\EnvelopeTemplate get(string $template_id, Api\TemplatesApi\GetOptions $options = null) Gets a list of templates for a specified account
 * @method Api\TemplatesApi\GetDocumentOptions getDocumentOptions(array $options = ['set_encrypt' => null, 'set_show_changes' => null])
 * @method \SplFileObject getDocument(string $document_id, string $template_id, Api\TemplatesApi\GetDocumentOptions $options = null) Gets PDF documents from a template
 * @method Api\TemplatesApi\GetDocumentPageImageOptions getDocumentPageImageOptions(array $options = ['set_dpi' => null, 'set_max_height' => null, 'set_max_width' => null, 'set_show_changes' => null])
 * @method \SplFileObject getDocumentPageImage(string $document_id, string $page_number, string $template_id, Api\TemplatesApi\GetDocumentPageImageOptions $options = null) Gets a page image from a template for display
 * @method Api\TemplatesApi\GetDocumentTabsOptions getDocumentTabsOptions(array $options = ['set_page_numbers' => null])
 * @method Models\Tabs getDocumentTabs(string $document_id, string $template_id, Api\TemplatesApi\GetDocumentTabsOptions $options = null) Returns tabs on the document
 * @method Models\LockInformation getLock(string $template_id) Gets template lock information
 * @method Models\Notification getNotificationSettings(string $template_id) Gets template notification information
 * @method Models\Tabs getPageTabs(string $document_id, string $page_number, string $template_id) Returns tabs on the specified page
 * @method Api\TemplatesApi\GetPagesOptions getPagesOptions(array $options = ['set_count' => null, 'set_dpi' => null, 'set_max_height' => null, 'set_max_width' => null, 'set_nocache' => null, 'set_show_changes' => null, 'set_start_position' => null])
 * @method Models\PageImages getPages(string $document_id, string $template_id, Api\TemplatesApi\GetPagesOptions $options = null) Returns document page image(s) based on input
 * @method Models\DocumentHtmlDefinitionOriginals getTemplateDocumentHtmlDefinitions(string $document_id, string $template_id) Get the Original HTML Definition used to generate the Responsive HTML for a given document in a template
 * @method Models\DocumentHtmlDefinitionOriginals getTemplateHtmlDefinitions(string $template_id) Get the Original HTML Definition used to generate the Responsive HTML for the template
 * @method Api\TemplatesApi\ListBulkRecipientsOptions listBulkRecipientsOptions(array $options = ['set_include_tabs' => null, 'set_start_position' => null])
 * @method Models\BulkRecipientsResponse listBulkRecipients(string $recipient_id, string $template_id, Api\TemplatesApi\ListBulkRecipientsOptions $options = null) Gets the bulk recipient file from a template
 * @method Models\CustomFields listCustomFields(string $template_id) Gets the custom document fields from a template
 * @method Models\DocumentFieldsInformation listDocumentFields(string $document_id, string $template_id) Gets the custom document fields for a an existing template document
 * @method Api\TemplatesApi\ListDocumentsOptions listDocumentsOptions(array $options = ['set_include_tabs' => null])
 * @method Models\TemplateDocumentsResult listDocuments(string $template_id, Api\TemplatesApi\ListDocumentsOptions $options = null) Gets a list of documents associated with a template
 * @method Api\TemplatesApi\ListRecipientsOptions listRecipientsOptions(array $options = ['set_include_anchor_tab_locations' => null, 'set_include_extended' => null, 'set_include_tabs' => null])
 * @method Models\Recipients listRecipients(string $template_id, Api\TemplatesApi\ListRecipientsOptions $options = null) Gets recipient information from a template
 * @method Api\TemplatesApi\ListTabsOptions listTabsOptions(array $options = ['set_include_anchor_tab_locations' => null, 'set_include_metadata' => null])
 * @method Models\Tabs listTabs(string $recipient_id, string $template_id, Api\TemplatesApi\ListTabsOptions $options = null) Gets the tabs information for a signer or sign
 * @method Api\TemplatesApi\ListTemplatesOptions listTemplatesOptions(array $options = ['set_count' => null, 'set_created_from_date' => null, 'set_created_to_date' => null, 'set_folder_ids' => null, 'set_folder_types' => null, 'set_from_date' => null, 'set_include' => null, 'set_is_download' => null, 'set_modified_from_date' => null, 'set_modified_to_date' => null, 'set_order' => null, 'set_order_by' => null, 'set_search_fields' => null, 'set_search_text' => null, 'set_shared_by_me' => null, 'set_start_position' => null, 'set_template_ids' => null, 'set_to_date' => null, 'set_used_from_date' => null, 'set_used_to_date' => null, 'set_user_filter' => null, 'set_user_id' => null])
 * @method Models\EnvelopeTemplateResults listTemplates(Api\TemplatesApi\ListTemplatesOptions $options = null) Gets the definition of a template
 * @method void rotateDocumentPage(string $document_id, string $page_number, string $template_id, Models\PageRequest $page_request = null) Rotates page image from a template for display
 * @method Models\TemplateUpdateSummary update(string $template_id, Models\EnvelopeTemplate $envelope_template = null) Updates an existing template
 * @method Models\BulkRecipientsSummaryResponse updateBulkRecipients(string $recipient_id, string $template_id, Models\BulkRecipientsRequest $bulk_recipients_request = null) Adds or replaces the bulk recipients list in a template
 * @method Models\CustomFields updateCustomFields(string $template_id, Models\TemplateCustomFields $template_custom_fields = null) Updates envelope custom fields in a template
 * @method Api\TemplatesApi\UpdateDocumentOptions updateDocumentOptions(array $options = ['set_is_envelope_definition' => null])
 * @method Models\EnvelopeDocument updateDocument(string $document_id, string $template_id, Models\EnvelopeDefinition $envelope_definition = null, Api\TemplatesApi\UpdateDocumentOptions $options = null) Adds a document to a template document
 * @method Models\DocumentFieldsInformation updateDocumentFields(string $document_id, string $template_id, Models\DocumentFieldsInformation $document_fields_information = null) Updates existing custom document fields in an existing template document
 * @method Models\TemplateDocumentsResult updateDocuments(string $template_id, Models\EnvelopeDefinition $envelope_definition = null) Adds documents to a template document
 * @method Models\GroupInformation updateGroupShare(string $template_id, string $template_part, Models\GroupInformation $group_information = null) Shares a template with a group
 * @method Models\LockInformation updateLock(string $template_id, Models\LockRequest $lock_request = null) Updates a template lock
 * @method Models\Notification updateNotificationSettings(string $template_id, Models\TemplateNotificationRequest $template_notification_request = null) Updates the notification  structure for an existing template
 * @method Api\TemplatesApi\UpdateRecipientsOptions updateRecipientsOptions(array $options = ['set_resend_envelope' => null])
 * @method Models\RecipientsUpdateSummary updateRecipients(string $template_id, Models\TemplateRecipients $template_recipients = null, Api\TemplatesApi\UpdateRecipientsOptions $options = null) Updates recipients in a template
 * @method Models\Tabs updateTabs(string $recipient_id, string $template_id, Models\TemplateTabs $template_tabs = null) Updates the tabs for a recipient
 * @method Models\Tabs updateTemplateDocumentTabs(string $document_id, string $template_id, Models\TemplateTabs $template_tabs = null) Updates the tabs for a template
 */
class Templates extends BaseApi
{
    protected $methodsWithAccountId = [
        'createCustomFields',
        'createCustomFieldsWithHttpInfo',
        'createDocumentFields',
        'createDocumentFieldsWithHttpInfo',
        'createEditView',
        'createEditViewWithHttpInfo',
        'createLock',
        'createLockWithHttpInfo',
        'createRecipients',
        'createRecipientsWithHttpInfo',
        'createTabs',
        'createTabsWithHttpInfo',
        'createTemplate',
        'createTemplateWithHttpInfo',
        'createTemplateDocumentResponsiveHtmlPreview',
        'createTemplateDocumentResponsiveHtmlPreviewWithHttpInfo',
        'createTemplateDocumentTabs',
        'createTemplateDocumentTabsWithHttpInfo',
        'createTemplateRecipientPreview',
        'createTemplateRecipientPreviewWithHttpInfo',
        'createTemplateResponsiveHtmlPreview',
        'createTemplateResponsiveHtmlPreviewWithHttpInfo',
        'deleteBulkRecipients',
        'deleteBulkRecipientsWithHttpInfo',
        'deleteCustomFields',
        'deleteCustomFieldsWithHttpInfo',
        'deleteDocumentFields',
        'deleteDocumentFieldsWithHttpInfo',
        'deleteDocumentPage',
        'deleteDocumentPageWithHttpInfo',
        'deleteDocuments',
        'deleteDocumentsWithHttpInfo',
        'deleteGroupShare',
        'deleteGroupShareWithHttpInfo',
        'deleteLock',
        'deleteLockWithHttpInfo',
        'deleteRecipient',
        'deleteRecipientWithHttpInfo',
        'deleteRecipients',
        'deleteRecipientsWithHttpInfo',
        'deleteTabs',
        'deleteTabsWithHttpInfo',
        'deleteTemplateDocumentTabs',
        'deleteTemplateDocumentTabsWithHttpInfo',
        'get',
        'getWithHttpInfo',
        'getDocument',
        'getDocumentWithHttpInfo',
        'getDocumentPageImage',
        'getDocumentPageImageWithHttpInfo',
        'getDocumentTabs',
        'getDocumentTabsWithHttpInfo',
        'getLock',
        'getLockWithHttpInfo',
        'getNotificationSettings',
        'getNotificationSettingsWithHttpInfo',
        'getPageTabs',
        'getPageTabsWithHttpInfo',
        'getPages',
        'getPagesWithHttpInfo',
        'getTemplateDocumentHtmlDefinitions',
        'getTemplateDocumentHtmlDefinitionsWithHttpInfo',
        'getTemplateHtmlDefinitions',
        'getTemplateHtmlDefinitionsWithHttpInfo',
        'listBulkRecipients',
        'listBulkRecipientsWithHttpInfo',
        'listCustomFields',
        'listCustomFieldsWithHttpInfo',
        'listDocumentFields',
        'listDocumentFieldsWithHttpInfo',
        'listDocuments',
        'listDocumentsWithHttpInfo',
        'listRecipients',
        'listRecipientsWithHttpInfo',
        'listTabs',
        'listTabsWithHttpInfo',
        'listTemplates',
        'listTemplatesWithHttpInfo',
        'rotateDocumentPage',
        'rotateDocumentPageWithHttpInfo',
        'update',
        'updateWithHttpInfo',
        'updateBulkRecipients',
        'updateBulkRecipientsWithHttpInfo',
        'updateCustomFields',
        'updateCustomFieldsWithHttpInfo',
        'updateDocument',
        'updateDocumentWithHttpInfo',
        'updateDocumentFields',
        'updateDocumentFieldsWithHttpInfo',
        'updateDocuments',
        'updateDocumentsWithHttpInfo',
        'updateGroupShare',
        'updateGroupShareWithHttpInfo',
        'updateLock',
        'updateLockWithHttpInfo',
        'updateNotificationSettings',
        'updateNotificationSettingsWithHttpInfo',
        'updateRecipients',
        'updateRecipientsWithHttpInfo',
        'updateTabs',
        'updateTabsWithHttpInfo',
        'updateTemplateDocumentTabs',
        'updateTemplateDocumentTabsWithHttpInfo'
];
}