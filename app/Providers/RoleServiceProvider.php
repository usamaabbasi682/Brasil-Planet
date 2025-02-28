<?php

namespace App\Providers;

use App\Enums\RoleEnum;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class RoleServiceProvider extends ServiceProvider
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
        View::share('adminRole', RoleEnum::ADMIN->value);
        View::share('supplierRole', RoleEnum::SUPPLIER->value);
    }
}
