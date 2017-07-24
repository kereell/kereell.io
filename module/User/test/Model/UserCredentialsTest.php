<?php

namespace UserTest\Model;

use 
	Zend\Debug\Debug,
	Zend\Stdlib\ArrayUtils,
	User\Model\Entity\UserCredentials,
	Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class UserCredentialsTest extends AbstractHttpControllerTestCase
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

		$this->userCredentialsEntity = 
			new UserCredentials;

		parent :: setUp();
	}

	private 
		$userCredentialsEntity = null;

	public function testExchangeArrGetArrCopy()
	{
		$testArr = [
			"email" => "kereell@gmail.com",
			"passwd" => "some_passwd",
		];
		$entity = 
			$this->userCredentialsEntity;

		$entity->exchangeArray( $testArr );
		$res = 
			$entity->getArrayCopy();

		$this->assertInstanceOf( 
			UserCredentials :: class,
			$entity
		);

		$this->assertInternalType( 
			"array",
			$res
		);
	}			

}   

