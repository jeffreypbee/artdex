<?php

namespace App\Providers;

use Statamic\Statamic;
use Statamic\Facades\Collection;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Statamic::vite('app', [
        //     'resources/js/cp.js',
        //     'resources/css/cp.css',
        // ]);

        Collection::computed('pokemon', 'formatted_number', function ($entry, $value) {
            if ($entry->number < 10){
                return '000' . $entry->number;
            } else if ($entry->number < 100) {
                return '00' . $entry->number;
            } else if ($entry->number < 1000) {
                return '0' . $entry->number;
            }
            return $entry->number;
        });
    }
}
