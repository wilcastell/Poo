<?php

class Person
{
	var $firstName;
	var $lastName;

	public function __construct($firstName, $lastName)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function fullName()
	{
		return $this->firstName. ' '. $this->lastName;
	}
}

$person1 = new Person('Wilmer','Castellanos');

$person2 = new Person('Zack','Morris');


echo "{$person1->fullName()} es amigo de {$person2->fullname()}";
