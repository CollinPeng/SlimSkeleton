<?php
declare(strict_types=1);

use \Pixie\Connection;
use \Pixie\QueryBuilder\QueryBuilderHandler;

return [
    // 数据库配置
    QueryBuilderHandler::class => function () {
        $connection = new Connection('mysql', require __DIR__ . '/../config/database.php');
        return new QueryBuilderHandler($connection);
    }
];