<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class Envelopes
 * @method Api\EnvelopesApi getClient()
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method Api\EnvelopesApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method Models\DocumentTemplateList applyTemplate(string $envelope_id, Models\DocumentTemplateList $document_template_list = null) Adds templates to an envelope
 * @method Models\DocumentTemplateList applyTemplateToDocument(string $document_id, string $envelope_id, Models\DocumentTemplateList $document_template_list = null) Adds templates to a document in an  envelope
 * @method Models\ChunkedUploadResponse createChunkedUpload(Models\ChunkedUploadRequest $chunked_upload_request = null) Initiate a new ChunkedUpload
 * @method Models\ViewUrl createConsoleView(Models\ConsoleViewRequest $console_view_request = null) Returns a URL to the authentication view UI
 * @method Models\ViewUrl createCorrectView(string $envelope_id, Models\CorrectViewRequest $correct_view_request = null) Returns a URL to the envelope correction UI
 * @method Models\CustomFields createCustomFields(string $envelope_id, Models\CustomFields $custom_fields = null) Updates envelope custom fields for an envelope
 * @method Models\DocumentFieldsInformation createDocumentFields(string $document_id, string $envelope_id, Models\DocumentFieldsInformation $document_fields_information = null) Creates custom document fields in an existing envelope document
 * @method Models\DocumentHtmlDefinitions createDocumentResponsiveHtmlPreview(string $document_id, string $envelope_id, Models\DocumentHtmlDefinition $document_html_definition = null) Get Responsive HTML Preview for a document in an envelope
 * @method Models\Tabs createDocumentTabs(string $document_id, string $envelope_id, Models\Tabs $tabs = null) Adds the tabs to an envelope document
 * @method Models\ViewUrl createEditView(string $envelope_id, Models\ReturnUrlRequest $return_url_request = null) Returns a URL to the edit view UI
 * @method Models\EmailSettings createEmailSettings(string $envelope_id, Models\EmailSettings $email_settings = null) Adds email setting overrides to an envelope
 * @method Api\EnvelopesApi\CreateEnvelopeOptions createEnvelopeOptions(array $options = ['set_cdse_mode' => null, 'set_change_routing_order' => null, 'set_completed_documents_only' => null, 'set_merge_roles_on_draft' => null, 'set_tab_label_exact_matches' => null])
 * @method Models\EnvelopeSummary createEnvelope(Models\EnvelopeDefinition $envelope_definition = null, Api\EnvelopesApi\CreateEnvelopeOptions $options = null) Creates an envelope
 * @method Models\CommentHistoryResult createEnvelopeComments(string $envelope_id, Models\CommentsPublish $comments_publish = null) Posts a list of comments for authorized user
 * @method Models\ViewUrl createEnvelopeRecipientPreview(string $envelope_id, Models\RecipientPreviewRequest $recipient_preview_request = null) Provides a URL to start a recipient view of the Envelope UI
 * @method Models\ViewUrl createEnvelopeRecipientSharedView(string $envelope_id, Models\RecipientViewRequest $recipient_view_request = null) Provides a URL to start a shared recipient view of the Envelope UI
 * @method Models\EnvelopeTransferRuleInformation createEnvelopeTransferRules(Models\EnvelopeTransferRuleRequest $envelope_transfer_rule_request = null) Add envelope transfer rules to an account
 * @method Models\LockInformation createLock(string $envelope_id, Models\LockRequest $lock_request = null) Lock an envelope
 * @method Api\EnvelopesApi\CreateRecipientOptions createRecipientOptions(array $options = ['set_resend_envelope' => null])
 * @method Models\Recipients createRecipient(string $envelope_id, Models\Recipients $recipients = null, Api\EnvelopesApi\CreateRecipientOptions $options = null) Adds one or more recipients to an envelope
 * @method Models\ProofServiceViewLink createRecipientProofFileLink(string $envelope_id, string $recipient_id) Returns a link to access to the identity events stored in the proof service related to this recipient
 * @method Models\ProofServiceResourceToken createRecipientProofFileResourceToken(string $envelope_id, string $recipient_id, string $token_scopes) Returns a resource token to get access to the identity events stored in the proof service related to this recipient
 * @method Models\ViewUrl createRecipientView(string $envelope_id, Models\RecipientViewRequest $recipient_view_request = null) Returns a URL to the recipient view UI
 * @method Models\DocumentHtmlDefinitions createResponsiveHtmlPreview(string $envelope_id, Models\DocumentHtmlDefinition $document_html_definition = null) Get Responsive HTML Preview for all documents in an envelope
 * @method Models\ViewUrl createSenderView(string $envelope_id, Models\ReturnUrlRequest $return_url_request = null) Returns a URL to the sender view UI
 * @method Models\Tabs createTabs(string $envelope_id, string $recipient_id, Models\Tabs $tabs = null) Adds tabs for a recipient
 * @method Models\EnvelopeAttachmentsResult deleteAttachments(string $envelope_id, Models\EnvelopeAttachmentsRequest $envelope_attachments_request = null) Delete one or more attachments from a DRAFT envelope
 * @method Models\ChunkedUploadResponse deleteChunkedUpload(string $chunked_upload_id) Delete an existing ChunkedUpload
 * @method Models\CustomFields deleteCustomFields(string $envelope_id, Models\CustomFields $custom_fields = null) Deletes envelope custom fields for draft and in
 * @method Models\DocumentFieldsInformation deleteDocumentFields(string $document_id, string $envelope_id, Models\DocumentFieldsInformation $document_fields_information = null) Deletes custom document fields from an existing envelope document
 * @method void deleteDocumentPage(string $document_id, string $envelope_id, string $page_number) Deletes a page from a document in an envelope
 * @method Models\Tabs deleteDocumentTabs(string $document_id, string $envelope_id, Models\Tabs $tabs = null) Deletes tabs from an envelope document
 * @method Models\EnvelopeDocumentsResult deleteDocuments(string $envelope_id, Models\EnvelopeDefinition $envelope_definition = null) Deletes documents from a draft envelope
 * @method Models\EmailSettings deleteEmailSettings(string $envelope_id) Deletes the email setting overrides for an envelope
 * @method void deleteEnvelopeTransferRules(string $envelope_transfer_rule_id) Delete envelope transfer rules for an account
 * @method Models\LockInformation deleteLock(string $envelope_id) Deletes an envelope lock
 * @method Models\Recipients deleteRecipient(string $envelope_id, string $recipient_id) Deletes a recipient from an envelope
 * @method Models\Recipients deleteRecipients(string $envelope_id, Models\Recipients $recipients = null) Deletes recipients from an envelope
 * @method Models\Tabs deleteTabs(string $envelope_id, string $recipient_id, Models\Tabs $tabs = null) Deletes the tabs associated with a recipient
 * @method void deleteTemplatesFromDocument(string $document_id, string $envelope_id, string $template_id) Deletes a template from a document in an existing envelope
 * @method void getAttachment(string $attachment_id, string $envelope_id) Retrieves an attachment from the envelope
 * @method Models\EnvelopeAttachmentsResult getAttachments(string $envelope_id) Returns a list of attachments associated with the specified envelope
 * @method Api\EnvelopesApi\GetChunkedUploadOptions getChunkedUploadOptions(array $options = ['set_include' => null])
 * @method Models\ChunkedUploadResponse getChunkedUpload(string $chunked_upload_id, Api\EnvelopesApi\GetChunkedUploadOptions $options = null) Retrieves the current metadata of a ChunkedUpload
 * @method Api\EnvelopesApi\GetCommentsTranscriptOptions getCommentsTranscriptOptions(array $options = ['set_encoding' => null])
 * @method \SplFileObject getCommentsTranscript(string $envelope_id, Api\EnvelopesApi\GetCommentsTranscriptOptions $options = null) Gets comment transcript for envelope and user
 * @method Api\EnvelopesApi\GetConsumerDisclosureOptions getConsumerDisclosureOptions(array $options = ['set_lang_code2' => null])
 * @method Models\ConsumerDisclosure getConsumerDisclosure(string $envelope_id, string $lang_code, string $recipient_id, Api\EnvelopesApi\GetConsumerDisclosureOptions $options = null) Reserved
 * @method Api\EnvelopesApi\GetConsumerDisclosureDefaultOptions getConsumerDisclosureDefaultOptions(array $options = ['set_lang_code' => null])
 * @method Models\ConsumerDisclosure getConsumerDisclosureDefault(string $envelope_id, string $recipient_id, Api\EnvelopesApi\GetConsumerDisclosureDefaultOptions $options = null) Gets the Electronic Record and Signature Disclosure associated with the account
 * @method Api\EnvelopesApi\GetDocumentOptions getDocumentOptions(array $options = ['set_certificate' => null, 'set_documents_by_userid' => null, 'set_encoding' => null, 'set_encrypt' => null, 'set_language' => null, 'set_recipient_id' => null, 'set_shared_user_id' => null, 'set_show_changes' => null, 'set_watermark' => null])
 * @method \SplFileObject getDocument(string $document_id, string $envelope_id, Api\EnvelopesApi\GetDocumentOptions $options = null) Gets a document from an envelope
 * @method Api\EnvelopesApi\GetDocumentPageImageOptions getDocumentPageImageOptions(array $options = ['set_dpi' => null, 'set_max_height' => null, 'set_max_width' => null, 'set_show_changes' => null])
 * @method \SplFileObject getDocumentPageImage(string $document_id, string $envelope_id, string $page_number, Api\EnvelopesApi\GetDocumentPageImageOptions $options = null) Gets a page image from an envelope for display
 * @method Api\EnvelopesApi\GetDocumentTabsOptions getDocumentTabsOptions(array $options = ['set_page_numbers' => null])
 * @method Models\Tabs getDocumentTabs(string $document_id, string $envelope_id, Api\EnvelopesApi\GetDocumentTabsOptions $options = null) Returns tabs on the document
 * @method Models\EmailSettings getEmailSettings(string $envelope_id) Gets the email setting overrides for an envelope
 * @method Api\EnvelopesApi\GetEnvelopeOptions getEnvelopeOptions(array $options = ['set_advanced_update' => null, 'set_include' => null])
 * @method Models\Envelope getEnvelope(string $envelope_id, Api\EnvelopesApi\GetEnvelopeOptions $options = null) Gets the status of a envelope
 * @method Models\DocumentHtmlDefinitionOriginals getEnvelopeDocumentHtmlDefinitions(string $document_id, string $envelope_id) Get the Original HTML Definition used to generate the Responsive HTML for a given document
 * @method Models\DocumentHtmlDefinitionOriginals getEnvelopeHtmlDefinitions(string $envelope_id) Get the Original HTML Definition used to generate the Responsive HTML for the envelope
 * @method Api\EnvelopesApi\GetEnvelopeTransferRulesOptions getEnvelopeTransferRulesOptions(array $options = ['set_count' => null, 'set_start_position' => null])
 * @method Models\EnvelopeTransferRuleInformation getEnvelopeTransferRules(Api\EnvelopesApi\GetEnvelopeTransferRulesOptions $options = null) Returns a list of envelope transfer rules in the specified account
 * @method Models\EnvelopeFormData getFormData(string $envelope_id) Returns envelope form data for an existing envelope
 * @method Models\LockInformation getLock(string $envelope_id) Gets envelope lock information
 * @method Models\Notification getNotificationSettings(string $envelope_id) Gets envelope notification information
 * @method Models\Tabs getPageTabs(string $document_id, string $envelope_id, string $page_number) Returns tabs on the specified page
 * @method Api\EnvelopesApi\GetPagesOptions getPagesOptions(array $options = ['set_count' => null, 'set_dpi' => null, 'set_max_height' => null, 'set_max_width' => null, 'set_nocache' => null, 'set_show_changes' => null, 'set_start_position' => null])
 * @method Models\PageImages getPages(string $document_id, string $envelope_id, Api\EnvelopesApi\GetPagesOptions $options = null) Returns document page image(s) based on input
 * @method Models\DocumentVisibilityList getRecipientDocumentVisibility(string $envelope_id, string $recipient_id) Returns document visibility for the recipients
 * @method Api\EnvelopesApi\GetRecipientInitialsImageOptions getRecipientInitialsImageOptions(array $options = ['set_include_chrome' => null])
 * @method \SplFileObject getRecipientInitialsImage(string $envelope_id, string $recipient_id, Api\EnvelopesApi\GetRecipientInitialsImageOptions $options = null) Gets the initials image for a user
 * @method Models\UserSignature getRecipientSignature(string $envelope_id, string $recipient_id) Gets signature information for a signer or sign
 * @method Api\EnvelopesApi\GetRecipientSignatureImageOptions getRecipientSignatureImageOptions(array $options = ['set_include_chrome' => null])
 * @method \SplFileObject getRecipientSignatureImage(string $envelope_id, string $recipient_id, Api\EnvelopesApi\GetRecipientSignatureImageOptions $options = null) Retrieve signature image information for a signer
 * @method void getTabsBlob(string $envelope_id) Get encrypted tabs for envelope
 * @method Models\DocumentVisibilityList getTemplateRecipientDocumentVisibility(string $recipient_id, string $template_id) Returns document visibility for the recipients
 * @method Models\EnvelopeAuditEventResponse listAuditEvents(string $envelope_id) Gets the envelope audit events for an envelope
 * @method Models\CustomFieldsEnvelope listCustomFields(string $envelope_id) Gets the custom field information for the specified envelope
 * @method Models\DocumentFieldsInformation listDocumentFields(string $document_id, string $envelope_id) Gets the custom document fields from an  existing envelope document
 * @method Api\EnvelopesApi\ListDocumentsOptions listDocumentsOptions(array $options = ['set_documents_by_userid' => null, 'set_include_document_size' => null, 'set_include_metadata' => null, 'set_include_tabs' => null, 'set_recipient_id' => null, 'set_shared_user_id' => null])
 * @method Models\EnvelopeDocumentsResult listDocuments(string $envelope_id, Api\EnvelopesApi\ListDocumentsOptions $options = null) Gets a list of envelope documents
 * @method Api\EnvelopesApi\ListRecipientsOptions listRecipientsOptions(array $options = ['set_include_anchor_tab_locations' => null, 'set_include_extended' => null, 'set_include_metadata' => null, 'set_include_tabs' => null])
 * @method Models\Recipients listRecipients(string $envelope_id, Api\EnvelopesApi\ListRecipientsOptions $options = null) Gets the status of recipients for an envelope
 * @method Api\EnvelopesApi\ListStatusOptions listStatusOptions(array $options = ['set_ac_status' => null, 'set_block' => null, 'set_count' => null, 'set_email' => null, 'set_envelope_ids' => null, 'set_from_date' => null, 'set_from_to_status' => null, 'set_start_position' => null, 'set_status' => null, 'set_to_date' => null, 'set_transaction_ids' => null, 'set_user_name' => null])
 * @method Models\EnvelopesInformation listStatus(Models\EnvelopeIdsRequest $envelope_ids_request = null, Api\EnvelopesApi\ListStatusOptions $options = null) Gets the envelope status for the specified envelopes
 * @method Api\EnvelopesApi\ListStatusChangesOptions listStatusChangesOptions(array $options = ['set_ac_status' => null, 'set_block' => null, 'set_cdse_mode' => null, 'set_continuation_token' => null, 'set_count' => null, 'set_custom_field' => null, 'set_email' => null, 'set_envelope_ids' => null, 'set_exclude' => null, 'set_folder_ids' => null, 'set_folder_types' => null, 'set_from_date' => null, 'set_from_to_status' => null, 'set_include' => null, 'set_include_purge_information' => null, 'set_intersecting_folder_ids' => null, 'set_last_queried_date' => null, 'set_order' => null, 'set_order_by' => null, 'set_powerformids' => null, 'set_query_budget' => null, 'set_requester_date_format' => null, 'set_search_text' => null, 'set_start_position' => null, 'set_status' => null, 'set_to_date' => null, 'set_transaction_ids' => null, 'set_user_filter' => null, 'set_user_id' => null, 'set_user_name' => null])
 * @method Models\EnvelopesInformation listStatusChanges(Api\EnvelopesApi\ListStatusChangesOptions $options = null) Gets status changes for one or more envelopes
 * @method Api\EnvelopesApi\ListTabsOptions listTabsOptions(array $options = ['set_include_anchor_tab_locations' => null, 'set_include_metadata' => null])
 * @method Models\Tabs listTabs(string $envelope_id, string $recipient_id, Api\EnvelopesApi\ListTabsOptions $options = null) Gets the tabs information for a signer or sign
 * @method Api\EnvelopesApi\ListTemplatesOptions listTemplatesOptions(array $options = ['set_include' => null])
 * @method Models\TemplateInformation listTemplates(string $envelope_id, Api\EnvelopesApi\ListTemplatesOptions $options = null) Get List of Templates used in an Envelope
 * @method Api\EnvelopesApi\ListTemplatesForDocumentOptions listTemplatesForDocumentOptions(array $options = ['set_include' => null])
 * @method Models\TemplateInformation listTemplatesForDocument(string $document_id, string $envelope_id, Api\EnvelopesApi\ListTemplatesForDocumentOptions $options = null) Gets the templates associated with a document in an existing envelope
 * @method Models\EnvelopeAttachmentsResult putAttachment(string $attachment_id, string $envelope_id, Models\Attachment $attachment = null) Add an attachment to a DRAFT or IN
 * @method Models\EnvelopeAttachmentsResult putAttachments(string $envelope_id, Models\EnvelopeAttachmentsRequest $envelope_attachments_request = null) Add one or more attachments to a DRAFT or IN
 * @method void rotateDocumentPage(string $document_id, string $envelope_id, string $page_number, Models\PageRequest $page_request = null) Rotates page image from an envelope for display
 * @method Api\EnvelopesApi\UpdateOptions updateOptions(array $options = ['set_advanced_update' => null, 'set_resend_envelope' => null])
 * @method Models\EnvelopeUpdateSummary update(string $envelope_id, Models\Envelope $envelope = null, Api\EnvelopesApi\UpdateOptions $options = null) Send Draft Envelope
 * @method Api\EnvelopesApi\UpdateChunkedUploadOptions updateChunkedUploadOptions(array $options = ['set_action' => null])
 * @method Models\ChunkedUploadResponse updateChunkedUpload(string $chunked_upload_id, Api\EnvelopesApi\UpdateChunkedUploadOptions $options = null) Integrity
 * @method Models\ChunkedUploadResponse updateChunkedUploadPart(string $chunked_upload_id, string $chunked_upload_part_seq, Models\ChunkedUploadRequest $chunked_upload_request = null) Add a chunk
 * @method Models\CustomFields updateCustomFields(string $envelope_id, Models\CustomFields $custom_fields = null) Updates envelope custom fields in an envelope
 * @method Models\EnvelopeDocument updateDocument(string $document_id, string $envelope_id) Adds a document to an existing draft envelope
 * @method Models\DocumentFieldsInformation updateDocumentFields(string $document_id, string $envelope_id, Models\DocumentFieldsInformation $document_fields_information = null) Updates existing custom document fields in an existing envelope document
 * @method Models\Tabs updateDocumentTabs(string $document_id, string $envelope_id, Models\Tabs $tabs = null) Updates the tabs for an envelope document
 * @method Models\EnvelopeDocumentsResult updateDocuments(string $envelope_id, Models\EnvelopeDefinition $envelope_definition = null) Adds one or more documents to an existing envelope document
 * @method Models\EmailSettings updateEmailSettings(string $envelope_id, Models\EmailSettings $email_settings = null) Updates the email setting overrides for an envelope
 * @method Models\EnvelopeTransferRule updateEnvelopeTransferRule(string $envelope_transfer_rule_id, Models\EnvelopeTransferRule $envelope_transfer_rule = null) Update an envelope transfer rule for an account
 * @method Models\EnvelopeTransferRuleInformation updateEnvelopeTransferRules(Models\EnvelopeTransferRuleInformation $envelope_transfer_rule_information = null) Update envelope transfer rules for an account
 * @method Models\LockInformation updateLock(string $envelope_id, Models\LockRequest $lock_request = null) Updates an envelope lock
 * @method Models\Notification updateNotificationSettings(string $envelope_id, Models\EnvelopeNotificationRequest $envelope_notification_request = null) Sets envelope notification (Reminders
 * @method Models\DocumentVisibilityList updateRecipientDocumentVisibility(string $envelope_id, string $recipient_id, Models\DocumentVisibilityList $document_visibility_list = null) Updates document visibility for the recipients
 * @method void updateRecipientInitialsImage(string $envelope_id, string $recipient_id) Sets the initials image for an accountless signer
 * @method void updateRecipientSignatureImage(string $envelope_id, string $recipient_id) Sets the signature image for an accountless signer
 * @method Api\EnvelopesApi\UpdateRecipientsOptions updateRecipientsOptions(array $options = ['set_combine_same_order_recipients' => null, 'set_offline_signing' => null, 'set_resend_envelope' => null])
 * @method Models\RecipientsUpdateSummary updateRecipients(string $envelope_id, Models\Recipients $recipients = null, Api\EnvelopesApi\UpdateRecipientsOptions $options = null) Updates recipients in a draft envelope or corrects recipient information for an in process envelope
 * @method Models\DocumentVisibilityList updateRecipientsDocumentVisibility(string $envelope_id, Models\DocumentVisibilityList $document_visibility_list = null) Updates document visibility for the recipients
 * @method Models\Tabs updateTabs(string $envelope_id, string $recipient_id, Models\Tabs $tabs = null) Updates the tabs for a recipient
 * @method void updateTabsBlob(string $envelope_id) Update encrypted tabs for envelope
 * @method Models\TemplateDocumentVisibilityList updateTemplateRecipientDocumentVisibility(string $recipient_id, string $template_id, Models\TemplateDocumentVisibilityList $template_document_visibility_list = null) Updates document visibility for the recipients
 * @method Models\TemplateDocumentVisibilityList updateTemplateRecipientsDocumentVisibility(string $template_id, Models\TemplateDocumentVisibilityList $template_document_visibility_list = null) Updates document visibility for the recipients
 */
class Envelopes extends BaseApi
{
    protected $methodsWithAccountId = [
        'applyTemplate',
        'applyTemplateWithHttpInfo',
        'applyTemplateToDocument',
        'applyTemplateToDocumentWithHttpInfo',
        'createChunkedUpload',
        'createChunkedUploadWithHttpInfo',
        'createConsoleView',
        'createConsoleViewWithHttpInfo',
        'createCorrectView',
        'createCorrectViewWithHttpInfo',
        'createCustomFields',
        'createCustomFieldsWithHttpInfo',
        'createDocumentFields',
        'createDocumentFieldsWithHttpInfo',
        'createDocumentResponsiveHtmlPreview',
        'createDocumentResponsiveHtmlPreviewWithHttpInfo',
        'createDocumentTabs',
        'createDocumentTabsWithHttpInfo',
        'createEditView',
        'createEditViewWithHttpInfo',
        'createEmailSettings',
        'createEmailSettingsWithHttpInfo',
        'createEnvelope',
        'createEnvelopeWithHttpInfo',
        'createEnvelopeComments',
        'createEnvelopeCommentsWithHttpInfo',
        'createEnvelopeRecipientPreview',
        'createEnvelopeRecipientPreviewWithHttpInfo',
        'createEnvelopeRecipientSharedView',
        'createEnvelopeRecipientSharedViewWithHttpInfo',
        'createEnvelopeTransferRules',
        'createEnvelopeTransferRulesWithHttpInfo',
        'createLock',
        'createLockWithHttpInfo',
        'createRecipient',
        'createRecipientWithHttpInfo',
        'createRecipientProofFileLink',
        'createRecipientProofFileLinkWithHttpInfo',
        'createRecipientProofFileResourceToken',
        'createRecipientProofFileResourceTokenWithHttpInfo',
        'createRecipientView',
        'createRecipientViewWithHttpInfo',
        'createResponsiveHtmlPreview',
        'createResponsiveHtmlPreviewWithHttpInfo',
        'createSenderView',
        'createSenderViewWithHttpInfo',
        'createTabs',
        'createTabsWithHttpInfo',
        'deleteAttachments',
        'deleteAttachmentsWithHttpInfo',
        'deleteChunkedUpload',
        'deleteChunkedUploadWithHttpInfo',
        'deleteCustomFields',
        'deleteCustomFieldsWithHttpInfo',
        'deleteDocumentFields',
        'deleteDocumentFieldsWithHttpInfo',
        'deleteDocumentPage',
        'deleteDocumentPageWithHttpInfo',
        'deleteDocumentTabs',
        'deleteDocumentTabsWithHttpInfo',
        'deleteDocuments',
        'deleteDocumentsWithHttpInfo',
        'deleteEmailSettings',
        'deleteEmailSettingsWithHttpInfo',
        'deleteEnvelopeTransferRules',
        'deleteEnvelopeTransferRulesWithHttpInfo',
        'deleteLock',
        'deleteLockWithHttpInfo',
        'deleteRecipient',
        'deleteRecipientWithHttpInfo',
        'deleteRecipients',
        'deleteRecipientsWithHttpInfo',
        'deleteTabs',
        'deleteTabsWithHttpInfo',
        'deleteTemplatesFromDocument',
        'deleteTemplatesFromDocumentWithHttpInfo',
        'getAttachment',
        'getAttachmentWithHttpInfo',
        'getAttachments',
        'getAttachmentsWithHttpInfo',
        'getChunkedUpload',
        'getChunkedUploadWithHttpInfo',
        'getCommentsTranscript',
        'getCommentsTranscriptWithHttpInfo',
        'getConsumerDisclosure',
        'getConsumerDisclosureWithHttpInfo',
        'getConsumerDisclosureDefault',
        'getConsumerDisclosureDefaultWithHttpInfo',
        'getDocument',
        'getDocumentWithHttpInfo',
        'getDocumentPageImage',
        'getDocumentPageImageWithHttpInfo',
        'getDocumentTabs',
        'getDocumentTabsWithHttpInfo',
        'getEmailSettings',
        'getEmailSettingsWithHttpInfo',
        'getEnvelope',
        'getEnvelopeWithHttpInfo',
        'getEnvelopeDocumentHtmlDefinitions',
        'getEnvelopeDocumentHtmlDefinitionsWithHttpInfo',
        'getEnvelopeHtmlDefinitions',
        'getEnvelopeHtmlDefinitionsWithHttpInfo',
        'getEnvelopeTransferRules',
        'getEnvelopeTransferRulesWithHttpInfo',
        'getFormData',
        'getFormDataWithHttpInfo',
        'getLock',
        'getLockWithHttpInfo',
        'getNotificationSettings',
        'getNotificationSettingsWithHttpInfo',
        'getPageTabs',
        'getPageTabsWithHttpInfo',
        'getPages',
        'getPagesWithHttpInfo',
        'getRecipientDocumentVisibility',
        'getRecipientDocumentVisibilityWithHttpInfo',
        'getRecipientInitialsImage',
        'getRecipientInitialsImageWithHttpInfo',
        'getRecipientSignature',
        'getRecipientSignatureWithHttpInfo',
        'getRecipientSignatureImage',
        'getRecipientSignatureImageWithHttpInfo',
        'getTabsBlob',
        'getTabsBlobWithHttpInfo',
        'getTemplateRecipientDocumentVisibility',
        'getTemplateRecipientDocumentVisibilityWithHttpInfo',
        'listAuditEvents',
        'listAuditEventsWithHttpInfo',
        'listCustomFields',
        'listCustomFieldsWithHttpInfo',
        'listDocumentFields',
        'listDocumentFieldsWithHttpInfo',
        'listDocuments',
        'listDocumentsWithHttpInfo',
        'listRecipients',
        'listRecipientsWithHttpInfo',
        'listStatus',
        'listStatusWithHttpInfo',
        'listStatusChanges',
        'listStatusChangesWithHttpInfo',
        'listTabs',
        'listTabsWithHttpInfo',
        'listTemplates',
        'listTemplatesWithHttpInfo',
        'listTemplatesForDocument',
        'listTemplatesForDocumentWithHttpInfo',
        'putAttachment',
        'putAttachmentWithHttpInfo',
        'putAttachments',
        'putAttachmentsWithHttpInfo',
        'rotateDocumentPage',
        'rotateDocumentPageWithHttpInfo',
        'update',
        'updateWithHttpInfo',
        'updateChunkedUpload',
        'updateChunkedUploadWithHttpInfo',
        'updateChunkedUploadPart',
        'updateChunkedUploadPartWithHttpInfo',
        'updateCustomFields',
        'updateCustomFieldsWithHttpInfo',
        'updateDocument',
        'updateDocumentWithHttpInfo',
        'updateDocumentFields',
        'updateDocumentFieldsWithHttpInfo',
        'updateDocumentTabs',
        'updateDocumentTabsWithHttpInfo',
        'updateDocuments',
        'updateDocumentsWithHttpInfo',
        'updateEmailSettings',
        'updateEmailSettingsWithHttpInfo',
        'updateEnvelopeTransferRule',
        'updateEnvelopeTransferRuleWithHttpInfo',
        'updateEnvelopeTransferRules',
        'updateEnvelopeTransferRulesWithHttpInfo',
        'updateLock',
        'updateLockWithHttpInfo',
        'updateNotificationSettings',
        'updateNotificationSettingsWithHttpInfo',
        'updateRecipientDocumentVisibility',
        'updateRecipientDocumentVisibilityWithHttpInfo',
        'updateRecipientInitialsImage',
        'updateRecipientInitialsImageWithHttpInfo',
        'updateRecipientSignatureImage',
        'updateRecipientSignatureImageWithHttpInfo',
        'updateRecipients',
        'updateRecipientsWithHttpInfo',
        'updateRecipientsDocumentVisibility',
        'updateRecipientsDocumentVisibilityWithHttpInfo',
        'updateTabs',
        'updateTabsWithHttpInfo',
        'updateTabsBlob',
        'updateTabsBlobWithHttpInfo',
        'updateTemplateRecipientDocumentVisibility',
        'updateTemplateRecipientDocumentVisibilityWithHttpInfo',
        'updateTemplateRecipientsDocumentVisibility',
        'updateTemplateRecipientsDocumentVisibilityWithHttpInfo'
];
}