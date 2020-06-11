#!/usr/bin/env php
<?php

$container = require __DIR__ . '/bootstrap/bootstrap.php';

$app = new \Silly\Application();
$app->useContainer($container, true);

require __DIR__ . '/routes/console.php';

$app->run();

