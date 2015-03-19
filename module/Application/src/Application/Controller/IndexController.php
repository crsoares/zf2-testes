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
use Application\Model\Hydrator\SampleModelHydrator;
use Application\Model\Hydrator\Strategy\SampleHydratorStrategy;
use Application\Form\NormalForm;
use Application\Form\AnnotationForm;
use Zend\Form\Annotation\AnnotationBuilder;
use Application\Form\NormalFormValidator;
use Application\Model\SampleModel;;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
    	/*$output = new \Application\Model\LongOutput();

    	echo '<!-- ' . $output->run(1500) . ' -->';*/

    	/*$pattern = \Zend\Cache\PatternFactory::factory(
    		'class',
    		array(
    			'storage' => $this->getServiceLocator()->get('cache'),
    			'class' => '\Application\Model\LongOutput'
    		));

    	echo '<!-- ' . $pattern->call('run', array(1500)) . ' -->';*/

        echo $this->getServiceLocator()->get('ExampleService')->encodeMyString("Service? Easily created!");die;

        $model = new \Application\Model\SampleModel();

        $data = array(
            'id' => 'Some Id',
            'value' => 'Some Awesome Value',
            'description' => 'Pecunia non olet',
        );

        $hydrator = new SampleModelHydrator();
        $hydrator->addStrategy(
            "primary",
            new SampleHydratorStrategy()
        );

        $newObject = $hydrator->hydrate($data, $model);

        $extract = $hydrator->extract($newObject);

        echo "<pre>" . print_r($extract, true) . "</pre>";

        return new ViewModel();
    }

    public function formAction()
    {
    	$form = new NormalForm();

    	return new ViewModel(array(
    		'form' => $form,
    	));
    }

    public function formAnnotationAction()
    {
        $viewModel = new ViewModel();

        $builder = new AnnotationBuilder();

        $annotationForm = new AnnotationForm();

        $form = $builder->createForm($annotationForm);

        $viewModel->setVariable('form', $form);

        return $viewModel;
    }

    public function validatorAction()
    {
        $form = new NormalForm();

        $request = $this->getRequest();

        if ($request->isPost() === true) {
            $formValidator = new NormalFormValidator();

            $form->setInputFilter($formValidator->getInputFilter());

            $form->setData($request->getPost());

            if ($form->isValid() === true) {
                $user = new SampleModel();

                $user->doStuff($form->getData());

                unset($user);
            }
        }

        return new ViewModel(array(
            'form' => $form,
        ));
    }

    public function exampleViewscriptAction()
    {
    	$builder = new AnnotationBuilder();

    	$annotationForm = new AnnotationForm();

    	$form = $builder->createForm($annotationForm);

    	return new ViewModel(array('formObject' => $formObject));
    }
}
