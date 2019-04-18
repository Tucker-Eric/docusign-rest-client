# Docusign Rest Client
Wrapper for the official [Docusign PHP Client Library](https://github.com/docusign/docusign-php-client).

This library handles all the object instantiation for the endpoints in the [DocuSign Api Explorer](http://iodocs.docusign.com/).

### Install Through Composer

```bash
composer require tucker-eric/docusign-rest-client
```



# Usage

The `DocuSign\Rest\Client` accesses all models and api endpoints and returns the respective obect.  It also handles all authentication as well as passing the `$account_id` to any method that requires it.

### Api Endpoints

All classes in the [`DocuSign\eSign\Api`](https://github.com/docusign/docusign-php-client/tree/master/src/Api) namesapace are accessible as **properties** of `DocuSign\Rest\Client`.

Each property is a the orignal class name camel cased without the `Api` suffix.

Example:

```php
<?php

require 'vendor/autoload.php';

$client = new DocuSign\Rest\Client([
	'username'       => $username,
	'password'       => $password,
	'integrator_key' => $integrator_key,
	'host'           => $host
]);

$client->accounts // Returns DocuSign\eSign\Api\AccountsApi

$client->customTabs // Returns DocuSign\eSign\Api\CustomTabsApi

$client->folders // Returns DocuSign\eSign\Api\FoldersApi

```
The client handles injecting the `$account_id` to any method that requires it.

So calling a method like the [`DocuSign\eSign\Api\FoldersApi` `list()`](https://github.com/docusign/docusign-php-client/blob/master/src/Api/FoldersApi.php#L638) method is as easy as:

```php
$client->folders->list();  // Returns \DocuSign\eSign\Model\FoldersResponse
```

### Models

All classes in the [`DocuSign\eSign\Model`](https://github.com/docusign/docusign-php-client/tree/master/src/Model) namespace are accessible as a camel cased **method** of `DocuSign\Rest\Client` and accept an array of snake cased parameters that will be set on the model.  Calling the method returns that model object.

Example:

```php
<?php

require 'vendor/autoload.php';

$client = new DocuSign\Rest\Client([
	'username'       => $username,
	'password'       => $password,
	'integrator_key' => $integrator_key,
	'host'           => $host
]);

$templateRole = $client->templateRole([
	'email' 	=> '[SIGNER_EMAIL]',
	'name'  	=> '[SIGNER_NAME]',
	'role_name' => '[ROLE_NAME]'
]); // Returns DocuSign\eSign\Model\TemplateRole

$templateRole->getRoleName() // returns '[ROLE_NAME]' as set in the above method.

$envelopeDefinition = $client->envelopeDefinition([
	'status'         => 'sent'
	'email_subject'  => '[DocuSign PHP SDK] - Signature Request Sample',
	'template_id'    => '[TEMPLATE_ID]',
	'template_roles' => [
		$templateRole
	],
]); // Returns DocuSign\eSign\Model\EnvelopeDefinition

```
### Api Options

Some classes in the `DocuSign\eSign\Api` namespace have options objects that can be created and passed to methods of that class.  Those objects are accessible by calling it as a method from that Api class.  The options methods accept an array of snake cased parameters to set.  You can also call this method without any parameters and it will return the options object and you can use that object's setter methods to set its properties

The `->search()` method in the `DocuSign\eSign\Api\FoldersApi` class accepts [`DocuSign\eSign\Api\FoldersApi\SearchOptions`](https://github.com/docusign/docusign-php-client/blob/master/src/Api/FoldersApi.php#L37) to set the options.  These options are set as in the example below

Example:

```php

$foldersApi = $this->client->folders;
$searchOptions = $foldersApi->searchOptions([
	'count'     => 20,
	'order_by'  => 'sent',
	'from_date' => '2010-01-01'
]);
$foldersApi->search($searchOptions);

```
You can retrieve any previously set options on an Api class with the `getOptions` method.  Passing the name of the method used to set the options returns that options object or not passing any parameters will return an array of all options objects for that Api class keyed by method name.

Example:

```php
$envelopesApi = $this->client->envelopes;
$envelopesApi->createEnvelopeOptions([
	'merge_roles_on_draft' => 'true'
]);
$envelopesApi->updateOptions([
	'resend_envelope' => 'true'
]);

$envelopesApi->getOptions(); // returns ['updateOptions' => DocuSign\eSign\Api\EnvelopesApi\UpdateOptions, 'createEnvelopeOptions' => DocuSign\eSign\Api\EnvelopesApi\CreateEnvelopeOptions]

$envelopesApi->getOptions('updateOptions') // returns DocuSign\eSign\Api\EnvelopesApi\UpdateOptions

```

# Examples

To login and send a signature request from a template:

> This will produce the same result as [this example](https://github.com/Tucker-Eric/docusign-rest-client/blob/master/docusign-template-example.md) from official Docusign Client

```php
<?php

require 'vendor/autoload.php';

class DocuSignSample
{
	public function signatureRequestFromTemplate()
	{
		$username = "[EMAIL]";
        $password = "[PASSWORD]";
        $integrator_key = "[INTEGRATOR_KEY]";

		// change to production before going live
        $host = "https://demo.docusign.net/restapi";

		// Once instantiated, authentication is handled automatically
        $client = new DocuSign\Rest\Client([
			'username'       => $username,
			'password'       => $password,
			'integrator_key' => $integrator_key,
			'host'           => $host
        ]);

    	$templateRole = $client->templateRole([
			'email' 	=> '[SIGNER_EMAIL]',
			'name'  	=> '[SIGNER_NAME]',
			'role_name' => '[ROLE_NAME]'
    	]);

    	$envelopeDefinition = $client->envelopeDefinition([
    		'status'         => 'sent',
    		'email_subject'  => '[DocuSign PHP SDK] - Signature Request Sample',
    		'template_id'    => '[TEMPLATE_ID]',
    		'template_roles' => [
    			$templateRole
    		],
    	]);
		
    	$envelopeOptions = $client->envelopes->createEnvelopeOptions([			
			'merge_roles_on_draft' => false
    	]);
		
    	$envelopeSummary = $client->envelopes->createEnvelope($envelopeDefinition, $envelopeOptions);
	}
}
```

That same example refactored in it's own class:

```php
<?php

require 'vendor/autoload.php';

class DocuSignSample
{
	
	protected $username = "[EMAIL]";
    protected $password = "[PASSWORD]";
    protected $integrator_key = "[INTEGRATOR_KEY]";

	// change to production before going live
    protected $host = "https://demo.docusign.net/restapi";

	protected $client;

	public function __construct()
	{
		// Once instantiated, authentication is handled automatically
        $this->client = new DocuSign\Rest\Client([
			'username'       => $this->username,
			'password'       => $this->password,
			'integrator_key' => $this->integrator_key,
			'host'           => $this->host
        ]);
	}
	
	/**     
     * @return DocuSign\eSign\Model\EnvelopeSummary
     */
	public function signatureRequestFromTemplate()
	{
    	return $this->client->envelopes->createEnvelope($this->client->envelopeDefinition([
	    		'status'         => 'sent',
	    		'email_subject'  => '[DocuSign PHP SDK] - Signature Request Sample',
	    		'template_id'    => '[TEMPLATE_ID]',
	    		'template_roles' => [
	    			$this->client->templateRole([
						'email' 	=> '[SIGNER_EMAIL]',
						'name'  	=> '[SIGNER_NAME]',
						'role_name' => '[ROLE_NAME]'
			    	])
	    		]
	    	])
    	);
	}
}
```
