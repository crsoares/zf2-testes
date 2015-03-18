<?php

return array(
    'Helloworld\\Service\\LoggingService' => function (\Zend\Di\Di $di, $isShared) {
        $object = new \Helloworld\Service\LoggingService();
        
        if ($isShared) {
            $di->instanceManager()->addSharedInstance($object, 'Helloworld\Service\LoggingService');
        }
        
        
        return $object;
    },

    'helloworld-index-controller' => function (\Zend\Di\Di $di, $isShared) {
        $object = new \Helloworld\Controller\IndexController();
        
        if ($isShared) {
            $di->instanceManager()->addSharedInstance($object, 'helloworld-index-controller');
        }
        
        $object->setGreetingService($di->get('Helloworld\Service\GreetingService'));
        
        return $object;
    },

    'Helloworld\\Service\\GreetingService' => function (\Zend\Di\Di $di, $isShared) {
        $object = new \Helloworld\Service\GreetingService();
        
        if ($isShared) {
            $di->instanceManager()->addSharedInstance($object, 'Helloworld\Service\GreetingService');
        }
        
        $object->setLoggingService($di->get('Helloworld\Service\LoggingService'));
        
        return $object;
    },

    'Helloworld\\Controller\\IndexController' => function (\Zend\Di\Di $di, $isShared) {
        $object = new \Helloworld\Controller\IndexController();
        
        if ($isShared) {
            $di->instanceManager()->addSharedInstance($object, 'Helloworld\Controller\IndexController');
        }
        
        $object->setGreetingService($di->get('Helloworld\Service\GreetingService'));
        
        return $object;
    },

);
