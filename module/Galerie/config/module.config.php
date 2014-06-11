<?php
return array(
'contyrollers'=> array(
     'invokables' => array(
       'Galerie\Controllers\Index' => 'Galerie\Controllers\IndexController'
        ),

      ), 
'view_manager' => array(
    'template_path_stack' => array(
        'galerie' => _DIR_.'/../view',
       ),
     ),

);