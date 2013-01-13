<?php
$_REQUEST['mod']=str_replace(array('/','\\','\'','"'), '', $_REQUEST['mod']);
if(!file_exists('./mod/'.$_REQUEST['mod'].".php")){
	header('HTTP/1.1 404 Not Found');
	die('Module not found.');
}else{
	require('./mod/'.$_REQUEST['mod'].".php");
}
