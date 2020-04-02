<?php

namespace DocuSign\Rest\Api;

/**
 * Class Envelopes
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\EnvelopesApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method \DocuSign\eSign\Model\DocumentTemplateList applyTemplate(string $envelope_id, \DocuSign\eSign\Model\DocumentTemplateList $document_template_list = null) Adds templates to an envelope
 * @method \DocuSign\eSign\Model\DocumentTemplateList applyTemplateToDocument(string $document_id, string $envelope_id, \DocuSign\eSign\Model\DocumentTemplateList $document_template_list = null) Adds templates to a document in an  envelope
 * @method \DocuSign\eSign\Model\ChunkedUploadResponse createChunkedUpload(\DocuSign\eSign\Model\ChunkedUploadRequest $chunked_upload_request = null) Initiate a new ChunkedUpload
 * @method \DocuSign\eSign\Model\ViewUrl createConsoleView(\DocuSign\eSign\Model\ConsoleViewRequest $console_view_request = null) Returns a URL to the authentication view UI
 * @method \DocuSign\eSign\Model\ViewUrl createCorrectView(string $envelope_id, \DocuSign\eSign\Model\CorrectViewRequest $correct_view_request = null) Returns a URL to the envelope correction UI
 * @method \DocuSign\eSign\Model\CustomFields createCustomFields(string $envelope_id, \DocuSign\eSign\Model\CustomFields $custom_fields = null) Updates envelope custom fields for an envelope
 * @method \DocuSign\eSign\Model\DocumentFieldsInformation createDocumentFields(string $document_id, string $envelope_id, \DocuSign\eSign\Model\DocumentFieldsInformation $document_fields_information = null) Creates custom document fields in an existing envelope document
 * @method \DocuSign\eSign\Model\DocumentHtmlDefinitions createDocumentResponsiveHtmlPreview(string $document_id, string $envelope_id, \DocuSign\eSign\Model\DocumentHtmlDefinition $document_html_definition = null) Get Responsive HTML Preview for a document in an envelope
 * @method \DocuSign\eSign\Model\ViewUrl createEditView(string $envelope_id, \DocuSign\eSign\Model\ReturnUrlRequest $return_url_request = null) Returns a URL to the edit view UI
 * @method \DocuSign\eSign\Model\EmailSettings createEmailSettings(string $envelope_id, \DocuSign\eSign\Model\EmailSettings $email_settings = null) Adds email setting overrides to an envelope
 * @method \DocuSign\eSign\Api\EnvelopesApi\CreateEnvelopeOptions createEnvelopeOptions(array $options = [])
 * @method \DocuSign\eSign\Model\EnvelopeSummary createEnvelope(\DocuSign\eSign\Model\EnvelopeDefinition $envelope_definition = null, \DocuSign\eSign\Api\EnvelopesApi\CreateEnvelopeOptions $options = null) Creates an envelope
 * @method \DocuSign\eSign\Model\ViewUrl createEnvelopeRecipientSharedView(string $envelope_id, \DocuSign\eSign\Model\RecipientViewRequest $recipient_view_request = null) Provides a URL to start a shared recipient view of the Envelope UI
 * @method \DocuSign\eSign\Model\LockInformation createLock(string $envelope_id, \DocuSign\eSign\Model\LockRequest $lock_request = null) Lock an envelope
 * @method \DocuSign\eSign\Api\EnvelopesApi\CreateRecipientOptions createRecipientOptions(array $options = [])
 * @method \DocuSign\eSign\Model\Recipients createRecipient(string $envelope_id, \DocuSign\eSign\Model\Recipients $recipients = null, \DocuSign\eSign\Api\EnvelopesApi\CreateRecipientOptions $options = null) Adds one or more recipients to an envelope
 * @method \DocuSign\eSign\Model\ViewUrl createRecipientView(string $envelope_id, \DocuSign\eSign\Model\RecipientViewRequest $recipient_view_request = null) Returns a URL to the recipient view UI
 * @method \DocuSign\eSign\Model\DocumentHtmlDefinitions createResponsiveHtmlPreview(string $envelope_id, \DocuSign\eSign\Model\DocumentHtmlDefinition $document_html_definition = null) Get Responsive HTML Preview for all documents in an envelope
 * @method \DocuSign\eSign\Model\ViewUrl createSenderView(string $envelope_id, \DocuSign\eSign\Model\ReturnUrlRequest $return_url_request = null) Returns a URL to the sender view UI
 * @method \DocuSign\eSign\Model\Tabs createTabs(string $envelope_id, string $recipient_id, \DocuSign\eSign\Model\Tabs $tabs = null) Adds tabs for a recipient
 * @method \DocuSign\eSign\Model\EnvelopeAttachmentsResult deleteAttachments(string $envelope_id, \DocuSign\eSign\Model\EnvelopeAttachmentsRequest $envelope_attachments_request = null) Delete one or more attachments from a DRAFT envelope
 * @method \DocuSign\eSign\Model\ChunkedUploadResponse deleteChunkedUpload(string $chunked_upload_id) Delete an existing ChunkedUpload
 * @method \DocuSign\eSign\Model\CustomFields deleteCustomFields(string $envelope_id, \DocuSign\eSign\Model\CustomFields $custom_fields = null) Deletes envelope custom fields for draft and in
 * @method \DocuSign\eSign\Model\DocumentFieldsInformation deleteDocumentFields(string $document_id, string $envelope_id, \DocuSign\eSign\Model\DocumentFieldsInformation $document_fields_information = null) Deletes custom document fields from an existing envelope document
 * @method void deleteDocumentPage(string $document_id, string $envelope_id, string $page_number) Deletes a page from a document in an envelope
 * @method \DocuSign\eSign\Model\EnvelopeDocumentsResult deleteDocuments(string $envelope_id, \DocuSign\eSign\Model\EnvelopeDefinition $envelope_definition = null) Deletes documents from a draft envelope
 * @method \DocuSign\eSign\Model\EmailSettings deleteEmailSettings(string $envelope_id) Deletes the email setting overrides for an envelope
 * @method \DocuSign\eSign\Model\LockInformation deleteLock(string $envelope_id) Deletes an envelope lock
 * @method \DocuSign\eSign\Model\Recipients deleteRecipient(string $envelope_id, string $recipient_id) Deletes a recipient from an envelope
 * @method \DocuSign\eSign\Model\Recipients deleteRecipients(string $envelope_id, \DocuSign\eSign\Model\Recipients $recipients = null) Deletes recipients from an envelope
 * @method \DocuSign\eSign\Model\Tabs deleteTabs(string $envelope_id, string $recipient_id, \DocuSign\eSign\Model\Tabs $tabs = null) Deletes the tabs associated with a recipient
 * @method void deleteTemplatesFromDocument(string $document_id, string $envelope_id, string $template_id) Deletes a template from a document in an existing envelope
 * @method void getAttachment(string $attachment_id, string $envelope_id) Retrieves an attachment from the envelope
 * @method \DocuSign\eSign\Model\EnvelopeAttachmentsResult getAttachments(string $envelope_id) Returns a list of attachments associated with the specified envelope
 * @method \DocuSign\eSign\Api\EnvelopesApi\GetChunkedUploadOptions getChunkedUploadOptions(array $options = [])
 * @method \DocuSign\eSign\Model\ChunkedUploadResponse getChunkedUpload(string $chunked_upload_id, \DocuSign\eSign\Api\EnvelopesApi\GetChunkedUploadOptions $options = null) Retrieves the current metadata of a ChunkedUpload
 * @method \DocuSign\eSign\Api\EnvelopesApi\GetConsumerDisclosureOptions getConsumerDisclosureOptions(array $options = [])
 * @method \DocuSign\eSign\Model\ConsumerDisclosure getConsumerDisclosure(string $envelope_id, string $lang_code, string $recipient_id, \DocuSign\eSign\Api\EnvelopesApi\GetConsumerDisclosureOptions $options = null) Reserved
 * @method \DocuSign\eSign\Api\EnvelopesApi\GetConsumerDisclosureDefaultOptions getConsumerDisclosureDefaultOptions(array $options = [])
 * @method \DocuSign\eSign\Model\ConsumerDisclosure getConsumerDisclosureDefault(string $envelope_id, string $recipient_id, \DocuSign\eSign\Api\EnvelopesApi\GetConsumerDisclosureDefaultOptions $options = null) Gets the Electronic Record and Signature Disclosure associated with the account
 * @method \DocuSign\eSign\Api\EnvelopesApi\GetDocumentOptions getDocumentOptions(array $options = [])
 * @method \SplFileObject getDocument(string $document_id, string $envelope_id, \DocuSign\eSign\Api\EnvelopesApi\GetDocumentOptions $options = null) Gets a document from an envelope
 * @method \DocuSign\eSign\Api\EnvelopesApi\GetDocumentPageImageOptions getDocumentPageImageOptions(array $options = [])
 * @method \SplFileObject getDocumentPageImage(string $document_id, string $envelope_id, string $page_number, \DocuSign\eSign\Api\EnvelopesApi\GetDocumentPageImageOptions $options = null) Gets a page image from an envelope for display
 * @method \DocuSign\eSign\Api\EnvelopesApi\GetDocumentTabsOptions getDocumentTabsOptions(array $options = [])
 * @method \DocuSign\eSign\Model\Tabs getDocumentTabs(string $document_id, string $envelope_id, \DocuSign\eSign\Api\EnvelopesApi\GetDocumentTabsOptions $options = null) Returns tabs on the document
 * @method \DocuSign\eSign\Model\EmailSettings getEmailSettings(string $envelope_id) Gets the email setting overrides for an envelope
 * @method \DocuSign\eSign\Api\EnvelopesApi\GetEnvelopeOptions getEnvelopeOptions(array $options = [])
 * @method \DocuSign\eSign\Model\Envelope getEnvelope(string $envelope_id, \DocuSign\eSign\Api\EnvelopesApi\GetEnvelopeOptions $options = null) Gets the status of a envelope
 * @method \DocuSign\eSign\Model\DocumentHtmlDefinitionOriginals getEnvelopeDocumentHtmlDefinitions(string $document_id, string $envelope_id) Get the Original HTML Definition used to generate the Responsive HTML for a given document
 * @method \DocuSign\eSign\Model\DocumentHtmlDefinitionOriginals getEnvelopeHtmlDefinitions(string $envelope_id) Get the Original HTML Definition used to generate the Responsive HTML for the envelope
 * @method \DocuSign\eSign\Model\EnvelopeFormData getFormData(string $envelope_id) Returns envelope form data for an existing envelope
 * @method \DocuSign\eSign\Model\LockInformation getLock(string $envelope_id) Gets envelope lock information
 * @method \DocuSign\eSign\Model\Notification getNotificationSettings(string $envelope_id) Gets envelope notification information
 * @method \DocuSign\eSign\Model\Tabs getPageTabs(string $document_id, string $envelope_id, string $page_number) Returns tabs on the specified page
 * @method \DocuSign\eSign\Api\EnvelopesApi\GetPagesOptions getPagesOptions(array $options = [])
 * @method \DocuSign\eSign\Model\PageImages getPages(string $document_id, string $envelope_id, \DocuSign\eSign\Api\EnvelopesApi\GetPagesOptions $options = null) Returns document page image(s) based on input
 * @method \DocuSign\eSign\Model\DocumentVisibilityList getRecipientDocumentVisibility(string $envelope_id, string $recipient_id) Returns document visibility for the recipients
 * @method \DocuSign\eSign\Api\EnvelopesApi\GetRecipientInitialsImageOptions getRecipientInitialsImageOptions(array $options = [])
 * @method \SplFileObject getRecipientInitialsImage(string $envelope_id, string $recipient_id, \DocuSign\eSign\Api\EnvelopesApi\GetRecipientInitialsImageOptions $options = null) Gets the initials image for a user
 * @method \DocuSign\eSign\Model\UserSignature getRecipientSignature(string $envelope_id, string $recipient_id) Gets signature information for a signer or sign
 * @method \DocuSign\eSign\Api\EnvelopesApi\GetRecipientSignatureImageOptions getRecipientSignatureImageOptions(array $options = [])
 * @method \SplFileObject getRecipientSignatureImage(string $envelope_id, string $recipient_id, \DocuSign\eSign\Api\EnvelopesApi\GetRecipientSignatureImageOptions $options = null) Retrieve signature image information for a signer
 * @method \DocuSign\eSign\Model\DocumentVisibilityList getTemplateRecipientDocumentVisibility(string $recipient_id, string $template_id) Returns document visibility for the recipients
 * @method \DocuSign\eSign\Model\EnvelopeAuditEventResponse listAuditEvents(string $envelope_id) Gets the envelope audit events for an envelope
 * @method \DocuSign\eSign\Model\CustomFieldsEnvelope listCustomFields(string $envelope_id) Gets the custom field information for the specified envelope
 * @method \DocuSign\eSign\Model\DocumentFieldsInformation listDocumentFields(string $document_id, string $envelope_id) Gets the custom document fields from an  existing envelope document
 * @method \DocuSign\eSign\Model\EnvelopeDocumentsResult listDocuments(string $envelope_id) Gets a list of envelope documents
 * @method \DocuSign\eSign\Api\EnvelopesApi\ListRecipientsOptions listRecipientsOptions(array $options = [])
 * @method \DocuSign\eSign\Model\Recipients listRecipients(string $envelope_id, \DocuSign\eSign\Api\EnvelopesApi\ListRecipientsOptions $options = null) Gets the status of recipients for an envelope
 * @method \DocuSign\eSign\Api\EnvelopesApi\ListStatusOptions listStatusOptions(array $options = [])
 * @method \DocuSign\eSign\Model\EnvelopesInformation listStatus(\DocuSign\eSign\Model\EnvelopeIdsRequest $envelope_ids_request = null, \DocuSign\eSign\Api\EnvelopesApi\ListStatusOptions $options = null) Gets the envelope status for the specified envelopes
 * @method \DocuSign\eSign\Api\EnvelopesApi\ListStatusChangesOptions listStatusChangesOptions(array $options = [])
 * @method \DocuSign\eSign\Model\EnvelopesInformation listStatusChanges(\DocuSign\eSign\Api\EnvelopesApi\ListStatusChangesOptions $options = null) Gets status changes for one or more envelopes
 * @method \DocuSign\eSign\Api\EnvelopesApi\ListTabsOptions listTabsOptions(array $options = [])
 * @method \DocuSign\eSign\Model\Tabs listTabs(string $envelope_id, string $recipient_id, \DocuSign\eSign\Api\EnvelopesApi\ListTabsOptions $options = null) Gets the tabs information for a signer or sign
 * @method \DocuSign\eSign\Api\EnvelopesApi\ListTemplatesOptions listTemplatesOptions(array $options = [])
 * @method \DocuSign\eSign\Model\TemplateInformation listTemplates(string $envelope_id, \DocuSign\eSign\Api\EnvelopesApi\ListTemplatesOptions $options = null) Get List of Templates used in an Envelope
 * @method \DocuSign\eSign\Api\EnvelopesApi\ListTemplatesForDocumentOptions listTemplatesForDocumentOptions(array $options = [])
 * @method \DocuSign\eSign\Model\TemplateInformation listTemplatesForDocument(string $document_id, string $envelope_id, \DocuSign\eSign\Api\EnvelopesApi\ListTemplatesForDocumentOptions $options = null) Gets the templates associated with a document in an existing envelope
 * @method \DocuSign\eSign\Model\EnvelopeAttachmentsResult putAttachment(string $attachment_id, string $envelope_id, \DocuSign\eSign\Model\Attachment $attachment = null) Add an attachment to a DRAFT or IN
 * @method \DocuSign\eSign\Model\EnvelopeAttachmentsResult putAttachments(string $envelope_id, \DocuSign\eSign\Model\EnvelopeAttachmentsRequest $envelope_attachments_request = null) Add one or more attachments to a DRAFT or IN
 * @method void rotateDocumentPage(string $document_id, string $envelope_id, string $page_number, \DocuSign\eSign\Model\PageRequest $page_request = null) Rotates page image from an envelope for display
 * @method \DocuSign\eSign\Api\EnvelopesApi\UpdateOptions updateOptions(array $options = [])
 * @method \DocuSign\eSign\Model\EnvelopeUpdateSummary update(string $envelope_id, \DocuSign\eSign\Model\Envelope $envelope = null, \DocuSign\eSign\Api\EnvelopesApi\UpdateOptions $options = null) Send Draft Envelope
 * @method \DocuSign\eSign\Api\EnvelopesApi\UpdateChunkedUploadOptions updateChunkedUploadOptions(array $options = [])
 * @method \DocuSign\eSign\Model\ChunkedUploadResponse updateChunkedUpload(string $chunked_upload_id, \DocuSign\eSign\Api\EnvelopesApi\UpdateChunkedUploadOptions $options = null) Integrity
 * @method \DocuSign\eSign\Model\ChunkedUploadResponse updateChunkedUploadPart(string $chunked_upload_id, string $chunked_upload_part_seq, \DocuSign\eSign\Model\ChunkedUploadRequest $chunked_upload_request = null) Add a chunk
 * @method \DocuSign\eSign\Model\CustomFields updateCustomFields(string $envelope_id, \DocuSign\eSign\Model\CustomFields $custom_fields = null) Updates envelope custom fields in an envelope
 * @method \DocuSign\eSign\Api\EnvelopesApi\UpdateDocumentOptions updateDocumentOptions(array $options = [])
 * @method void updateDocument(string $document_id, string $envelope_id, \DocuSign\eSign\Api\EnvelopesApi\UpdateDocumentOptions $options = null) Adds a document to an existing draft envelope
 * @method \DocuSign\eSign\Model\DocumentFieldsInformation updateDocumentFields(string $document_id, string $envelope_id, \DocuSign\eSign\Model\DocumentFieldsInformation $document_fields_information = null) Updates existing custom document fields in an existing envelope document
 * @method \DocuSign\eSign\Api\EnvelopesApi\UpdateDocumentsOptions updateDocumentsOptions(array $options = [])
 * @method \DocuSign\eSign\Model\EnvelopeDocumentsResult updateDocuments(string $envelope_id, \DocuSign\eSign\Model\EnvelopeDefinition $envelope_definition = null, \DocuSign\eSign\Api\EnvelopesApi\UpdateDocumentsOptions $options = null) Adds one or more documents to an existing envelope document
 * @method \DocuSign\eSign\Model\EmailSettings updateEmailSettings(string $envelope_id, \DocuSign\eSign\Model\EmailSettings $email_settings = null) Updates the email setting overrides for an envelope
 * @method \DocuSign\eSign\Model\LockInformation updateLock(string $envelope_id, \DocuSign\eSign\Model\LockRequest $lock_request = null) Updates an envelope lock
 * @method \DocuSign\eSign\Model\Notification updateNotificationSettings(string $envelope_id, \DocuSign\eSign\Model\EnvelopeNotificationRequest $envelope_notification_request = null) Sets envelope notification (Reminders
 * @method \DocuSign\eSign\Model\DocumentVisibilityList updateRecipientDocumentVisibility(string $envelope_id, string $recipient_id, \DocuSign\eSign\Model\DocumentVisibilityList $document_visibility_list = null) Updates document visibility for the recipients
 * @method void updateRecipientInitialsImage(string $envelope_id, string $recipient_id) Sets the initials image for an accountless signer
 * @method void updateRecipientSignatureImage(string $envelope_id, string $recipient_id) Sets the signature image for an accountless signer
 * @method \DocuSign\eSign\Api\EnvelopesApi\UpdateRecipientsOptions updateRecipientsOptions(array $options = [])
 * @method \DocuSign\eSign\Model\RecipientsUpdateSummary updateRecipients(string $envelope_id, \DocuSign\eSign\Model\Recipients $recipients = null, \DocuSign\eSign\Api\EnvelopesApi\UpdateRecipientsOptions $options = null) Updates recipients in a draft envelope or corrects recipient information for an in process envelope
 * @method \DocuSign\eSign\Model\DocumentVisibilityList updateRecipientsDocumentVisibility(string $envelope_id, \DocuSign\eSign\Model\DocumentVisibilityList $document_visibility_list = null) Updates document visibility for the recipients
 * @method \DocuSign\eSign\Model\Tabs updateTabs(string $envelope_id, string $recipient_id, \DocuSign\eSign\Model\Tabs $tabs = null) Updates the tabs for a recipient
 * @method \DocuSign\eSign\Model\TemplateDocumentVisibilityList updateTemplateRecipientDocumentVisibility(string $recipient_id, string $template_id, \DocuSign\eSign\Model\TemplateDocumentVisibilityList $template_document_visibility_list = null) Updates document visibility for the recipients
 * @method \DocuSign\eSign\Model\TemplateDocumentVisibilityList updateTemplateRecipientsDocumentVisibility(string $template_id, \DocuSign\eSign\Model\TemplateDocumentVisibilityList $template_document_visibility_list = null) Updates document visibility for the recipients
 */
class Envelopes extends BaseApi
{

}