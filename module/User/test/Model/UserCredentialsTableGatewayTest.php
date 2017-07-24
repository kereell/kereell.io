<?php

namespace UserTest\Model;

use 
	UserTest\AbstractUserTest,
	Zend\Debug\Debug;

class UserCredentialsTableGatewayTest 
	extends AbstractUserTest
{
	public function setUp()
	{
		parent :: setUp();

		$this->userCredentialsTableGateway 
			= $this->appServiceLocator->get( 
				"user.credentials_tablegateway"
			);
	}

	private 
		$userCredentialsTableGateway;

	public function testUserCredentialsTableGTWFactory()
	{
		$this->assertInstanceOf( 
			\User\Model\TableGateway\UserCredentialsTableGateway :: class,
			$this->userCredentialsTableGateway 
		);
	}

	public function testDataUserCredentialsArray()
	{
		$this->assertInternalType( 
			"array",
			$this->testDataUserCredentials
		);
	}

	public function testSaveUserCredentials()
	{
		$this->testDataUserCredentials[ "email" ] = 
			"daffaafd@gmail.com";

		$this->userCredentialsTableGateway
			->getEntity()
			->exchangeArray( 
				$this->testDataUserCredentials
			);

		$this->assertTrue( 
			( bool ) 
			$this->userCredentialsTableGateway->saveUser() 
		);
	}

	public function testUpdateUserCredentials()
	{
		$this->assertTrue( true );
	}

	public function testDeleteUserCredentials()
	{
		$this->assertTrue( 
			( bool ) 
			$this->userCredentialsTableGateway->deleteUser( 
				26 
			)
		);
	}

}
