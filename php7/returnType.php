<?php

class User {};

function getUser() : User {
	return new User();
	//return []; // thow an error
}

function getString() : String {
	return "Test";
}

var_dump(getString());
