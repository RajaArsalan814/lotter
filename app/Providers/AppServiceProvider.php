<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
// use App\Models\Pdf;
// use App\Models\Setting;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $pdf = Pdf::first();
        // $setting = Setting::first();
        Paginator::useBootstrap();
        // View::share(['pdf'=>$pdf,'setting'=>$setting]);
    }
}
