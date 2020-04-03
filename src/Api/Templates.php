<?php

namespace DocuSign\Rest\Api;

/**
 * Class Templates
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\TemplatesApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method \DocuSign\eSign\Model\CustomFields createCustomFields(string $template_id, \DocuSign\eSign\Model\TemplateCustomFields $template_custom_fields = null) Creates custom document fields in an existing template document
 * @method \DocuSign\eSign\Model\DocumentFieldsInformation createDocumentFields(string $document_id, string $template_id, \DocuSign\eSign\Model\DocumentFieldsInformation $document_fields_information = null) Creates custom document fields in an existing template document
 * @method \DocuSign\eSign\Model\ViewUrl createEditView(string $template_id, \DocuSign\eSign\Model\ReturnUrlRequest $return_url_request = null) Provides a URL to start an edit view of the Template UI
 * @method \DocuSign\eSign\Model\LockInformation createLock(string $template_id, \DocuSign\eSign\Model\LockRequest $lock_request = null) Lock a template
 * @method \DocuSign\eSign\Api\TemplatesApi\CreateRecipientsOptions createRecipientsOptions(array $options = ['set_resend_envelope' => null])
 * @method \DocuSign\eSign\Model\Recipients createRecipients(string $template_id, \DocuSign\eSign\Model\TemplateRecipients $template_recipients = null, \DocuSign\eSign\Api\TemplatesApi\CreateRecipientsOptions $options = null) Adds tabs for a recipient
 * @method \DocuSign\eSign\Model\Tabs createTabs(string $recipient_id, string $template_id, \DocuSign\eSign\Model\TemplateTabs $template_tabs = null) Adds tabs for a recipient
 * @method \DocuSign\eSign\Model\TemplateSummary createTemplate(\DocuSign\eSign\Model\EnvelopeTemplate $envelope_template = null) Creates an envelope from a template
 * @method \DocuSign\eSign\Model\DocumentHtmlDefinitions createTemplateDocumentResponsiveHtmlPreview(string $document_id, string $template_id, \DocuSign\eSign\Model\DocumentHtmlDefinition $document_html_definition = null) Post Responsive HTML Preview for a document in a template
 * @method \DocuSign\eSign\Model\DocumentHtmlDefinitions createTemplateResponsiveHtmlPreview(string $template_id, \DocuSign\eSign\Model\DocumentHtmlDefinition $document_html_definition = null) Get Responsive HTML Preview for all documents in a template
 * @method \DocuSign\eSign\Model\BulkRecipientsUpdateResponse deleteBulkRecipients(string $recipient_id, string $template_id) Deletes the bulk recipient list on a template
 * @method \DocuSign\eSign\Model\CustomFields deleteCustomFields(string $template_id, \DocuSign\eSign\Model\TemplateCustomFields $template_custom_fields = null) Deletes envelope custom fields in a template
 * @method \DocuSign\eSign\Model\DocumentFieldsInformation deleteDocumentFields(string $document_id, string $template_id, \DocuSign\eSign\Model\DocumentFieldsInformation $document_fields_information = null) Deletes custom document fields from an existing template document
 * @method void deleteDocumentPage(string $document_id, string $page_number, string $template_id, \DocuSign\eSign\Model\PageRequest $page_request = null) Deletes a page from a document in an template
 * @method \DocuSign\eSign\Model\TemplateDocumentsResult deleteDocuments(string $template_id, \DocuSign\eSign\Model\EnvelopeDefinition $envelope_definition = null) Deletes documents from a template
 * @method \DocuSign\eSign\Model\GroupInformation deleteGroupShare(string $template_id, string $template_part, \DocuSign\eSign\Model\GroupInformation $group_information = null) Removes a member group
 * @method \DocuSign\eSign\Model\LockInformation deleteLock(string $template_id, \DocuSign\eSign\Model\LockRequest $lock_request = null) Deletes a template lock
 * @method \DocuSign\eSign\Model\Recipients deleteRecipient(string $recipient_id, string $template_id, \DocuSign\eSign\Model\TemplateRecipients $template_recipients = null) Deletes the specified recipient file from a template
 * @method \DocuSign\eSign\Model\Recipients deleteRecipients(string $template_id, \DocuSign\eSign\Model\TemplateRecipients $template_recipients = null) Deletes recipients from a template
 * @method \DocuSign\eSign\Model\Tabs deleteTabs(string $recipient_id, string $template_id, \DocuSign\eSign\Model\TemplateTabs $template_tabs = null) Deletes the tabs associated with a recipient in a template
 * @method \DocuSign\eSign\Api\TemplatesApi\GetOptions getOptions(array $options = ['set_include' => null])
 * @method \DocuSign\eSign\Model\EnvelopeTemplate get(string $template_id, \DocuSign\eSign\Api\TemplatesApi\GetOptions $options = null) Gets a list of templates for a specified account
 * @method \DocuSign\eSign\Api\TemplatesApi\GetDocumentOptions getDocumentOptions(array $options = ['set_encrypt' => null, 'set_show_changes' => null])
 * @method \SplFileObject getDocument(string $document_id, string $template_id, \DocuSign\eSign\Api\TemplatesApi\GetDocumentOptions $options = null) Gets PDF documents from a template
 * @method \DocuSign\eSign\Api\TemplatesApi\GetDocumentPageImageOptions getDocumentPageImageOptions(array $options = ['set_dpi' => null, 'set_max_height' => null, 'set_max_width' => null, 'set_show_changes' => null])
 * @method \SplFileObject getDocumentPageImage(string $document_id, string $page_number, string $template_id, \DocuSign\eSign\Api\TemplatesApi\GetDocumentPageImageOptions $options = null) Gets a page image from a template for display
 * @method \DocuSign\eSign\Api\TemplatesApi\GetDocumentTabsOptions getDocumentTabsOptions(array $options = ['set_page_numbers' => null])
 * @method \DocuSign\eSign\Model\Tabs getDocumentTabs(string $document_id, string $template_id, \DocuSign\eSign\Api\TemplatesApi\GetDocumentTabsOptions $options = null) Returns tabs on the document
 * @method \DocuSign\eSign\Model\LockInformation getLock(string $template_id) Gets template lock information
 * @method \DocuSign\eSign\Model\Notification getNotificationSettings(string $template_id) Gets template notification information
 * @method \DocuSign\eSign\Model\Tabs getPageTabs(string $document_id, string $page_number, string $template_id) Returns tabs on the specified page
 * @method \DocuSign\eSign\Api\TemplatesApi\GetPagesOptions getPagesOptions(array $options = ['set_count' => null, 'set_dpi' => null, 'set_max_height' => null, 'set_max_width' => null, 'set_nocache' => null, 'set_show_changes' => null, 'set_start_position' => null])
 * @method \DocuSign\eSign\Model\PageImages getPages(string $document_id, string $template_id, \DocuSign\eSign\Api\TemplatesApi\GetPagesOptions $options = null) Returns document page image(s) based on input
 * @method \DocuSign\eSign\Model\DocumentHtmlDefinitionOriginals getTemplateDocumentHtmlDefinitions(string $document_id, string $template_id) Get the Original HTML Definition used to generate the Responsive HTML for a given document in a template
 * @method \DocuSign\eSign\Model\DocumentHtmlDefinitionOriginals getTemplateHtmlDefinitions(string $template_id) Get the Original HTML Definition used to generate the Responsive HTML for the template
 * @method \DocuSign\eSign\Api\TemplatesApi\ListBulkRecipientsOptions listBulkRecipientsOptions(array $options = ['set_include_tabs' => null, 'set_start_position' => null])
 * @method \DocuSign\eSign\Model\BulkRecipientsResponse listBulkRecipients(string $recipient_id, string $template_id, \DocuSign\eSign\Api\TemplatesApi\ListBulkRecipientsOptions $options = null) Gets the bulk recipient file from a template
 * @method \DocuSign\eSign\Model\CustomFields listCustomFields(string $template_id) Gets the custom document fields from a template
 * @method \DocuSign\eSign\Model\DocumentFieldsInformation listDocumentFields(string $document_id, string $template_id) Gets the custom document fields for a an existing template document
 * @method \DocuSign\eSign\Model\TemplateDocumentsResult listDocuments(string $template_id) Gets a list of documents associated with a template
 * @method \DocuSign\eSign\Api\TemplatesApi\ListRecipientsOptions listRecipientsOptions(array $options = ['set_include_anchor_tab_locations' => null, 'set_include_extended' => null, 'set_include_tabs' => null])
 * @method \DocuSign\eSign\Model\Recipients listRecipients(string $template_id, \DocuSign\eSign\Api\TemplatesApi\ListRecipientsOptions $options = null) Gets recipient information from a template
 * @method \DocuSign\eSign\Api\TemplatesApi\ListTabsOptions listTabsOptions(array $options = ['set_include_anchor_tab_locations' => null, 'set_include_metadata' => null])
 * @method \DocuSign\eSign\Model\Tabs listTabs(string $recipient_id, string $template_id, \DocuSign\eSign\Api\TemplatesApi\ListTabsOptions $options = null) Gets the tabs information for a signer or sign
 * @method \DocuSign\eSign\Api\TemplatesApi\ListTemplatesOptions listTemplatesOptions(array $options = ['set_count' => null, 'set_folder' => null, 'set_folder_ids' => null, 'set_from_date' => null, 'set_include' => null, 'set_modified_from_date' => null, 'set_modified_to_date' => null, 'set_order' => null, 'set_order_by' => null, 'set_search_text' => null, 'set_shared_by_me' => null, 'set_start_position' => null, 'set_to_date' => null, 'set_used_from_date' => null, 'set_used_to_date' => null, 'set_user_filter' => null, 'set_user_id' => null])
 * @method \DocuSign\eSign\Model\EnvelopeTemplateResults listTemplates(\DocuSign\eSign\Api\TemplatesApi\ListTemplatesOptions $options = null) Gets the definition of a template
 * @method void rotateDocumentPage(string $document_id, string $page_number, string $template_id, \DocuSign\eSign\Model\PageRequest $page_request = null) Rotates page image from a template for display
 * @method \DocuSign\eSign\Model\TemplateUpdateSummary update(string $template_id, \DocuSign\eSign\Model\EnvelopeTemplate $envelope_template = null) Updates an existing template
 * @method \DocuSign\eSign\Model\BulkRecipientsSummaryResponse updateBulkRecipients(string $recipient_id, string $template_id, \DocuSign\eSign\Model\BulkRecipientsRequest $bulk_recipients_request = null) Adds or replaces the bulk recipients list in a template
 * @method \DocuSign\eSign\Model\CustomFields updateCustomFields(string $template_id, \DocuSign\eSign\Model\TemplateCustomFields $template_custom_fields = null) Updates envelope custom fields in a template
 * @method \DocuSign\eSign\Api\TemplatesApi\UpdateDocumentOptions updateDocumentOptions(array $options = ['set_apply_document_fields' => null, 'set_is_envelope_definition' => null])
 * @method \DocuSign\eSign\Model\EnvelopeDocument updateDocument(string $document_id, string $template_id, \DocuSign\eSign\Model\EnvelopeDefinition $envelope_definition = null, \DocuSign\eSign\Api\TemplatesApi\UpdateDocumentOptions $options = null) Adds a document to a template document
 * @method \DocuSign\eSign\Model\DocumentFieldsInformation updateDocumentFields(string $document_id, string $template_id, \DocuSign\eSign\Model\DocumentFieldsInformation $document_fields_information = null) Updates existing custom document fields in an existing template document
 * @method \DocuSign\eSign\Api\TemplatesApi\UpdateDocumentsOptions updateDocumentsOptions(array $options = ['set_apply_document_fields' => null, 'set_persist_tabs' => null])
 * @method \DocuSign\eSign\Model\TemplateDocumentsResult updateDocuments(string $template_id, \DocuSign\eSign\Model\EnvelopeDefinition $envelope_definition = null, \DocuSign\eSign\Api\TemplatesApi\UpdateDocumentsOptions $options = null) Adds documents to a template document
 * @method \DocuSign\eSign\Model\GroupInformation updateGroupShare(string $template_id, string $template_part, \DocuSign\eSign\Model\GroupInformation $group_information = null) Shares a template with a group
 * @method \DocuSign\eSign\Model\LockInformation updateLock(string $template_id, \DocuSign\eSign\Model\LockRequest $lock_request = null) Updates a template lock
 * @method \DocuSign\eSign\Model\Notification updateNotificationSettings(string $template_id, \DocuSign\eSign\Model\TemplateNotificationRequest $template_notification_request = null) Updates the notification  structure for an existing template
 * @method \DocuSign\eSign\Api\TemplatesApi\UpdateRecipientsOptions updateRecipientsOptions(array $options = ['set_resend_envelope' => null])
 * @method \DocuSign\eSign\Model\RecipientsUpdateSummary updateRecipients(string $template_id, \DocuSign\eSign\Model\TemplateRecipients $template_recipients = null, \DocuSign\eSign\Api\TemplatesApi\UpdateRecipientsOptions $options = null) Updates recipients in a template
 * @method \DocuSign\eSign\Model\Tabs updateTabs(string $recipient_id, string $template_id, \DocuSign\eSign\Model\TemplateTabs $template_tabs = null) Updates the tabs for a recipient
 */
class Templates extends BaseApi
{

}