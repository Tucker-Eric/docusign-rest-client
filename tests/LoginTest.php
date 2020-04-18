<?php

namespace Docusign\Rest\Tests;

use DocuSign\Rest\Client;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
	public function testLogin()
	{
		$docusign = new Client([
			'username' 		 => USERNAME,
			'password' 		 => PASSWORD,
			'integrator_key' => INTEGRATOR_KEY,
			'host' 			 => HOST
		]);

		$docusign->authenticate();

		$this->assertEquals(true, $docusign->isAuthenticated());

		$this->assertStringMatchesFormat('%d', $docusign->getAccountId());
	}
}
