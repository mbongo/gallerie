<?php
namespace Galerie


use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;


class Module implements AutoloaderProviderInterface , ConfigProviderInterface {

   public function getAutoloaderConfig(){ 
  //chargement automatique des classes php
     
    return array(
      'Zend\Loader\ClassMapAutoloader' => array(
          _DIR_.'/autoload_classmap.php',
     ),
 );


 



   

   return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );

}

public function getConfig()
 { 
   return include _DIR_.'/config/module.config.php'; 

 }

}






