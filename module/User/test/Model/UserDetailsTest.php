<?php

namespace UserTest\Model;

use 
	Zend\Debug\Debug,
	Zend\Stdlib\ArrayUtils,
	User\Model\Entity\UserDetails,
	Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class UserDetailsTest extends AbstractHttpControllerTestCase
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

		$this->userDetailsEntity = 
			new UserDetails;

		parent :: setUp();
	}

	private 
		$userDetailsEntity = null;

	public function testExchangeArrGetArrCopy()
	{
		$testArr = [
		];

		$entity = 
			$this->userDetailsEntity;

		$entity->exchangeArray( $testArr );
		$res = 
			$entity->getArrayCopy();

		$this->assertInstanceOf( 
			UserDetails :: class,
			$entity
		);

		$this->assertInternalType( 
			"array",
			$res
		);

//		Debug :: dump( $res, "Data: " );
	}			

}   
 
