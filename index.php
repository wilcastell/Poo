<?php

class Person
{
	protected $firstName;
	protected $lastName;
	protected $nickName;
	protected $changeNickName = 0;


	public function __construct($firstName, $lastName)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function getFirstName()
	{
		return $this->firstName;
	}

	public function getLastName()
	{
		return $this->lastName;
	}

	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
	}

	public function setNickName($nickName)
	{
		if ($this->changeNickName >= 2) {
			throw new Exception("no puedes cambiar el nickName más de dos veces");
		}
			$this->nickName = $nickName;
			$this->changeNickName++;
	}

	public function getNickName()
	{
		return $this->nickName;
	}

	public function getFullName()
	{
		return $this->firstName. ' '. $this->lastName;
	}
}

$person1 = new Person('Wilmer','Castellanos');

$person2 = new Person('Zack','Morris');

$person3 = new Person('Cristian','Castro');


echo "{$person1->getFullName()} es amigo de {$person2->getFullname()} y queman los discos de {$person3->getFullname()}";
$person3->setFirstName("Manuel");
echo '<br> '.$person3->getFullname();

$person3->setNickName('Parásito');
$person3->setNickName('Sapo');
$person3->setNickName('nada');
echo $person3->getNickName();