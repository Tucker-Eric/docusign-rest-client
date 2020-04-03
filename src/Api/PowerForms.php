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
 * @method \DocuSign\eSign\Api\PowerFormsApi\GetPowerFormDataOptions getPowerFormDataOptions(array $options = ['set_data_layout' => null, 'set_from_date' => null, 'set_to_date' => null])
 * @method \DocuSign\eSign\Model\PowerFormsFormDataResponse getPowerFormData(string $power_form_id, \DocuSign\eSign\Api\PowerFormsApi\GetPowerFormDataOptions $options = null) Returns the form data associated with the usage of a PowerForm
 * @method \DocuSign\eSign\Api\PowerFormsApi\ListPowerFormSendersOptions listPowerFormSendersOptions(array $options = ['set_start_position' => null])
 * @method \DocuSign\eSign\Model\PowerFormSendersResponse listPowerFormSenders(\DocuSign\eSign\Api\PowerFormsApi\ListPowerFormSendersOptions $options = null) Returns the list of PowerForms available to the user
 * @method \DocuSign\eSign\Api\PowerFormsApi\ListPowerFormsOptions listPowerFormsOptions(array $options = ['set_from_date' => null, 'set_order' => null, 'set_order_by' => null, 'set_to_date' => null])
 * @method \DocuSign\eSign\Model\PowerFormsResponse listPowerForms(\DocuSign\eSign\Api\PowerFormsApi\ListPowerFormsOptions $options = null) Returns the list of PowerForms available to the user
 * @method \DocuSign\eSign\Model\PowerForm updatePowerForm(string $power_form_id, \DocuSign\eSign\Model\PowerForm $power_form = null) Creates a new PowerForm
 */
class PowerForms extends BaseApi
{

}