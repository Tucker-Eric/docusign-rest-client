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
 * @method \DocuSign\eSign\Model\Recipients createRecipients(string $template_id, \DocuSign\eSign\Model\TemplateRecipients $template_recipients = null) Adds tabs for a recipient
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
 * @method \DocuSign\eSign\Model\EnvelopeTemplate get(string $template_id) Gets a list of templates for a specified account
 * @method \SplFileObject getDocument(string $document_id, string $template_id) Gets PDF documents from a template
 * @method \SplFileObject getDocumentPageImage(string $document_id, string $page_number, string $template_id) Gets a page image from a template for display
 * @method \DocuSign\eSign\Model\Tabs getDocumentTabs(string $document_id, string $template_id) Returns tabs on the document
 * @method \DocuSign\eSign\Model\LockInformation getLock(string $template_id) Gets template lock information
 * @method \DocuSign\eSign\Model\Notification getNotificationSettings(string $template_id) Gets template notification information
 * @method \DocuSign\eSign\Model\Tabs getPageTabs(string $document_id, string $page_number, string $template_id) Returns tabs on the specified page
 * @method \DocuSign\eSign\Model\PageImages getPages(string $document_id, string $template_id) Returns document page image(s) based on input
 * @method \DocuSign\eSign\Model\DocumentHtmlDefinitionOriginals getTemplateDocumentHtmlDefinitions(string $document_id, string $template_id) Get the Original HTML Definition used to generate the Responsive HTML for a given document in a template
 * @method \DocuSign\eSign\Model\DocumentHtmlDefinitionOriginals getTemplateHtmlDefinitions(string $template_id) Get the Original HTML Definition used to generate the Responsive HTML for the template
 * @method \DocuSign\eSign\Model\BulkRecipientsResponse listBulkRecipients(string $recipient_id, string $template_id) Gets the bulk recipient file from a template
 * @method \DocuSign\eSign\Model\CustomFields listCustomFields(string $template_id) Gets the custom document fields from a template
 * @method \DocuSign\eSign\Model\DocumentFieldsInformation listDocumentFields(string $document_id, string $template_id) Gets the custom document fields for a an existing template document
 * @method \DocuSign\eSign\Model\TemplateDocumentsResult listDocuments(string $template_id) Gets a list of documents associated with a template
 * @method \DocuSign\eSign\Model\Recipients listRecipients(string $template_id) Gets recipient information from a template
 * @method \DocuSign\eSign\Model\Tabs listTabs(string $recipient_id, string $template_id) Gets the tabs information for a signer or sign
 * @method \DocuSign\eSign\Model\EnvelopeTemplateResults listTemplates() Gets the definition of a template
 * @method void rotateDocumentPage(string $document_id, string $page_number, string $template_id, \DocuSign\eSign\Model\PageRequest $page_request = null) Rotates page image from a template for display
 * @method \DocuSign\eSign\Model\TemplateUpdateSummary update(string $template_id, \DocuSign\eSign\Model\EnvelopeTemplate $envelope_template = null) Updates an existing template
 * @method \DocuSign\eSign\Model\BulkRecipientsSummaryResponse updateBulkRecipients(string $recipient_id, string $template_id, \DocuSign\eSign\Model\BulkRecipientsRequest $bulk_recipients_request = null) Adds or replaces the bulk recipients list in a template
 * @method \DocuSign\eSign\Model\CustomFields updateCustomFields(string $template_id, \DocuSign\eSign\Model\TemplateCustomFields $template_custom_fields = null) Updates envelope custom fields in a template
 * @method \DocuSign\eSign\Model\EnvelopeDocument updateDocument(string $document_id, string $template_id, \DocuSign\eSign\Model\EnvelopeDefinition $envelope_definition = null) Adds a document to a template document
 * @method \DocuSign\eSign\Model\DocumentFieldsInformation updateDocumentFields(string $document_id, string $template_id, \DocuSign\eSign\Model\DocumentFieldsInformation $document_fields_information = null) Updates existing custom document fields in an existing template document
 * @method \DocuSign\eSign\Model\TemplateDocumentsResult updateDocuments(string $template_id, \DocuSign\eSign\Model\EnvelopeDefinition $envelope_definition = null) Adds documents to a template document
 * @method \DocuSign\eSign\Model\GroupInformation updateGroupShare(string $template_id, string $template_part, \DocuSign\eSign\Model\GroupInformation $group_information = null) Shares a template with a group
 * @method \DocuSign\eSign\Model\LockInformation updateLock(string $template_id, \DocuSign\eSign\Model\LockRequest $lock_request = null) Updates a template lock
 * @method \DocuSign\eSign\Model\Notification updateNotificationSettings(string $template_id, \DocuSign\eSign\Model\TemplateNotificationRequest $template_notification_request = null) Updates the notification  structure for an existing template
 * @method \DocuSign\eSign\Model\RecipientsUpdateSummary updateRecipients(string $template_id, \DocuSign\eSign\Model\TemplateRecipients $template_recipients = null) Updates recipients in a template
 * @method \DocuSign\eSign\Model\Tabs updateTabs(string $recipient_id, string $template_id, \DocuSign\eSign\Model\TemplateTabs $template_tabs = null) Updates the tabs for a recipient
 */
class Templates extends BaseApi
{
  
}