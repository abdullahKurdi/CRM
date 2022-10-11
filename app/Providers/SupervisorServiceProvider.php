<?php

namespace App\Providers;

use App\Models\Permission;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class SupervisorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if(request()->is('supervisor/*') or request()->is('supervisor') ){

            view()->composer('*', function ($view){
                if (!Cache::has('supervisor_side_menu')){
                    Cache::forever('supervisor_side_menu', Permission::tree());
                }
                $supervisor_side_menu = Cache::get('supervisor_side_menu');
                $view->with([
                    'supervisor_side_menu'=> $supervisor_side_menu,
                ]);
            });
        }
    }
}
