<?php
declare(strict_types=1);

namespace App\Console;

use Symfony\Component\Console\Output\OutputInterface;

class RegenerateApiDocument extends BaseConsole
{
    /**
     * @var string
     */
    protected static $name = 'regenerate';

    /**
     * @var string
     */
    protected static $description = '重新生成 API 文档';

    /**
     * 重新生成文档
     * 
     * @param OutputInterface $output
     */
    public function __invoke(OutputInterface $output)
    {
        try {
            $openapi = \OpenApi\scan(__DIR__ . '/../Http/Controller');
            $apidoc = $openapi->toJson();

            file_put_contents(__DIR__ . '/../../doc/asserts/apidoc.json', $apidoc);
            $output->writeln('[success]: 生成文档成功');
        } catch (\Exception $e) {
            $output->writeln('[error]: ' . $e->getMessage());
        }
    }
}