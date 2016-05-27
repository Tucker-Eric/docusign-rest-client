<?php

class LoginTest extends PHPUnit_Framework_TestCase
{
	public function testLogin()
	{
		$docusign = new \DocuSign\Rest\Client([
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