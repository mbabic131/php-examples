<?php

abstract class ShopProductWriter {
	protected $products = array();

	// abstract method
	abstract public function write();

	public function addProduct($shopProduct) 
	{
		$this->products[] = $shopProduct;
	}
}

// you cannot instatiated abstract class
// $writer = new ShopProductWriter(); // this will throw a error (Fatal error: Cannot instantiate abstract class ShopProductWriter in ...)

// every class that extends abstract class must have implementation of every abstract method
// class ExampleWritterError extends ShopProductWriter {} // this will throw a error (Fatal error: Class ExampleWritterError contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (ShopProductWriter::write) in ...)

class FirstWritter extends ShopProductWriter {
	public function __construct($shopProduct)
	{
		$this->addProduct($shopProduct);
	}

	function write()
	{
		echo "First writter<br>";
		var_dump($this->products);
	}
}

class SecondWritter extends ShopProductWriter {
	public function __construct($shopProduct)
	{
		$this->addProduct($shopProduct);
	}

	function write()
	{
		echo "<br>Second writer<br>";
		var_dump($this->products);
	}
}

$first = new FirstWritter('First');
$first->write();

$second = new SecondWritter('Second');
$second->write();



