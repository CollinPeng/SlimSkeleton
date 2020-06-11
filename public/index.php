<?php
declare(strict_types=1);

use Slim\Factory\AppFactory;

$container = require __DIR__ . '/../bootstrap/bootstrap.php';

AppFactory::setContainer($container);
$app = AppFactory::create();

require __DIR__ . '/../routes/api.php';

require __DIR__ . '/../routes/web.php';

$app->run();