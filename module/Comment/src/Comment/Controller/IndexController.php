<?php

namespace Comment\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	public function indexAction()
	{
		$view = new ViewModel();
		$comments = array();

		for ($i = 0; $i < 10; $i++) {
			$comments[] = array(
				'name' => 'John Doe (' . $i . ')',
				'comment' => 'Lorem ipsum dolor sit amet...',
			);
		}

		return $view->setVariable('comments', $comments)
				    ->setTerminal(true);
	}	
}