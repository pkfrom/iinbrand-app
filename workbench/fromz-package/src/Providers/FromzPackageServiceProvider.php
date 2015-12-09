<?php

namespace Fromz\FromzPackage\Providers;

use Illuminate\Support\ServiceProvider;

class FromzPackageServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViews();
        $this->publishView();
        $this->publishConfig();
        $this->loadTranslations();
        $this->publishAssets();


        // Loading routes
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/../routes.php';
        }

        // Publishing public assets


        // Publishing migrations
        $this->publishes([
            __DIR__ . '/../migrations' => database_path('/migrations'),
        ], 'migrations');

        // Publishing seeds
        $this->publishes([
            __DIR__ . '/../seeds' => database_path('/seeds'),
        ], 'migrations');

    }

    private function loadViews()
    {
        $viewsPath = __DIR__ . '/../views';

        $this->loadViewsFrom($viewsPath, 'fromz');
    }

    private function publishView()
    {
        $viewsPath = __DIR__ . '/../views';
        $this->publishes([
            $viewsPath => base_path('resources/views/vendor/fromz'),
        ], 'views');
    }

    private function publishConfig()
    {
        $configPath = __DIR__ . '/../../config/fromz.php';//$this->packagePath('config/config.php');
        $this->publishes([
            $configPath => config_path('fromz.php'),
        ], 'config');

        $this->mergeConfigFrom($configPath, 'fromz');
    }

    private function loadTranslations()
    {
        $translationsPath = __DIR__ . '/../lang';//$this->packagePath('resources/lang');
        $this->loadTranslationsFrom($translationsPath, 'fromz');

        $this->publishes([
            $translationsPath => base_path('resources/lang/fromz'),
        ], 'translations');
    }

    private function publishAssets()
    {
        $this->publishes([
            __DIR__ . '/../assets' => public_path('fromz'),
        ], 'assets');
    }


    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('FromzPackageClass', 'Fromz\FromzPackage\FromzPackageClass');
    }

}
