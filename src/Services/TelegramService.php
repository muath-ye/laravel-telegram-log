<?php

namespace YemeniOpenSource\TelegramLog\Services;

use YemeniOpenSource\TelegramLog\Exceptions\TelegramHandler;
use Monolog\Logger;

/**
 * Class TelegramService
 */
class TelegramService
{
    /**
     * Create a custom Monolog instance.
     *
     * @param  array  $config
     * @return \Monolog\Logger
     */
    public function __invoke(array $config)
    {
        return new Logger(
            config('app.name', 'UNKNOWN APP NAME'),
            [
                new TelegramHandler($config),
            ]
        );
    }
}
