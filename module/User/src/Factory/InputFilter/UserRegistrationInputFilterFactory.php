<?php

namespace User\Factory\InputFilter;

use 
	User\InputFilter\UserRegistrationInputFilter,
	Interop\Container\ContainerInterface,
	Zend\ServiceManager\Factory\FactoryInterface,
	Zend\InputFilter\InputFilter,
	Zend\Debug\Debug;

class UserRegistrationInputFilterFactory
	implements FactoryInterface
{
	public function __invoke( 
		ContainerInterface $container,
		$requestedName,
		array $options = null 
	)
	{
		$dbAdapter = 
			$container->get( "user.db_adapter" );

		$userRegistrationInputFilter = 
			new UserRegistrationInputFilter( $dbAdapter );

		$userRegistrationInputFilter->setInputFilter( 
		 new InputFilter()
	 );

	 return $userRegistrationInputFilter;
	}
}
