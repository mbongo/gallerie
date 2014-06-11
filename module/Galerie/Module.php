<?php
namespace Galerie


use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

class Module implements AutoloaderProviderInterface {

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


}






