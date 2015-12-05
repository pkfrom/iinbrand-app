<?php

namespace Fromz\LaravelAdminLte;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadViews();

        $this->loadTranslations();

        $this->publishConfig();

        $this->publishAssets();
    }

    private function loadViews()
    {
        $viewsPath = $this->packagePath('resources/views');

        $this->loadViewsFrom($viewsPath, 'adminlte');

        $this->publishes([
//            $viewsPath => base_path('resources/views/vendor/adminlte'),
        ], 'views');
    }

    private function loadTranslations()
    {
        $translationsPath = $this->packagePath('resources/lang');

        $this->loadTranslationsFrom($translationsPath, 'adminlte');

        $this->publishes([
            $translationsPath => base_path('resources/lang/vendor/adminlte'),
        ], 'translations');
    }

    private function publishConfig()
    {
        $configPath = $this->packagePath('config/adminlte.php');

        $this->publishes([
      //      $configPath => config_path('adminlte.php'),
        ], 'config');

        $this->mergeConfigFrom($configPath, 'adminlte');
    }

    private function publishAssets()
    {
        $this->publishes([
            $this->packagePath('resources/assets')      => public_path('themes/adminlte'),
           // $this->packagePath('resources/assets/bootstrap') => public_path('themes/adminlte/bootstrap'),
           // $this->packagePath('resources/assets/plugins')   => public_path('themes/adminlte/plugins'),
           // $this->packagePath('resources/assets/script')   => public_path('themes/adminlte/script'),
        ], 'assets');
    }

    private function packagePath($path)
    {
        return __DIR__ . "/../$path";

    }

}