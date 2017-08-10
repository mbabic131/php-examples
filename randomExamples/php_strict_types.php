<?php
declare(strict_types=1);

function foobar(): int {
	return 1.1; // this will produce an error, function must return int (strict types enabled)
}

//echo foobar();

function baz(): string {
	return 'Hello World';
}

//echo baz();

function may_mac(float $may, float $mac) {
	echo "Mayweather; " . $may . " %";
	echo PHP_EOL;
	echo "McGregor: " . $mac . " %";
}

may_mac(85, 15);
