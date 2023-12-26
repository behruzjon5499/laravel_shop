<?php

namespace App\Providers;

use App\Models\Orders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
       View::composer('components.main',function ($view){
           $view->with('order_count',Orders::where('user_id',Auth::id())->where('status',Orders::STATUS_PROCESS)->count());
       });

    }
}
