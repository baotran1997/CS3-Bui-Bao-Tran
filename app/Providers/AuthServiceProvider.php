<?php

namespace App\Providers;

use App\Models\RoleConstant;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function ($user){
            return $user->role_id == RoleConstant::ROLE_ADMIN;
        });

        Gate::define('stock-keeper', function ($user) {
            return $user->role_id == RoleConstant::ROLE_STOCK_KEEPER;
        });

        Gate::define('guest-relation', function ($user) {
           return $user->role_id == RoleConstant::ROLE_GUEST_RELATION;
        });

        Gate::define('merchandise', function ($user) {
           return $user->role_id == RoleConstant::ROLE_MERCHANDISE;
        });
    }

}
