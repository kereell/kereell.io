<?php

namespace User\Controller;

use 
	Zend\View\Model\ViewModel,
	Zend\Mvc\Controller\AbstractActionController,
	Zend\Debug\Debug;

class UserController extends AbstractActionController
{
	public function __construct( 
		$userTableGateway,
		$userRegistrationForm,
		$captcha
	)
	{
		$this->userTableGateway = $userTableGateway;
		$this->userRegistrationForm = $userRegistrationForm;
		$this->captcha = $captcha;
	}

	private 
		$userTableGateway,
		$userRegistrationForm,
		$captcha;

	public function listAction()
	{
		$viewModel = new ViewModel();

		return $viewModel;
	}

	public function addAction()
	{
		$form = $this->userRegistrationForm;

		if ( ! $this->request->isPost() )
			return [
				"form" => $form,
				"captcha" => $this->captcha,
			];

		$form->setData( $this->request->getPost() );

		if ( ! $form->isValid() )
			return [
				"form" => $form,
				"captcha" => $this->captcha,
			];

		return [];
		
	}

	public function editAction()
	{

	}

	public function deleteAction()
	{

	}

}
