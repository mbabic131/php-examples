<?php

class StaticExample {
	static public $number = 5;

	static public function printNumber()
	{
		print "Number is: " . self::$number . "<br>";
	}
}

// static methods are functions with class scope, we can access static property and method via a class and not a instance 
print StaticExample::$number . "<br>";
StaticExample::printNumber();

$obj = new StaticExample();
print $obj::$number . "<br>";
$obj->printNumber();
