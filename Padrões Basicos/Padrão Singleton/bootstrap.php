<?php

require __DIR__.'/vendor/autoload.php';

$builder = new DesignPatterns\Db\Builder\MySqlBuilder;
$director = new DesignPatterns\Db\Builder\UsersDirector($builder);

$config = [
    'dsn'=>'mysql:host=localhost;dbname=laravel_angular2',
    'user'=>'root',
    'passwd'=>'1234'
];

DesignPatterns\Db\DbSingleton::configure($config);
