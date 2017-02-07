<?php

trait PriceUtilities {
	private static $taxrate = 25;

	static function calculateTax($price)
	{
		return ( (self::$taxrate / 100) * $price );
	}
}

trait TaxTools {
	static function calculateTax($price)
	{
		return 222;
	}
}

abstract class Service {};

class UtilityService extends Service {
	use PriceUtilities, TaxTools {
		TaxTools::calculateTax insteadof PriceUtilities;
		PriceUtilities::calculateTax as BasicTax;
	}
}

$u = new UtilityService();
print $u->calculateTax(100) . "\n";
print $u->BasicTax(100) . "\n";