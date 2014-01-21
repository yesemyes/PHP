<?php
namespace Framework;

use \Framework\Core\Application\WebApplication;
use \Framework\Core\Exception\RunApplicationErrorException;
class Framework{
	private static $_app;
	
	public static function app(){
		return self::$_app;
	}
	
	public function setApp($appObject){
		if(is_null(self::$_app) || $appObject == null)
			self::$_app = $appObject;
		else
			throw new RunApplicationErrorException();
	}
	
	public function run(){
	
		$app = new WebApplication();
		$app->process();
	}
}
?>