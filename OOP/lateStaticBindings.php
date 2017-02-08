<?php

abstract class DomainObject {
	private $group;

	public function __construct()
	{
		// $this->group = self::getGroup(); // with this code, every class that extends this abstract class will be forced to use getGroup() method from this class, wont be able to override static method
		$this->group = static::getGroup(); // child class have option to override implementation of getGroup() static method
	}

	public static function create()
	{
		// return new self(); // this will throw a error (Fatal error: Cannot instantiate abstract class DomainObject in ...)
		return new static(); // static is similar to self, except that it refers to the invoked rather than the containing class
	}

	static function getGroup()
	{
		return "default";
	}
}

class User extends DomainObject {};

class Document extends DomainObject {
	static function getGroup()
	{
		return "document";
	}
};

class SpreadSheet extends Document {};

var_dump(User::create());
var_dump(Document::create());
var_dump(SpreadSheet::create());

