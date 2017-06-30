<?php

namespace User\InputFilter;

use 
	Zend\Filter\ToInt,
	Zend\InputFilter\InputFilterAwareInterface,
	Zend\InputFilter\InputFilterInterface,
	Zend\Db\Adapter\AdapterInterface as DbAdapterInterface,
	Zend\Debug\Debug;

class UserRegistrationInputFilter 
	implements InputFilterAwareInterface
{
	public function __construct( DbAdapterInterface $userDbAdapter )
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
						"name" => ToInt :: class,
					],
				],
				"validators" => []
			] )
			->add( [ 
				"name" => "email",
				"required" => true,
				"filters" => [],
				"validators" => []
			] )
			->add( [ 
				"name" => "passwd",
				"required" => true,
				"filters" => [],
				"validators" => []
			] )
			->add( [ 
				"name" => "passwdConfirm",
				"required" => true,
				"filters" => [],
				"validators" => []
			] )
			->add( [ 
				"name" => "captcha",
				"required" => false,
			] );

		return $this->inputFilter;
	}

	public function setInputFilter( InputFilterInterface $inputFilter )
	{
		$this->inputFilter = $inputFilter;
		return $this;
	}
}
