<?php 

class Driver{
	
	private $dbHost = 'localhost';
	private $dbUser = 'root';
	private $dbPassword = '';
	private $dbCharset = 'utf8';
	private $dbNotConnectedMessage = 'Не удалось выбрать базу : ';
	
	public function connect(){
		$db = mysql_connect($this->dbHost, $this->dbUser, $this->dbPass);
		$db_selected = mysql_select_db('tank_1', $db);
		mysql_set_charset($this->dbCharset, $db);
		if (!$db_selected) {
		    die ($this->dbNotConnectedMessage . mysql_error());
		}
	}
}





?>