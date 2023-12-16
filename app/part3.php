<?php

require_once __DIR__ . '/bootstrap.php';

use App\Entities\User;

$userDao = $entityManager->getRepository(User::class);
$userFromDataBase = $userDao->getUser(8516);

echo 'Привет, я польльзователь ' . $userFromDataBase->getUsername() . ' c id ' . $userFromDataBase->getId() . "\n";


$randomUserFromDataBase = $userDao->getUser(rand(1, 1000));

if (empty($randomUserFromDataBase)) {
    echo 'Пользователь не найден!' . "\n";
} else {
    echo 'Привет, я польльзователь ' . $randomUserFromDataBase->getUsername() . "\n";
}


