<?php
class MongoDBSessionHandler{
	private $_col;
	private $_expire;

	public function __construct(MongoCollection $sessionCol,$expire=3600){
		$this->_col=$sessionCol;
		$this->_expire=(int)$expire;
		session_set_save_handler(
			array($this,'session_open'),
			array($this,'session_close'),
			array($this,'session_read'),
			array($this,'session_write'),
			array($this,'session_destroy'),
			array($this,'session_gc')
		);

		session_start();
	}

	public function session_open($sessionPath,$sessionName){
		return true;
	}

	public function session_close(){
		return 1;
	}

	public function session_write($SID,$value){
		$this->_col->update(
			array('SID'=>$SID),
			array(array('SID'=>$SID,'data'=>$value,'expires'=>time()+$this->_expire)),
			array('upsert'=>true)
		);
		session_write_close();
	}

	public function session_read($SID){
		$cursor=$this->_col->find(
			array('SID'=>$SID,'expires'=>array('$gt'=>time())),
			array('data'=>true)
		);
		$cursor->snapshot();
		if(count($cursor)!=0){
			return $cursor->getNext();
		}
	}

	public function session_destroy($SID){
		$this->_col->remove(
			array('SID'=>$sid)
		);
	}

	public function session_gc($lifetime){
		$this->_col->remove(
			array('expires'=>array('$lt'=>time()))
		);
	}
}