# Docusign Rest Client
Wrapper for the official [Docusign PHP Client Library](https://github.com/docusign/docusign-php-client)


# Usage

The `DocuSign\Rest\Client` accesses all models and api endpoints and returns the respective obect.

All `DocuSign\eSign\Api` classes are accessible as properties of `DocuSign\Rest\Client`.

Example:
```php
<?php

$client = new DocuSign\Rest\Client([
	'username'       => $username,
	'password'       => $password,
	'integrator_key' => $integrator_key,
	'host'           => $host
]);

$client->accounts
// Returns DocuSign\eSign\Api\AccountsApi

$client->customTabs
// Returns DocuSign\eSign\Api\CustomTabsApi

$client->folders
// Returns DocuSign\eSign\Api\FoldersApi

```

All `DocuSign\eSign\Model` classes are accessible as methods of `DocuSign\Rest\Client` and accept an array of snake cased parameters that will be set on the model.

Example:
```php
<?php

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
    		'status'         => 'sent'
    		'email_subject'  => '[DocuSign PHP SDK] - Signature Request Sample',
    		'template_id'    => '[TEMPLATE_ID]',
    		'template_roles' => [
    			$templateRole
    		],
    	]);

		// Even though this is pointless because all options are instantiated as null
		// But it was in Docusign's example so I included it here
    	$envelopeOptions = $client->envelopes->createEnvelopeOptions([
			'cdse_mode'            => null,
			'merge_roles_on_draft' => null
    	]);
		
		// All methods requiring an acount_id are automatically handled by the client
		// This means we DO NOT pass the account id as the first parameter.
		// The other parameters stay  the same for the DocuSign methods
    	$envelopeSummary = $client->envelopes->createEnvelope($envelopeDefinition, $envelopeOptions);
	}
}
```

That same example refactored could be:

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
     * Sets the given options object and stores it
     *
     * @return DocuSign\eSign\Model\EnvelopeSummary
     */
	public function signatureRequestFromTemplate()
	{
		// All methods requiring an acount_id are automatically handled by the client
		// This means we DO NOT pass the account id as the first parameter.
		// The other parameters stay the same for the DocuSign methods
    	return $docusign->envelopes->createEnvelope($this->client->envelopeDefinition([
	    		'status'         => 'sent'
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