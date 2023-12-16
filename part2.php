<?php 
$host = 'localhost:3306';
$db   = 'mydb';
$user = 'какой то пользователь';
$pass = 'какой то пароль';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $dbh = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage() . "\n");
}

$data = $dbh->query('SELECT * FROM user LIMIT 10');
$data->execute();
$list = [];
$row = $data->fetch();

if (empty($row)) {
    echo 'Empty set' . PHP_EOL;
    return;
}

while ($row = $data->fetch()) {
    echo $row['first_name'] . PHP_EOL;
}


