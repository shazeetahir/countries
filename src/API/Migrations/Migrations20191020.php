<?php

namespace App\API\Migrations;

use App\API\Migrations\AbstractMigrations;

require_once 'vendor/autoload.php';

class Migrations20191020 extends AbstractMigrations
{
	protected $sql = "
		CREATE TABLE destination.country(
			id TINYINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
			name VARCHAR(100),
			city int,			
			FOREIGN KEY (city) REFERENCES city(id)
		);
		INSERT INTO destination.country
		VALUES
			(NULL, 'FRANCE', '1'),
			(NULL, 'JAPON', '2'),
			(NULL, 'ANGLETERRE', '3');";
}