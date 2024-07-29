<?php

namespace App\Providers;

use App\View\Composers\TodoComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use \Illuminate\Support\Facades\Log;
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
        View::composer('todo', TodoComposer::class);
        Log::info('Typesense Configuration: ' . print_r(config('scout.typesense'), true));
    }
}
