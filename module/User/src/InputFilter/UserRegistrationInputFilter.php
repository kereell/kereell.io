<?php

namespace User\InputFilter;

use 
	Zend\Filter,
	Zend\Validator,
	Zend\InputFilter,
	Zend\Db\Adapter\AdapterInterface as DbAdapterInterface,
	Zend\Debug\Debug;

class UserRegistrationInputFilter 
	implements InputFilter\InputFilterAwareInterface
{
	public function __construct( 
		DbAdapterInterface $userDbAdapter 
	)
	{
		$this->userDbAdapter = $userDbAdapter;
	}

	private 
		$inputFilter,
		$userDbAdapter;

	public function getInputFilter()
	{
		$this->inputFilter
			->add( [ 
				"name" => "id",
				"required" => true,
				"filters" => [
					[ 
						"name" => Filter\ToInt :: class,
					],
				],
				"validators" => []
			] )

			->add( [ 
				"name" => "email",
				"required" => true,
				"filters" => [
					[
						"name" => Filter\StringTrim :: class,
					],
					[
						"name" => Filter\StripTags :: class,
					],
					[
						"name" => Filter\StripNewlines :: class,
					],
				],
				"validators" => [
					[
						"name" => Validator\EmailAddress :: class,
					],
				]
			] )

			->add( [ 
				"name" => "passwd",
				"required" => true,
				"filters" => [
				],
				"validators" => []
			] )

			->add( [ 
				"name" => "passwdConfirm",
				"required" => true,
				"filters" => [],
				"validators" => [
					[
						"name" => Validator\Identical :: class,
						"options" => [
							"token" => "passwd",
						],
					],
				]
			] );
		 
		return $this->inputFilter;
	}

	public function setInputFilter( InputFilter\InputFilterInterface $inputFilter )
	{
		$this->inputFilter = $inputFilter;
		return $this;
	}
}
