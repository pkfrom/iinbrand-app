<?php
/**
 * Created by PhpStorm.
 * User: pkfrom
 * Date: 3/11/2558
 * Time: 12:19
 */

namespace Fromz\L5scaffold\Makes;

use Illuminate\Filesystem\Filesystem;
use Fromz\L5scaffold\Commands\ScaffoldMakeCommand;

class MakeRoute
{
    use MakerTrait;

    public function __construct(ScaffoldMakeCommand $scaffoldCommand, Filesystem $files,$routeContent)
    {
        $this->files = $files;
        $this->scaffoldCommandObj = $scaffoldCommand;
        $this->routeContent = $routeContent;

        $this->start();
    }

    protected function start()
    {
        $routePath = app_path('Http/routes.php');

        $routeContents = $this->scaffoldCommandObj->getFileContents($routePath);
        $routeContents .= "\n\n".$this->routeContent;
        $this->scaffoldCommandObj->writeFile($routePath,$routeContents);

    }
}