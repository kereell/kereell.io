<?php 

namespace User\Factory\Form;

use 
	Zend\Form\Element\Captcha,
	User\Form\UserRegistrationForm,
	Interop\Container\ContainerInterface,
	Zend\ServiceManager\Factory\FactoryInterface,
	Zend\Debug\Debug;

class UserRegistrationFormFactory 
	implements FactoryInterface
{
	public function __invoke( 
		ContainerInterface $container,
		$requestedName,
		array $options = null
	)
	{
		$recaptcha = $container->get( "user.captcha" );

		$captcha = new Captcha();
		$captcha->setCaptcha( $recaptcha );

		$userRegistrationForm = 
			new UserRegistrationForm( 
				"userRegistrationForm",
				$captcha 
			);

		$userRegistrationInputFilter = 
			$container->get( "user.registration_input_filter" );
		$filter = $userRegistrationInputFilter
			->getInputFilter();
		
		$userRegistrationForm
			->setInputFilter( $filter );

		return $userRegistrationForm;
	}
}
