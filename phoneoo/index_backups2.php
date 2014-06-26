<?php 

abstract class Animal {
	public $name;
	protected $google = 'How are you';
	public function __construct($name) {
		$this->name = $name;
	}

	public static function test() {
		echo "Test!";
	}
}

Animal::test();

class Dog extends Animal { // Inheritance
	public $color; 
	public function __construct($name, $color) {
		parent::__construct($name);
		$this->color = $color;
	}

	public function getProtected() {
		echo $this->google;
	}

	public function bark() {
		echo "Bark!";
	}
}
class Cat extends Animal {
	public function meow() {
		echo "Meow!";
	}
}

Dog::test();

$dog = new Dog('Aung Jet!', 'red');
echo $dog->name;
echo $dog->color;
$dog->getProtected();
echo "<br />";
echo $dog->bark();


 ?>