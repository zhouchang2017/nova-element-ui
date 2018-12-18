<?php

namespace NightKit\NovaElements;

use Laravel\Nova\Nova;
use Illuminate\Support\ServiceProvider;

class NovaElementsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
//            $this->publishes([
//                __DIR__.'/../vendor/nova-element-ui/dist' => public_path('vendor/nova-element-ui'),
//            ], 'public');
            $this->publishes([
                __DIR__.'/../dist/fonts' => public_path('fonts'),
            ], 'public');
        }

        Nova::serving(function ($event) {
            Nova::script('nova-element-ui', __DIR__.'/../dist/js/nova-element-ui.js');
            Nova::style('nova-element-ui', __DIR__.'/../dist/css/nova-element-ui.css');
//            Nova::script('nova-element-ui', __DIR__.'/../dist/nova-element-ui.js');
        });

    }

    public function register()
    {
        $this->app->register('NightKit\NovaElements\Fields\ElementAutocomplete\FieldServiceProvider');
        $this->app->register('NightKit\NovaElements\Fields\ElementCheckbox\FieldServiceProvider');
        $this->app->register('NightKit\NovaElements\Fields\ElementInput\FieldServiceProvider');
        $this->app->register('NightKit\NovaElements\Fields\ElementNumber\FieldServiceProvider');
        $this->app->register('NightKit\NovaElements\Fields\ElementRadio\FieldServiceProvider');
        $this->app->register('NightKit\NovaElements\Fields\ElementSelect\FieldServiceProvider');
        $this->app->register('NightKit\NovaElements\Fields\ElementTabs\FieldServiceProvider');
        $this->app->register('NightKit\NovaElements\Fields\ElementCascader\FieldServiceProvider');
        $this->app->register('NightKit\NovaElements\Fields\ElementBelongsTo\FieldServiceProvider');
    }

}
