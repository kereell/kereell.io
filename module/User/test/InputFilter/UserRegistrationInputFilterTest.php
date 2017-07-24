<?php 

namespace UserTest\InputFilter;

use 
	Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase,
	User\InputFilter\UserRegistrationInputFilter,
	UserTest\AbstractUserTest,
	Zend\Stdlib\ArrayUtils,
	Zend\Stdlib\Parameters,
	Zend\Debug\Debug;

class UserRegistrationInputFilterTest 
	extends AbstractUserTest
{
	public function setUp()
	{
		parent :: setUp();

		$this->userRegistrationInputFilter = 
			$this->appServiceLocator->get( 
				"user.registration_input_filter"
			);
		$this->inputFilter = 
			$this->userRegistrationInputFilter->getInputFilter();
	}

	private 
		$inputFilter,
		$userRegistrationInputFilter;

	public function testUserRegistrationInputFilter()
	{
		$this->assertInstanceOf( 
			\Zend\InputFilter\InputFilterAwareInterface :: class,
			$this->userRegistrationInputFilter
		);

		$this->assertInstanceOf( 
			\User\InputFilter\UserRegistrationInputFilter :: class,
			$this->userRegistrationInputFilter
		);
	}

	public function testIdFieldOfUserRegistrationInputFilter()
	{
		$this->assertTrue( 
			$this->inputFilter->has( 
				"id" 
			)
		);
	}
}
