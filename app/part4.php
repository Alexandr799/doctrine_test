<?php


require_once __DIR__ . '/bootstrap.php';

use App\Entities\User;

$userDao = $entityManager->getRepository(User::class);

$res = $userDao->activateUser(7490);
if ($res) {
    echo "Юзер активирован!\n";
} else {
    echo "Не вышло, юзер активен!\n";
}