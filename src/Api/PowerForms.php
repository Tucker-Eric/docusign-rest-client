<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class PowerForms
 * @method Api\PowerFormsApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method Models\PowerForm createPowerForm(Models\PowerForm $power_form = null) Creates a new PowerForm
 * @method mixed deletePowerForm(?string $power_form_id) Delete a PowerForm
 * @method Models\PowerFormsResponse deletePowerForms(Models\PowerFormsRequest $power_forms_request = null) Deletes one or more PowerForms
 * @method Models\PowerForm getPowerForm(?string $power_form_id) Returns a single PowerForm
 * @method Api\PowerFormsApi\GetPowerFormDataOptions getPowerFormDataOptions(array $options = ['set_data_layout' => null, 'set_from_date' => null, 'set_to_date' => null])
 * @method Models\PowerFormsFormDataResponse getPowerFormData(?string $power_form_id, Api\PowerFormsApi\GetPowerFormDataOptions $options = null) Returns the form data associated with the usage of a PowerForm
 * @method Api\PowerFormsApi\ListPowerFormSendersOptions listPowerFormSendersOptions(array $options = ['set_start_position' => null])
 * @method Models\PowerFormSendersResponse listPowerFormSenders(Api\PowerFormsApi\ListPowerFormSendersOptions $options = null) Returns the list of PowerForms available to the user
 * @method Api\PowerFormsApi\ListPowerFormsOptions listPowerFormsOptions(array $options = ['set_from_date' => null, 'set_order' => null, 'set_order_by' => null, 'set_search_fields' => null, 'set_search_text' => null, 'set_to_date' => null])
 * @method Models\PowerFormsResponse listPowerForms(Api\PowerFormsApi\ListPowerFormsOptions $options = null) Returns the list of PowerForms available to the user
 * @method Models\PowerForm updatePowerForm(?string $power_form_id, Models\PowerForm $power_form = null) Creates a new PowerForm
 */
class PowerForms extends BaseApi
{
    protected $methodsWithAccountId = [
        'createPowerForm',
        'createPowerFormWithHttpInfo',
        'deletePowerForm',
        'deletePowerFormWithHttpInfo',
        'deletePowerForms',
        'deletePowerFormsWithHttpInfo',
        'getPowerForm',
        'getPowerFormWithHttpInfo',
        'getPowerFormData',
        'getPowerFormDataWithHttpInfo',
        'listPowerFormSenders',
        'listPowerFormSendersWithHttpInfo',
        'listPowerForms',
        'listPowerFormsWithHttpInfo',
        'updatePowerForm',
        'updatePowerFormWithHttpInfo'
];
}