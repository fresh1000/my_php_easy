<?php

class Animal {
	protected $name;

	function __construct($name) {
		$this->name = $name;
	}

	function getName() {
		return $this->name;
	}
}

class Cat extends Animal {

	function __construct($name) {
		parent::__construct($name);
	}

	function meow() {
		echo "Cat $this->name is saying meow";
	}

}

$cat = new Cat ('garfield');
$cat->getName() === 'garfield';
$cat->meow() === 'Cat garfield is saying meow';