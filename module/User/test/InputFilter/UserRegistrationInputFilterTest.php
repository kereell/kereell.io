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

		$this->inputFilter->setData( [ 
			"id" => 1,
			"email" => "kereell@kereell.com",
			"passwd" => "kereell",
			"passwdConfirm" => "kereell",
		] );
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

	public function testIdUserRegistrationInputFilter()
	{
		$this->assertTrue( 
			$this->inputFilter->has( 
				"id" 
			)
		);

		Debug :: dump( 
			$this->inputFilter->getValue( 
				"id"
			), "The Id value of input filter"
		);
	}

	public function testEmailUserRegistrationInputFilter()
	{
		$this->assertTrue( 
			$this->inputFilter->has( 
				"email"
			),
			"Testing if input filter has email field: "
		);

		Debug :: dump( 
			$this->inputFilter->getValue( 
				"email"
			), "The Email value of input Filter"
		);
	}

	public function testPasswdUserRegistrationInputFilter()
	{
		$this->assertTrue( 
			$this->inputFilter->has( 
				"passwd"
			), 
			"Testing if input filter has a passwd field: " 
		);

		Debug :: dump( 
			$this->inputFilter->getValue( 
				"passwd"
			), "The Password value of Input Filter"
		);

	}

	public function testPasswdConfirmUserRegistrationInputFilter()
	{
		$this->assertTrue( 
			$this->inputFilter->has( 
				"passwdConfirm"
			), "Test if input filter has a passwdConfirm field: "
		);

		Debug :: dump( 
			$this->inputFilter->getValue( 
				"passwdConfirm" 
			), "The ConfirmPasswd value of Input Filter"
		);
	}
	
	public function testValidationOfInputFilter()
	{
		$this->assertTrue( 
			$this->inputFilter->isValid(),
			Debug :: dump(
				$this->inputFilter->getMessages()
			)
		);

		/*
		Debug :: dump( 
			$this->inputFilter->getMessages()
		);
		 */
	}

}
