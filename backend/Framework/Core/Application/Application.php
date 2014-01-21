<?php
namespace Framework\Core\Application;

use \Framework\Framework;

abstract class Application{
	abstract public function process();
	
	public function __construct(){
		Framework::setApp($this);
		$this->runApplication();
	}
	

}
?>