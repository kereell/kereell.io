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

		$this->tbGtw = $this->appServiceLocator->get( 
			"user.credentials_tablegateway"
		);

		$this->userCredentialsEntity = 
			$this->appServiceLocator->get( 
				"user.credentials_entity"
			);
	}

	private 
		$userCredentialsEntity,
		$tbGtw;

	public function testUserCredentialsTableGTWFactory()
	{
		$this->assertInstanceOf( 
			\User\Model\TableGateway\UserCredentialsTableGateway :: class,
			$this->tbGtw 
		);
	}

	public function testUserCredentialsEntityFactory()
	{
		$this->assertInstanceOf( 
			\User\Model\Entity\UserCredentials :: class,
			$this->userCredentialsEntity
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
			"jfkdlafjkdsl@gmail.com";

		$this->userCredentialsEntity->exchangeArray( 
			$this->testDataUserCredentials
		);

		$this->assertTrue( 
			( bool ) $this->tbGtw->saveUser( 
				$this->userCredentialsEntity
			)
		);
	}

	public function testUpdateUserCredentials()
	{
		$this->assertTrue( true );
	}

	public function testDeleteUserCredentials()
	{
		$this->assertTrue( 
			( bool ) $this->tbGtw->deleteUser( 9 )
		);
	}

}
