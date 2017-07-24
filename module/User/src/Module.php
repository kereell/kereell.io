<?php 

namespace User;

use 
	Zend\ModuleManager\Feature\ConfigProviderInterface,
	Zend\ModuleManager\Feature\BootstrapListenerInterface,
	Zend\ModuleManager\Feature\ControllerProviderInterface,
	Zend\ModuleManager\Feature\FilterProviderInterface,
	Zend\ModuleManager\Feature\FormElementProviderInterface,
	Zend\ModuleManager\Feature\InputFilterProviderInterface,
	Zend\ModuleManager\Feature\LogProcessorProviderInterface,
	Zend\ModuleManager\Feature\LogWriterProviderInterface,
	Zend\ModuleManager\Feature\RouteProviderInterface,
	Zend\ModuleManager\Feature\SerializerProviderInterface,
	Zend\ModuleManager\Feature\ServiceProviderInterface,
	Zend\ModuleManager\Feature\ValidatorProviderInterface,
	Zend\ModuleManager\Feature\ViewHelperProviderInterface,
	Zend\EventManager\EventInterface,
	Zend\Db\Adapter\AdapterServiceFactory as DbAdapterServiceFactory,
	Zend\Debug\Debug;

class Module 
	implements 
	ConfigProviderInterface,
	BootstrapListenerInterface,
	ControllerProviderInterface,
	FilterProviderInterface,
	FormElementProviderInterface,
	InputFilterProviderInterface,
	LogProcessorProviderInterface,
	LogWriterProviderInterface,
	RouteProviderInterface,
	SerializerProviderInterface,
	ServiceProviderInterface,
	ValidatorProviderInterface,
	ViewHelperProviderInterface
{

	/**
	 * Returns configuration to merge with application configuration
	 *
	 * @return array|\Traversable
	 */
	public function getConfig()
	{
		return include __DIR__ . "/../config/module.config.php";
	}

	/**
	 * Listen to the bootstrap event
	 *
	 * @param EventInterface $e
	 * @return array
	 */ 
	public function onBootstrap( EventInterface $e )
	{

	}

	/**
	 * Expected to return \Zend\ServiceManager\Config object or array to seed
	 * such an object.
	 *
	 * @return array|\Zend\ServiceManager\Config
	 */ 
	public function getControllerConfig()
	{
		return [
			"factories" => [

				"user.controller" => 
				Factory\Controller\UserControllerFactory :: class,

			],
		];
	}

	/**
	 * Expected to return \Zend\ServiceManager\Config object or array to
	 * seed such an object.
	 *
	 * @return array|\Zend\ServiceManager\Config
	 */
	public function getFilterConfig()
	{

	}	

	/**
	 * Expected to return \Zend\ServiceManager\Config object or array to
	 * seed such an object.
	 *
	 * @return array|\Zend\ServiceManager\Config
	 */
	public function getFormElementConfig()
	{

	}	

	/**
	 * Expected to return \Zend\ServiceManager\Config object or array to
	 * seed such an object.
	 *
	 * @return array|\Zend\ServiceManager\Config
	 */
	public function getInputFilterConfig()
	{

	}	

	/**
	 * Expected to return \Zend\ServiceManager\Config object or array to
	 * seed such an object.
	 *
	 * @return array|\Zend\ServiceManager\Config
	 */
	public function getLogProcessorConfig()
	{

	}	

	/**
	 * Expected to return \Zend\ServiceManager\Config object or array to
	 * seed such an object.
	 *
	 * @return array|\Zend\ServiceManager\Config
	 */
	public function getLogWriterConfig()
	{

	}	

	/**
	 * Expected to return \Zend\ServiceManager\Config object or array to
	 * seed such an object.
	 *
	 * @return array|\Zend\ServiceManager\Config
	 */
	public function getRouteConfig()
	{

	}

	/**
	 * @return array
	 */
	public function getSerializerConfig()
	{

	}

	/**
	 * Expected to return \Zend\ServiceManager\Config object or array to
	 * seed such an object.
	 *
	 * @return array|\Zend\ServiceManager\Config
	 */
	public function getServiceConfig()
	{

		return [

			"factories" => [

				"user.db_adapter" => 
				DbAdapterServiceFactory :: class,

				"user.credentials_tablegateway" =>
				Factory\Model\TableGateway\UserCredentialsTableGatewayFactory :: class,
				"user.details_tablegateway" => 
				Factory\Model\TableGateway\UserDetailsTableGatewayFactory :: class,
				"user.acl_tablegateway" => 
				Factory\Model\TableGateway\UserAclTableGatewayFactory :: class,
				"user.roles_tablegateway" => 
				Factory\Model\TableGateway\UserRolesTableGatewayFactory :: class,


				"user.registration_form" => 
				Factory\Form\UserRegistrationFormFactory :: class,

				"user.registration_input_filter" => 
				Factory\InputFilter\UserRegistrationInputFilterFactory :: class,

				"user.captcha" => 
				Factory\Form\UserRegistrationCaptchaFactory :: class,

			],

		];
	}

	/**
	 * Expected to return \Zend\ServiceManager\Config object or array to
	 * seed such an object.
	 *
	 * @return array|\Zend\ServiceManager\Config
	 */
	public function getValidatorConfig()
	{

	}

	/**
	 * Expected to return \Zend\ServiceManager\Config object or array to
	 * seed such an object.
	 *
	 * @return array|\Zend\ServiceManager\Config
	 */
	public function getViewHelperConfig()
	{

	}
}	
