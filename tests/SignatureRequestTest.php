<?php

use PHPUnit\Framework\TestCase;

class SignatureRequestTest extends TestCase
{
	public function testSignatureRequest()
	{
		$docusign = new \DocuSign\Rest\Client([
			'username' 		 => USERNAME,
			'password' 		 => PASSWORD,
			'integrator_key' => INTEGRATOR_KEY,
			'host' 			 => HOST
		]);

		$envelopeDefinition = $docusign->envelopeDefinition([
			'status'        => 'sent',
			'email_subject' => 'DocuSign Rest Client - Sign this doc',
			'email_blurb'   => 'Please Sign My Test Document',
			'recipients'    => $docusign->recipients([
				'signers' => [
					$docusign->signer([
						'email' 	   => TEST_EMAIL,
						'name'  	   => TEST_RECIPIENT,
						'recipient_id' => 1,
						'tabs'         => [
							'sign_here_tabs' => [
								$docusign->signHere([
									'x_position'   => '100',
									'y_position'   => '100',
									'document_id'  => '1',
									'page_number'  => '1',
									'recipient_id' => '1'
								])
							]
						]
					])
				]
			]),
			'documents'     => [
				$docusign->document([
					'document_base64' => base64_encode(file_get_contents(DOCUMENT_FILE_NAME)),
					'name'            => DOCUMENT_NAME,
					'document_id'     => 1
				])
			]
		]);

		$envelopeSummary = $docusign->envelopes->createEnvelope($envelopeDefinition);

		$this->assertInstanceOf(\DocuSign\eSign\Model\EnvelopeSummary::class, $envelopeSummary);
	}
}
