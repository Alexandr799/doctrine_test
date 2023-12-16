<?php

require_once "vendor/autoload.php";

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$paths = [__DIR__ . '/src/Entities', __DIR__ . '/src/Dao'];

$isDevMode = false;

// the connection configuration
$dbParams = [
    'driver' => 'pdo_mysql',
    'user' => 'Какой то пользователь',
    'password' => 'Какой то пароль',
    'dbname' => 'mydb',
    'host' => 'localhost:3306',
];

$config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode);
$connection = DriverManager::getConnection($dbParams, $config);
$entityManager = new EntityManager($connection, $config);
