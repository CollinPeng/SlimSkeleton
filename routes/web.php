<?php
/**
 * Web 路由定义
 */
declare(strict_types=1);

$app->get('/', \App\Http\Controller\HelloWorldController::class);