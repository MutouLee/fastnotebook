<?php

namespace App\Providers;

use App\Models\Navigation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        Schema::defaultStringLength(191);

        if(!app()->runningInConsole()){
            //导航数据
            $navigation = Navigation::query()->where('parent_id', 0)->where('show', 1)->orderBy('order')->get();
            View::share(compact('navigation'));
        }
    }
}
