<?php

namespace User\Factory\Controller;

use 
	Zend\Form\Element\Captcha,
	User\Controller\UserController,
	Interop\Container\ContainerInterface,
	Zend\ServiceManager\Factory\FactoryInterface,
	Zend\Debug\Debug;

class UserControllerFactory implements FactoryInterface
{
	public function __invoke( 
		ContainerInterface $container,
		$requestedName,
		array $options = null
	)
	{
		$userRegistrationForm = 
			$container->get( "user.registration_form" );

		$userCredentialsTableGateway = 
			$container->get( "user.credentials_tablegateway" );

		return new UserController( 
			$userCredentialsTableGateway,
			$userRegistrationForm
		);
	}
}
