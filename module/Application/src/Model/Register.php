<?php
namespace Application\Model;
use Zend\Db\TableGateway\TableGatewayInterface;

class Register {
    protected $tableGateway;
    
    function __construct(TableGatewayInterface $tableGateway) {
        $this->tableGateway = $tableGateway;
    }
    
    public function fetchAll(){
        $this->tableGateway->getAll();
    }
    
}