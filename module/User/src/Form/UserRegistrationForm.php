<?php

namespace User\Form;

use 
	Zend\Form\Form,
	Zend\Form\Element as FormElement,
	Zend\Debug\Debug;

class UserRegistrationForm extends Form
{
	private 
		$captcha;

	public function __construct( 
		$captcha 
	)
	{  
		$this->captcha = 
			$captcha;
     
		parent :: __construct( "userRegistrationForm" );

		$this->setAttributes( [ 
			"class" => "form-signin",
		] );

		$this
			->add( [ 
				"name" => "id",
				"type" => FormElement\Hidden :: class,
			] )
			->add( [ 
				"name" => "email",
				"type" => FormElement\Email :: class,
				"attributes" => [
					"class" => "form-control",
					"placeholder" => "Email Address",
					"autofocus" => true,
				],
				"options" => []
			] )
			->add( [ 
				"name" => "passwd",
				"type" => FormElement\Password :: class,
				"attributes" => [
					"class" => "form-control",
					"placeholder" => "Password",
				],
				"options" => [],
			] )
			->add( [ 
				"name" => "passwd_confirm",
				"type" => FormElement\Password :: class,
				"attributes" => [
					"class" => "form-control",
					"placeholder" => "Repeat Password",
				],
				"options" => [],
			] )
			->add( [ 
				"name" => "re_captcha",
				"type" => FormElement\Captcha :: class,
				"options" => [
					"captcha" => $this->captcha,
				],
			] )
			->add( [ 
				"name" => "remember_me",
				"type" => FormElement\Checkbox :: class,
				"options" => [
					"label" => "Remember Me",
					"use_hidden_element" => false,
				],
				"attributes" => [
				],
			] )
			->add( [ 
				"name" => "csrf_security",
				"type" => Formelement\Csrf :: class,
			] )
			->add( [ 
				"name" => "submit_button",
				"type" => FormElement\Submit :: class,
				"attributes" => [
					"class" => "btn btn-lg btn-primary  btn-block",
					"value" => "Add User",
				],
				"options" => [],
			] );
	}
}
