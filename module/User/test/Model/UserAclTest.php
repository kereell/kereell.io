<?php

namespace UserTest\Model;

use 
	Zend\Debug\Debug,
	Zend\Stdlib\ArrayUtils,
	User\Model\Entity\UserAcl,
	Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class UserAclTest extends AbstractHttpControllerTestCase
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

		$this->userAclEntity = 
			new UserAcl;

		parent :: setUp();
	}

	private 
		$userAclEntity = null;

	public function testExchangeArrGetArrCopy()
	{
		$testArr = [
		];

		$entity = 
			$this->userAclEntity;

		$entity->exchangeArray( $testArr );
		$res = 
			$entity->getArrayCopy();

		$this->assertInstanceOf( 
			UserAcl :: class,
			$entity
		);

		$this->assertInternalType( 
			"array",
			$res
		);
	}			

}   
 
