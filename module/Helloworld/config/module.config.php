<?php
namespace Helloworld;

return array(
	'di' => array(
		'allowed_controllers' => array(
			'helloworld-index-controller'
		),
		'definition' => array(
			'class' => array(
				'Helloworld\Service\GreetingService' => array(
					'setLoggingService' => array(
						'required' => true,
					),
				),
				'Helloworld\Controller\IndexController' => array(
					'setGreetingService' => array(
						'required' => true,
					),
				),
			),
		),
		'instance' => array(
			'preferences' => array(
				'Helloworld\Service\LoggingServiceInterface' => 'Helloworld\Service\LoggingService',
			),
			'Helloworld\Service\LoggingService' => array(
				'parameters' => array(
					'logfile' => __DIR__ . '/../../data/log.txt',
				),
			),
			'alias' => array(
				'helloworld-index-controller' => 'Helloworld\Controller\IndexController',
			),
		),
	),
	'router' => array(
		'routes' => array(
			'helloworld' => array(
				'type' => 'Zend\Mvc\Router\Http\Literal',
				'options' => array(
					'route' => '/helloworld',
					'defaults' => array(
						'controller' => 'helloworld-index-controller',
						'action' => 'index',
					),
				),
			),
		),
	),
	/*'controllers' => array(
		'invokables' => array(
			'Helloworld\Controller\Index' => 'Helloworld\Controller\IndexController',
		),
	),*/
	/*'service_manager' => array(
		'factories' => array(
			'Greeting' => 'Helloworld\Service\GreetingServiceFactory',
		),
	),*/
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
	),
);