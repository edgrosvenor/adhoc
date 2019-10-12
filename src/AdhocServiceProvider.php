<?php

namespace Adhoc;

use Adhoc\Commands\TestCommand;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AdhocServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
            TestCommand::class,
        ]);
    }
}
