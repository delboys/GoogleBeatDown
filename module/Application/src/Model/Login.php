<?php

namespace Application\Model;

class Login {
   private $serviceManager;
   
    function __construct(){
        
    }
    
    //Check if username and password match.
    //I'll be using different encryptions so no
   function checkLogin($username,$encryptedPassword){
       $isMyNigga = false;
       
       return true;
   }
    
    //I'll be using different encryptions so no
   function encryptString($string,$encrytionType){
       
       //default/testing
       if ($encrytionType === ""){
           return password_hash($string);
       }else{
           return false;
       }
   }
   
   
}
