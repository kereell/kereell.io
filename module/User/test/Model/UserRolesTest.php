<?php

namespace UserTest\Model;

use 
	Zend\Debug\Debug,
	Zend\Stdlib\ArrayUtils,
	User\Model\Entity\UserRoles,
	Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class UserRolesTest extends AbstractHttpControllerTestCase
{
	public function setUp()
	{
		$configOverrides = []; 

		$this->setApplicationConfig( 
			ArrayUtils :: merge( 
				include __DIR__ . '/../../../../config/application.config.php',
				$configOverrides
			)
		);

		$this->userRolesEntity = 
			new UserRoles;

		parent :: setUp();
	}

	private 
		$userRolesEntity = null;

	public function testExchangeArrGetArrCopy()
	{
		$testArr = [
		];

		$entity = 
			$this->userRolesEntity;

		$entity->exchangeArray( $testArr );
		$res = 
			$entity->getArrayCopy();

		$this->assertInstanceOf( 
			UserRoles :: class,
			$entity
		);

		$this->assertInternalType( 
			"array",
			$res
		);
	}			

}   
 
