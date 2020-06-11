<?php
declare(strict_types=1);

return [
    'driver'    => 'mysql', // Db driver
    'host'      => 'localhost',
    'database'  => 'your-database',
    'username'  => 'root',
    'password'  => 'your-password',
    'charset'   => 'utf8', // Optional
    'collation' => 'utf8_unicode_ci', // Optional
    'prefix'    => 'cb_', // Table prefix, optional
    'options'   => [ // PDO constructor options, optional
        PDO::ATTR_TIMEOUT => 5,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]
];