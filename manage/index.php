<?php
define('primary', 1);
define('rootPath',dirname(dirname(__FILE__)));
define('in', DIRECTORY_SEPARATOR);
define('mainSrc',rootPath.in.'src');
define('modulePath',mainSrc.in.'modules');
define('backSrc',rootPath.in."manage".in.'src');
include backSrc.in.'global.php';
if(MainEngine::installed()){
	include mainSrc.in.'dbSettings.php';
	MainEngine::ExecuteRequestProcess();
}else {
	header('location:../install/');
	exit();
}
?>
