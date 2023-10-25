<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Str::macro('containsInSensitive', function($haystack, $needles)
        {
            foreach ((array) $needles as $needle) {
                if ($needle !== '' && mb_stripos($haystack, $needle) !== false) {
                    return true;
                }
            }

            return false;
        });

    }
}
