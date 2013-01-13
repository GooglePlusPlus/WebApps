<?php
/**
 * Initialize file for the application.
 * 
 * @package GooglePlusPlus
 * 
 * */
//Initialize variables.

/**
 * Path to the includes folder.
 * 
 * */
define('GPINC',dirname(__FILE__).'/includes');

//Require dependences.
//Smarty
require(GPINC."/tp/smarty/Smarty.class.php");

//MongoDB session tools
require(GPINC.'/MongoDBSessionHandler.class.php');

//Initialize databases and sessions.
$mo = new Mongo();
$db=$mo->selectDB('gplusplus');
$session=$db->sessions;
$sess=new MongoDBSessionHandler($session,3600);