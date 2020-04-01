<?php
namespace App\Providers;
use App\rs;
use Illuminate\Support\ServiceProvider;
class DynamicClassnameProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view)
        {
            $view->with('rs_array', rs::all());
        });
    }
}
