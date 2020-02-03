<?php

namespace MalaveHaxiel\TableBuilder;

use Illuminate\Support\ServiceProvider;

class TableBuilderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('tablebuilder', function() {
            return new TableBuilder($this->app->make('jscript'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
