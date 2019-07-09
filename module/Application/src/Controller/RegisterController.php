<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Adapter\Driver\ResultInterface;
class RegisterController extends AbstractActionController {
    private $view;
    private $serviceManager;
    private $loginModel;
    
    public function indexAction(){
        $configArray = [
    'driver'   => 'Mysqli',
    'database' => 'ads',
    'username' => 'root',
    'password' => '',
];
        $adapter = new Adapter($configArray);
        $stmt = $adapter->createStatement('SELECT * FROM users');
        $stmt->prepare();
        $result = $stmt->execute();
        if ($result instanceof ResultInterface && $result->isQueryResult()) {
    $resultSet = new ResultSet;
    $resultSet->initialize($result);

    foreach ($resultSet as $row) {
        echo $row->login . PHP_EOL;
    }
}die;
        return new ViewModel();
    }

    public function registerAction() {

        if (empty($POST)){
            echo "diee";die;
//            header("Location: /Ads/public/register");
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
