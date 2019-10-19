<?php

namespace App\API\Entity;

class Country implements \JsonSerializable
{
	private $id;
	private $name;
	private $city;

	public function jsonSerialize():array
	{
		return [
			'id' => $this->getId(),
			'name' => $this->getName(),
			'city' => $this->getCity(),
		];
	}

	public function getId():?int { return $this->id; }
public function setId(?int $id):void { $this->id = $id;}

public function getName():string { return $this->name; }
public function setName(string $name):void { $this->name = $name;}

public function getCity():string { return $this->city; }
public function setCity(string $city):void { $this->city = $city;}
}