<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;

class ExportActionsCommand extends Command
{
    protected $signature = 'export:actions';

    protected $description = 'Command description';

    public function handle(): void
    {
        $controllers = [];

        foreach (Route::getRoutes()->getRoutes() as $route)
        {
            $action = $route->getAction();

            if (array_key_exists('controller', $action))
            {
                // You can also use explode('@', $action['controller']); here
                // to separate the class name from the method
                $controllers[] = $action['controller'];
            }
        }
        echo(implode(PHP_EOL, array_unique($controllers)));
    }
}
