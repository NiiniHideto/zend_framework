<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    // PDO を使って MySQL データベースに接続
    'db' => [
        'driver' => 'Pdo_Mysql',
        'dsn' => 'mysql:dbname=self_order;host=db;charset=utf8',
        'username' => 'db_user',
        'password' => 'secret',
    ],
];
