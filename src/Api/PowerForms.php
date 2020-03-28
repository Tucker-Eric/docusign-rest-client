<?php

namespace DocuSign\Rest\Api;

/**
 * Class PowerForms
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\PowerFormsApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method \DocuSign\eSign\Model\PowerForm createPowerForm(\DocuSign\eSign\Model\PowerForm $power_form = null) Creates a new PowerForm
 * @method void deletePowerForm(string $power_form_id) Delete a PowerForm
 * @method \DocuSign\eSign\Model\PowerFormsResponse deletePowerForms(\DocuSign\eSign\Model\PowerFormsRequest $power_forms_request = null) Deletes one or more PowerForms
 * @method \DocuSign\eSign\Model\PowerForm getPowerForm(string $power_form_id) Returns a single PowerForm
 * @method \DocuSign\eSign\Model\PowerFormsFormDataResponse getPowerFormData(string $power_form_id = null) Returns the form data associated with the usage of a PowerForm
 * @method \DocuSign\eSign\Model\PowerFormSendersResponse listPowerFormSenders() Returns the list of PowerForms available to the user
 * @method \DocuSign\eSign\Model\PowerFormsResponse listPowerForms() Returns the list of PowerForms available to the user
 * @method \DocuSign\eSign\Model\PowerForm updatePowerForm(string $power_form_id = null) Creates a new PowerForm
 */
class PowerForms extends BaseApi
{

}