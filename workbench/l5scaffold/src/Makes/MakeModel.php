<?php

namespace Fromz\L5scaffold\Makes;

use Illuminate\Filesystem\Filesystem;
use Fromz\L5scaffold\Commands\ScaffoldMakeCommand;

class MakeModel {
    use MakerTrait;

    public function __construct(ScaffoldMakeCommand $scaffoldCommand, Filesystem $files)
    {
        $this->files = $files;
        $this->scaffoldCommandObj = $scaffoldCommand;

        $this->start();
    }


    protected function start()
    {

        $name = $this->scaffoldCommandObj->getObjName('Name');
        $modelPath = $this->getPath($name, 'model');

        if (! $this->files->exists($modelPath)) {
            $this->scaffoldCommandObj->call('make:model', [
                'name' => $name
            ]);
        }

    }

}
