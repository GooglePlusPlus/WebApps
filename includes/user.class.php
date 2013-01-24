<?php
class GP_User{
	private $_id;
	private $_login;
	private $_email;
	private $_level;

	function __construct($id,$login,$email,$level){
		$this->_id=$id;
		$this->_login=$login;
		$this->_email=$email;
		$this->_level=$level;
		return true;
	}

	function is_admin(){
		return $this->_level==GP_USER_LV_ADMIN;
	}

	function is_banned(){
		return $this->_level==GP_USER_LV_BANNED;
	}

	function set_passwd($password){
		global $hasiher;
		$this->_pass=$hashier->HashPassword($password);
	}
}