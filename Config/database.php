<?php

return [
    'default' => [
        'connection_string' => 'mysql:host=127.0.0.1;dbname=blog',
        'username' => 'root',
        'password' => '',
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_PERSISTENT => true,
        ),
    ],
];
