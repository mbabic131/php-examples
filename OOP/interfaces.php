<?php

interface Chargeable {
	public function getPrice();
}

interface Mailable {
	public function sendEmail();
}

// class that implements interface must provide implementation of every method that are in that interface
// class ShopProductError implements Chargeable {}; // this will throw a error (Fatal error: Class ShopProductError contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Chargeable::getPrice) in )

class ShopProduct implements Chargeable {
	public function getPrice()
	{
		return 15.15;
	}
}

class ShopProduct2 implements Chargeable, Mailable {
	public function getPrice()
	{
		return 10.10;
	}

	public function sendEmail()
	{
		// send email
	}
}

