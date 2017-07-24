<?php

namespace UserTest\Controller;

use 
	User\Controller\UserController,
	Zend\Stdlib\Parameters,
	Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase,
	Zend\Stdlib\ArrayUtils,
	Zend\Debug\Debug;

class UserControllerTest extends AbstractHttpControllerTestCase
{
	public function setUp()
	{
		$this->setApplicationConfig( 
			ArrayUtils :: merge( 
				include __DIR__ . "/../../../../config/application.config.php",
				include __DIR__ . "/../../config/module.config.php"
			) 
		);

     $this->appServiceLocator = 
			$this->getApplicationServiceLocator();

		 $this->userController = 
			 new UserController( 
				 null,
				 null,
				 null
			 );
		/*
			$this->appServiceLocator->get( 
				"user.controller"
			);
		 */
		parent :: setUp();

	}

	private 
		$userController,
		$appServiceLocator,
		$configOverrides = [ ];

	public function testUserControllerFactory()
	{
  	
		$this->assertInstanceOf( 
			UserController :: class,
			$this->userController
		);
	}

	/*
	public function testAddActionOfUserController()
	{
		$request = 
			$this->getRequest(); 
		
	}
	 */
}

