<?php
	class Singletone {
		protected static $instance;

		private function __construct() {

		}

		private function __wakeup() {

		}

		private function __clone() {

		}

		public static function getInstance() {
			if(static::$instance === null){
				static::$instance = new static;
			}
			return static::$instance; 
		}
	}

	class SingletoneChild extends Singletone {

	}

	$obj = Singletone::getInstance();

	var_dump($obj === Singletone::getInstance());

	$another = SingletoneChild::getInstance();

	var_dump($another === Singletone::getInstance());
	var_dump($another === SingletoneChild::getInstance());