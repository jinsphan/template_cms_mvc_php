<?php
// Config global constant variable
$domain = $_SERVER["SERVER_NAME"];
if($_SERVER["SERVER_PORT"] != 80)
	$domain .= ":".$_SERVER["SERVER_PORT"];

$relRoot = dirname($_SERVER['SCRIPT_NAME']);

if(substr($relRoot, -1) != "/") $relRoot .= "/"; 
define('RootURL', 'http://'.$domain.$relRoot);
define('RootABS', 'http://'.$domain.$relRoot);

define('RootREL', $relRoot);

define('RootURI', dirname($_SERVER['SCRIPT_FILENAME'])."/");

define('ControllerREL', 'controllers/');
define('AdminPath', 'admin');
define('ControllerAdminREL', ControllerREL."/".AdminPath);

// Config for database
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','root');
define('DB_NAME','project_thayha_blog');

define('NUM_TOP_USERS', 5);
// Global variables
$app = [];
$app['area'] = 'users';
$app['areaPath'] = '';

$app['roles'] = [
	'1'=>'admin',
	'2'=>'user'
];
?>
