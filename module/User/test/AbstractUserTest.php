<?php

namespace UserTest;

use 
	User\Module as UserModule,
	Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase,
	Zend\Stdlib\ArrayUtils,
	Zend\Stdlib\Parameters,
	Zend\Debug\Debug;

class AbstractUserTest 
	extends AbstractHttpControllerTestCase
{
	public function setUp()
	{
		$this->setApplicationConfig( 
			ArrayUtils :: merge( 
				include __DIR__ . "/../../../config/application.config.php",
				include __DIR__ . "/../config/module.config.php"
			)
		);

		$this->appServiceLocator = 
			$this->getApplicationServiceLocator();

		$this->testDataUserCredentials = [ 
			"email" => "test@test.test",
			"passwd" => "some_passwd",
		];

		parent :: setUp();
	}

	protected 

		$testDataUserCredentials = [],
		$testDataUserAcl = [],
		$testDataUserDetails = [],
		$testDataUserRoles = [],

		$appServiceLocator;

	public function testAbstractTest()
	{
		$this->assertInstanceOf(
			AbstractHttpControllerTestCase :: class,
			$this
		);

		$this->assertInstanceOf( 
			self :: class,
			$this
		);
	}

	public function testConfigArray()
	{
		$this->assertInternalType( 
			"array",
			$this->getApplicationConfig()
		);
	}

	public function testServiceLocator()
	{
		$this->assertInstanceOf( 
			\Zend\ServiceManager\ServiceLocatorInterface :: class,
			$this->appServiceLocator 
		);

		$this->assertInstanceOf( 
			\Zend\ServiceManager\ServiceManager :: class,
			$this->appServiceLocator
		);
	}

}
