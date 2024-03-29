<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

class Module {

    const VERSION = '3.0.3-dev';

    public function getConfig() {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function getServiceConfig() {
        return [
            'factories' => [
                Model\Register::class => function($container) {
                    $tableGateway = $container->get(Model\Register::class);
                    return new Model\Register($tableGateway);
                }
            ],
            'invokables' => [
            Model\Register::class => Model\Register::class
            
            ],
        ];
    }

}
