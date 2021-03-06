<?php

namespace OptimistDigital\NovaInputFilter;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FilterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-input-filter', __DIR__ . '/../dist/js/filter.js');
        });
    }
}
