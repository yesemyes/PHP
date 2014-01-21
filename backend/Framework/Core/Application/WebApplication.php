<?php
namespace Framework\Core\Application;

	class WebApplication extends Application{
		/**
		*	object Meneger
		*	@var string
		*/
		public $baseUrl;
		/**
		*	object Meneger
		*	@var object
		*/
		public $objectMeneger;
		
		public function runApplication(){
			echo "test1<br/>";
		}
		
		public function process(){
			echo "test2";
		}
	}
?>