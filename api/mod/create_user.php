<?php
//Initialize
require('../init.php');
//Check arguments' status.
if(!isset($_POST['uname'])||is_empty($_POST['uname'])||!isset($_POST['passwd'])||is_empty($_POST['passwd'])){
	die('One or more arguments are invalid. Please try again.');
}