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

		$this->setAttributes( [ 
			"id" => "login-form", 
			"role" => "form",
			"style" => "display: block",
		] );

		$this
			->add( [ 
				"name" => "id",
				"type" => "hidden",
			] )
			->add( [ 
				"name" => "email",
				"type" => "email",
				"attributes" => [
					"class" => "form-control",
					"placeholder" => "Email",
				],
				"options" => []
			] )
			->add( [ 
				"name" => "passwd",
				"type" => "password",
				"attributes" => [
					"class" => "form-control",
					"placeholder" => "Password",
				],
				"options" => [],
			] )
			->add( [ 
				"name" => "passwdConfirm",
				"type" => "password",
				"attributes" => [
					"class" => "form-control",
					"placeholder" => "Repeat Password",
				],
				"options" => [],
			] )
			->add( [ 
				"name" => "captcha",
			] )
			->add( [ 
				"name" => "submitButton",
				"type" => "submit",
				"attributes" => [
					"class" => "form-control btn btn-login",
					"value" => "Add User",
				],
				"options" => [],
			] );
	}
}
