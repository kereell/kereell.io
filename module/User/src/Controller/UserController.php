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
		$userRegistrationForm
	)
	{
		$this->userTableGateway = 
			$userTableGateway;

		$this->userRegistrationForm = 
			$userRegistrationForm;
	}

	private 
		$userTableGateway,
		$userRegistrationForm;

	public function listAction()
	{
		$viewModel = new ViewModel();

		return $viewModel;
	}

	public function addAction()
	{
		$form = 
			$this->userRegistrationForm;

		if ( ! $this->request->isPost() )
			return [
				"form" => $form,
			];

		$form->setData( 
			$this->request->getPost() 
		);

		if ( ! $form->isValid() )
			return [
				"form" => $form,
			];

		Debug :: dump( 
			$form->getData()
		);

		return [];
		
	}

	public function editAction()
	{

	}

	public function deleteAction()
	{

	}

}
