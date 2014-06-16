<?php
return array(
'contyrollers'=> array(
     'invokables' => array(
       'Galerie\Controllers\Index' => 'Galerie\Controllers\IndexController'
        ),

      ), //end of controller
      
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
     ),//end of view manager
		
'router'=> array(
    'routes' => array(
    		
      'galerie' => array(
           'type'    => 'literal',
           'options' => array(
               'route'    => '/galeries',
               'defaults' => array(
                '_NAMESPACE_'   => 'Galerie\Controller',
                'controller'    => 'Index',
                'action'        => 'index',
                'verb'          => 'get'  ,
                'may_terminate' => 'true' ,

               ),

           ),

       ),//end of route index 
       
    	'add' => array(
    				'type'    => 'literal',
    				'options' => array(
    						'route'    => '/ajouter',
    						'defaults' => array(
    								'action'        => 'edit',
    						),
    					),
    								
    				'verb'          => 'get,post' ,
    								
    		
    	),//en of route add
    	
    	'edit' => array(
    				'type'    => 'Segment',
    				'options' => array(
    						'route'    => '/editer/:id',
    						'constraints' => array(
    								'id'  => '[1-9][0-9]*',
    						),
    						'defaults' => array(
    								'action'  => 'edit',
    						),
    				),
    		
    				'verb'          => 'get,post' ,
    		
     ),// end of route edit 
     
    'del' => array(
    				'type'    => 'Segment',
    				'options' => array(
    						'route'    => '/supprimer/:id',
    						'constraints' => array(
    								'id'  => '[1-9][0-9]*',
    						),
    						'defaults' => array(
    								'action'  => 'del',
    						),
    				),
    		
    				'verb'          => 'get,post' ,
    		
    		),// end of route del
    		
    		'view' => array(
    				'type'    => 'Segment',
    				'options' => array(
    						'route'    => '/voir/:id',
    						'constraints' => array(
    								'id'  => '[1-9][0-9]*',
    						),
    						'defaults' => array(
    								'action'  => 'view',
    						),
    				),
    		
    				'verb'          => 'get,post' ,
    		
    		),// end of route view
  ),//end of all routes 

),//end of router 

		
);