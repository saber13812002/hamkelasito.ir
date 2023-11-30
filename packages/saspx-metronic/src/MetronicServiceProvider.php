<?php

namespace Saspx\metronic;

use Illuminate\Support\ServiceProvider;

class MetronicServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->publishes([
            __DIR__ . '/asset' => public_path('asset')
        ]);
        $this->loadViewsFrom(__DIR__ . '/view', 'MetronicView');
        $this->mergeConfigFrom(__DIR__ . '/config/menu.php', 'metronic_menu_config');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        require __DIR__ . '/helper.php';
        parent::register(); // TODO: Change the autogenerated stub
    }
}