<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;


class RegisterController extends AbstractActionController {
    private $view;
    private $serviceManager;
    private $loginModel;
    
    public function indexAction(){
        return new ViewModel();
    }

    public function registerAction() {

        if (empty($POST)){
            header("Location: /Ads/public/register");
            die();
        }else{
            
        }
    }

    function setServiceManager($serviceManager){
        $this->serviceManager = $serviceManager;
    }
    
    function initLogin($loginModel){
        $this->loginModel = $loginModel;
    }
}
