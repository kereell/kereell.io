<?php

namespace User\Factory\Form;

use 
	Interop\Container\ContainerInterface,
	Zend\ServiceManager\Factory\FactoryInterface,
	Zend\Captcha\ReCaptcha,
	Zend\Debug\Debug;

class UserRegistrationCaptchaFactory 
	implements FactoryInterface
{
	public function __invoke( 
		ContainerInterface $container,
		$requestedName,
		array $options = null
	)
	{
		$captcha = new ReCaptcha();
		$captcha->setSiteKey( "6LdDXyYUAAAAAFQ0D1UckIiCJPBW315kl8VNgigT" );
		$captcha->setSecretKey( "6LdDXyYUAAAAAFRsdZ690Ux6dphUJ0FIoeOrkHyv" );
		return $captcha;
	}
}
