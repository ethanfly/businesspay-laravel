<?php

namespace Ethanfly\BusinessPay;

use Ethanfly\BusinessPay\Contracts\ConfigRepository;
use Ethanfly\BusinessPay\Notify\NotifyHandler;
use Illuminate\Config\Repository;
use Illuminate\Support\ServiceProvider;

class BusinessPayServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/businesspay.php',
            'businesspay'
        );

        $this->app->singleton(ConfigRepository::class, function ($app) {
            return new class($app['config']) implements ConfigRepository
            {
                /**
                 * @var \Illuminate\Config\Repository
                 */
                private $config;

                public function __construct(Repository $config)
                {
                    $this->config = $config;
                }

                public function get($key, $default = null)
                {
                    return $this->config->get('businesspay.'.$key, $default);
                }

                public function set($key, $value)
                {
                    $this->config->set('businesspay.'.$key, $value);
                }
            };
        });

        $this->app->singleton('businesspay', function ($app) {
            return new BusinessPayManager($app->make(ConfigRepository::class));
        });

        $this->app->alias('businesspay', BusinessPayManager::class);

        $this->app->bind(NotifyHandler::class, function ($app) {
            return new NotifyHandler($app->make('businesspay')->account());
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/businesspay.php' => config_path('businesspay.php'),
            ], 'businesspay-config');
        }
    }
}
