<?php
declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.org
 * @document https://wiki.hyperf.org
 * @contact  group@hyperf.org
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\HttpServer;

use Hyperf\HttpServer\Command\StartServer;
use Hyperf\HttpServer\Command\StartServerFactory;
use Hyperf\HttpServer\Router\DispatcherFactory;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                Server::class => ServerFactory::class,
                StartServer::class => StartServerFactory::class,
                DispatcherFactory::class => DispatcherFactory::class,
            ],
            'commands' => [
                StartServer::class,
            ],
            'scan' => [
                'paths' => [
                    'vendor/hyperf/http-server/src',
                    'vendor/hyperf/hyperf/src/http-server/src'
                ],
            ],
        ];
    }
}
