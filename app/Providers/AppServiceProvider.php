<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

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
        /* DB::beforeExecuting(function($sql, $params){
            echo  "<pre>";
            print_r($sql);
            print_r($params);
            echo "</pre>";
        }); */
    }
}