<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin_user',function($user){
            return $user->user_role_obj->role_name=='Admin';
        });

        Gate::define('typical_user',function($user){
            return $user->user_role_obj->role_name=='Typical';
        });

        Gate::define('super_user',function($user){
            return $user->user_role_obj->role_name=='Super';
        });
    }
}
