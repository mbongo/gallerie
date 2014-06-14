<?php
return array(
'contyrollers'=> array(
     'invokables' => array(
       'Galerie\Controllers\Index' => 'Galerie\Controllers\IndexController'
        ),

      ), 
'view_manager' => array(
'template_map' => array(
   'galerie/index/index' => _DIR_.'/../view/galerie/index/index.phtml',
   'galerie/index/edit' => _DIR_.'/../view/galerie/index/edit.phtml',
   'galerie/index/del' => _DIR_.'/../view/galerie/index/del.phtml',
   'galerie/index/view' => _DIR_.'/../view/galerie/index/view.phtml',

 ),
    'template_path_stack' => array(
        'galerie' => _DIR_.'/../view',
       ),
     ),
'router'=> array(
    'routes' => array(
      'galerie' => array(
       ),
     ),
  ),

);