<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require "vendor/autoload.php";
$isDevMode=true;
const PATH_TO_ENTITIES='entities';
$config= Setup::createAnnotationMetadataConfiguration(array(PATH_TO_ENTITIES), $isDevMode);

$connection = array(
	"dbname" => "apigen",
	"user" => "root",
	"password" => "",
	"host" => "localhost",
	"driver" => "pdo_mysql",//pdo_psql - для PostreSQL
);

$entityManager = EntityManager::create($connection, $config);
