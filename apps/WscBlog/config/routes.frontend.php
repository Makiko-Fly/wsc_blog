<?php

return array(
	// TODO... change nginx config so that the matching rule 
	// could allow path '/' to be routed to index.php?
	'/' => array(
        'controller' 	=> 'index',
		'action' 		=> 'index',
		'params' 		=> ''
	),
	'/home' => array(
        'controller' 	=> 'index',
		'action' 		=> 'index',
		'params' 		=> ''
	),
	'/:controller/:action/:params' => array(
        'controller' 	=> 1,
		'action' 		=> 2,
		'params' 		=> 3	
	)
);
