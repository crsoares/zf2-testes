<?php

return array (
  'Helloworld\\Service\\LoggingService' => 
  array (
    'supertypes' => 
    array (
      0 => 'Helloworld\\Service\\LoggingServiceInterface',
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'Helloworld\\Controller\\IndexController' => 
  array (
    'supertypes' => 
    array (
      0 => 'Zend\\Stdlib\\DispatchableInterface',
      1 => 'Zend\\EventManager\\EventManagerAwareInterface',
      2 => 'Zend\\EventManager\\EventsCapableInterface',
      3 => 'Zend\\Mvc\\InjectApplicationEventInterface',
      4 => 'Zend\\ServiceManager\\ServiceLocatorAwareInterface',
      5 => 'Zend\\Mvc\\Controller\\AbstractActionController',
      6 => 'Zend\\ServiceManager\\ServiceLocatorAwareInterface',
      7 => 'Zend\\Mvc\\InjectApplicationEventInterface',
      8 => 'Zend\\EventManager\\EventsCapableInterface',
      9 => 'Zend\\EventManager\\EventManagerAwareInterface',
      10 => 'Zend\\Stdlib\\DispatchableInterface',
      11 => 'Zend\\Mvc\\Controller\\AbstractController',
      12 => 'Zend\\Stdlib\\DispatchableInterface',
      13 => 'Zend\\EventManager\\EventManagerAwareInterface',
      14 => 'Zend\\EventManager\\EventsCapableInterface',
      15 => 'Zend\\Mvc\\InjectApplicationEventInterface',
      16 => 'Zend\\ServiceManager\\ServiceLocatorAwareInterface',
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      'setGreetingService' => 0,
      'setEventManager' => 3,
      'setEvent' => 0,
      'setServiceLocator' => 3,
      'setPluginManager' => 0,
    ),
    'parameters' => 
    array (
      'setGreetingService' => 
      array (
        'Helloworld\\Controller\\IndexController::setGreetingService:0' => 
        array (
          0 => 'greetingService',
          1 => 'Helloworld\\Service\\GreetingService',
          2 => true,
          3 => NULL,
        ),
      ),
      'setEventManager' => 
      array (
        'Helloworld\\Controller\\IndexController::setEventManager:0' => 
        array (
          0 => 'eventManager',
          1 => 'Zend\\EventManager\\EventManagerInterface',
          2 => true,
          3 => NULL,
        ),
      ),
      'setEvent' => 
      array (
        'Helloworld\\Controller\\IndexController::setEvent:0' => 
        array (
          0 => 'e',
          1 => 'Zend\\EventManager\\EventInterface',
          2 => true,
          3 => NULL,
        ),
      ),
      'setServiceLocator' => 
      array (
        'Helloworld\\Controller\\IndexController::setServiceLocator:0' => 
        array (
          0 => 'serviceLocator',
          1 => 'Zend\\ServiceManager\\ServiceLocatorInterface',
          2 => true,
          3 => NULL,
        ),
      ),
      'setPluginManager' => 
      array (
        'Helloworld\\Controller\\IndexController::setPluginManager:0' => 
        array (
          0 => 'plugins',
          1 => 'Zend\\Mvc\\Controller\\PluginManager',
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'Helloworld\\Service\\GreetingService' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      'setLoggingService' => 0,
    ),
    'parameters' => 
    array (
      'setLoggingService' => 
      array (
        'Helloworld\\Service\\GreetingService::setLoggingService:0' => 
        array (
          0 => 'loggingService',
          1 => 'Helloworld\\Service\\LoggingServiceInterface',
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
);