<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class IndexController extends AbstractActionController {
    private $view;
    private $serviceManager;
    private $loginModel;
    
    public function indexAction(){
        return new ViewModel();
    }

    public function loginAction() {

        $this->response->getHeaders()->addHeaderLine('Content-Type: text/plain');
        
        if (!(empty($this->getRequest()->getPost()->toArray()))) {
            
            $loginParms = $this->getRequest()->getPost()->toArray();
            return $this->response->setContent("myNigga");
        }
        return $this->response->setContent("notMyNigga");
    }

    function setServiceManager($serviceManager){
        $this->serviceManager = $serviceManager;
    }
    
    function initLogin($loginModel){
        $this->loginModel = $loginModel;
    }
}
