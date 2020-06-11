<?php
declare(strict_types=1);

namespace App\Console;

class BaseConsole
{
    /**
     * 命令名称
     *
     * @var string
     */
    protected static $name = 'command name';

    /**
     * 命令描述
     *
     * @var string
     */
    protected static $description = 'command description';

    /**
     * 获取命令名称
     *
     * @return string
     */
    public static function getName(): string
    {
        return static::$name;
    }

    /**
     * 获取命令描述
     *
     * @return string
     */
    public static function getDescription(): string
    {
        return static::$description;
    }
}