<?php

namespace UserTest\Form;

use 
	Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase,
	User\Form\UserRegistrationForm,
	Zend\Stdlib\Parameters,
	Zend\Debug\Debug;

class UserRegistrationFormTest 
	extends AbstractHttpControllerTestCase
{
	public function setUp()
	{
		$this->parameters = new Parameters( [ 
			"email" => "kereell@gmail.com",
			"passwd" => "test_passwd",
			"passwdConfirm" => "wrong_passwd",
		] ); 	
		 
		parent :: setUp();
	}

	public function testUserRegistrationForm()
	{
		$form = new UserRegistrationForm( null, null );

		$form->setData( 
			$this->parameters
		);

		try{ 

			$this->assertTrue( $form->isValid(), "\nFORM VALIDATION:" );

		} catch( \Exception $e ) {

			Debug :: dump( $form->getMessages(), "FORM ERRORS: " );

		}

		
	}
}
