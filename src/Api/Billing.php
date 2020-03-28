<?php

namespace DocuSign\Rest\Api;

/**
 * Class Billing
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\BillingApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method \DocuSign\eSign\Model\BillingPlanResponse getBillingPlan(string $billing_plan_id) Get the billing plan details
 * @method \DocuSign\eSign\Model\CreditCardInformation getCreditCardInfo() Get metadata for a given credit card
 * @method \DocuSign\eSign\Model\BillingInvoice getInvoice(string $invoice_id) Retrieves a billing invoice
 * @method \DocuSign\eSign\Model\BillingPaymentItem getPayment(string $payment_id) Gets billing payment information for a specific payment
 * @method \DocuSign\eSign\Model\AccountBillingPlanResponse getPlan() Get Account Billing Plan
 * @method \DocuSign\eSign\Model\BillingPlansResponse listBillingPlans() Gets the list of available billing plans
 * @method \DocuSign\eSign\Model\BillingInvoicesResponse listInvoices() Get a List of Billing Invoices
 * @method \DocuSign\eSign\Model\BillingInvoicesSummary listInvoicesPastDue() Get a list of past due invoices
 * @method \DocuSign\eSign\Model\BillingPaymentsResponse listPayments() Gets payment information for one or more payments
 * @method \DocuSign\eSign\Model\BillingPaymentResponse makePayment(\DocuSign\eSign\Model\BillingPaymentRequest $billing_payment_request = null) Posts a payment to a past due invoice
 * @method void purchaseEnvelopes(\DocuSign\eSign\Model\PurchasedEnvelopesInformation $purchased_envelopes_information = null) Reserverd
 * @method \DocuSign\eSign\Model\BillingPlanUpdateResponse updatePlan(\DocuSign\eSign\Model\BillingPlanInformation $billing_plan_information = null) Updates the account billing plan
 */
class Billing extends BaseApi
{

}