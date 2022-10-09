<?php

namespace Modules\Support;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use ReflectionClass;

class BaseServiceProvider extends ServiceProvider
{

    protected $namespace;

    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->mapApiRoutes();
    }

    protected function mapApiRoutes()
    {
        Route::group([
            'namespace' => $this->namespace,

        ], function ($router) {
            $routesPath = $this->getCurrentDir() . '/routes/api.php';

            if (file_exists($routesPath)) {
                require $routesPath;
            }
        });
    }

    protected function getCurrentDir()
    {
        $classInfo = new ReflectionClass($this);

        return dirname($classInfo->getFileName());
    }
}
