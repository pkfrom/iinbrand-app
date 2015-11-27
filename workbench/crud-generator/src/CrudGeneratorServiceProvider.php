<?php

namespace Fromz\CrudGenerator;

use Illuminate\Support\ServiceProvider;

class CrudGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(
            'Fromz\CrudGenerator\Commands\CrudCommand',
            'Fromz\CrudGenerator\Commands\CrudControllerCommand',
            'Fromz\CrudGenerator\Commands\CrudModelCommand',
            'Fromz\CrudGenerator\Commands\CrudMigrationCommand',
            'Fromz\CrudGenerator\Commands\CrudViewCommand'
        );
    }
}
