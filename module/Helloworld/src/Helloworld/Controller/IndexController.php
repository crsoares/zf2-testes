<?php

namespace Helloworld\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Helloworld\Service\GreetingService;

class IndexController extends AbstractActionController
{
	protected $greetingService;

	public function indexAction()
	{
		//$greetingService = $this->getServiceLocator()->get('Helloworld\Service\GreetingService');
		echo $this->greetingService->getGreeting();die;
		return new ViewModel();
	}

	public function setGreetingService(GreetingService $greetingService)
	{
		$this->greetingService = $greetingService;
	}
}