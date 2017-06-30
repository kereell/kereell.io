<?php

namespace User\Form;

use 
	Zend\Form\Form,
	Zend\Debug\Debug;

class UserRegistrationForm extends Form
{

	public function __construct( $name, $captcha )
	{
		parent :: __construct( $name );

		$this
			->add( [ 
				"name" => "id",
				"type" => "hidden",
			] )
			->add( [ 
				"name" => "email",
				"type" => "email",
				"attributes" => [
					"placeholder" => "Email",
				],
				"options" => []
			] )
			->add( [ 
				"name" => "passwd",
				"type" => "password",
				"attributes" => [
					"placeholder" => "Password",
				],
				"options" => [],
			] )
			->add( [ 
				"name" => "passwdConfirm",
				"type" => "password",
				"attributes" => [
					"placeholder" => "Repeat Password",
				],
				"options" => [],
			] )
//			->add( [ 
//				"name" => "captcha",
//				"object" => $captcha,
//			] )
			->add( [ 
				"name" => "submitButton",
				"type" => "submit",
				"attributes" => [
					"value" => "Add User",
				],
				"options" => [],
			] );
	}
}
