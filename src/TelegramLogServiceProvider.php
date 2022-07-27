<?php

namespace YemeniOpenSource\TelegramLog;

use Illuminate\Support\ServiceProvider;

class TelegramLogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('telegramlog.php'),
            ], 'config');
        }

        $this->loadViewsFrom('/../resources/views/logging/telegram', 'laravel-telegram-logging');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'telegramlog');
    }
}
