<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class Billing
 * @method Api\BillingApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method Models\BillingPlanResponse getBillingPlan(?string $billing_plan_id) Get the billing plan details
 * @method Models\CreditCardInformation getCreditCardInfo() Get metadata for a given credit card
 * @method Models\DowngradRequestBillingInfoResponse getDowngradeRequestBillingInfo() Returns downgrade plan information for the specified account
 * @method Models\BillingInvoice getInvoice(?string $invoice_id) Retrieves a billing invoice
 * @method Models\BillingPaymentItem getPayment(?string $payment_id) Gets billing payment information for a specific payment
 * @method Api\BillingApi\GetPlanOptions getPlanOptions(array $options = ['set_include_credit_card_information' => null, 'set_include_downgrade_information' => null, 'set_include_metadata' => null, 'set_include_successor_plans' => null])
 * @method Models\AccountBillingPlanResponse getPlan(Api\BillingApi\GetPlanOptions $options = null) Get Account Billing Plan
 * @method Models\BillingPlansResponse listBillingPlans() Gets the list of available billing plans
 * @method Api\BillingApi\ListInvoicesOptions listInvoicesOptions(array $options = ['set_from_date' => null, 'set_to_date' => null])
 * @method Models\BillingInvoicesResponse listInvoices(Api\BillingApi\ListInvoicesOptions $options = null) Get a List of Billing Invoices
 * @method Models\BillingInvoicesSummary listInvoicesPastDue() Get a list of past due invoices
 * @method Api\BillingApi\ListPaymentsOptions listPaymentsOptions(array $options = ['set_from_date' => null, 'set_to_date' => null])
 * @method Models\BillingPaymentsResponse listPayments(Api\BillingApi\ListPaymentsOptions $options = null) Gets payment information for one or more payments
 * @method Models\BillingPaymentResponse makePayment(Models\BillingPaymentRequest $billing_payment_request = null) Posts a payment to a past due invoice
 * @method mixed purchaseEnvelopes(Models\PurchasedEnvelopesInformation $purchased_envelopes_information = null) Reserverd
 * @method Models\DowngradePlanUpdateResponse updateDowngradeAccountBillingPlan(Models\DowngradeBillingPlanInformation $downgrade_billing_plan_information = null) Queues downgrade billing plan request for an account
 * @method Api\BillingApi\UpdatePlanOptions updatePlanOptions(array $options = ['set_preview_billing_plan' => null])
 * @method Models\BillingPlanUpdateResponse updatePlan(Models\BillingPlanInformation $billing_plan_information = null, Api\BillingApi\UpdatePlanOptions $options = null) Updates the account billing plan
 */
class Billing extends BaseApi
{
    protected $methodsWithAccountId = [
        'getCreditCardInfo',
        'getCreditCardInfoWithHttpInfo',
        'getDowngradeRequestBillingInfo',
        'getDowngradeRequestBillingInfoWithHttpInfo',
        'getInvoice',
        'getInvoiceWithHttpInfo',
        'getPayment',
        'getPaymentWithHttpInfo',
        'getPlan',
        'getPlanWithHttpInfo',
        'listInvoices',
        'listInvoicesWithHttpInfo',
        'listInvoicesPastDue',
        'listInvoicesPastDueWithHttpInfo',
        'listPayments',
        'listPaymentsWithHttpInfo',
        'makePayment',
        'makePaymentWithHttpInfo',
        'purchaseEnvelopes',
        'purchaseEnvelopesWithHttpInfo',
        'updateDowngradeAccountBillingPlan',
        'updateDowngradeAccountBillingPlanWithHttpInfo',
        'updatePlan',
        'updatePlanWithHttpInfo'
];
}