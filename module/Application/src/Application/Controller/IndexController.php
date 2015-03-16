<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
    	/*$output = new \Application\Model\LongOutput();

    	echo '<!-- ' . $output->run(1500) . ' -->';*/
    	$pattern = \Zend\Cache\PatternFactory::factory(
    		'class',
    		array(
    			'storage' => $this->getServiceLocator()->get('cache'),
    			'class' => '\Application\Model\LongOutput'
    		));

    	echo '<!-- ' . $pattern->call('run', array(1500)) . ' -->';

        return new ViewModel();
    }
}
