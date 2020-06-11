<?php
/**
 * 命令行路由
 */
declare(strict_types=1);

use App\Console\RegenerateApiDocument;

$app->command(RegenerateApiDocument::getName(), RegenerateApiDocument::class)
    ->setDescription(RegenerateApiDocument::getDescription());