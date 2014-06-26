<?php 

class Dog {
	public $name; // priperties
	public function __construct($name) {
		echo "Construct!";
		$this->name = $name;
	}
	public function bark() {
		echo "Bark!"  . "<br />";
	}
	public function __destruct() {
		echo "Destruct!";
	}
	public function __call($name, $arguments) {
		var_dump($name);
		var_dump($arguments);
	}
	public function bite() {
		echo "Bite!";
	}
	public static function staticBite() {
		echo "Bite with static!";
	}
	public static function __callStatic($name, $arguments) {
		var_dump($name);
		var_dump($arguments);
	}
}
Dog::staticBite(); // scope resolution operator!
Dog::staticSleep(10); // Late Binding
$dog = new Dog('Aung Net');
$dog->bite();
// Late Binding
$dog->sleep(10);

// $dog = new Dog('Aung Net');
// echo $dog->name;
// $dog->bark();
// $anotherdog = new Dog('Bo Bo');
// echo $anotherdog->name;
// $anotherdog->bark();

/*

Object 

Create Stage ----> construct
Destroy Stage ----> destruct
object method not found ----> call 
static method not found ----> callStatic
*/

?>