<?php

namespace App\Providers;

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

        //
        Gate::define('superadmin', function($user) {
            return $user->role == 'superadmin';
        });

        Gate::define('rs-admin', function($user) {
            return $user->role == 'rs-admin';
        });

        Gate::define('rs-staff', function($user) {
            return $user->role == 'rs-staff';
        });

        Gate::define('rs-kasi', function($user) {
            return $user->role == 'rs-kasi';
        });

        Gate::define('rs-kabid', function($user) {
            return $user->role == 'rs-kabid';
        });

        Gate::define('sekretaris', function($user) {
            return $user->role == 'sekretaris';
        });

        Gate::define('kepala-dinas', function($user) {
            return $user->role == 'kepala-dinas';
        });

        Gate::define('rb-admin', function($user) {
            return $user->role == 'rb-admin';
        });

        Gate::define('rb-kasi', function($user) {
            return $user->role == 'rb-kasi';
        });

        Gate::define('rb-kabid', function($user) {
            return $user->role == 'rb-kabid';
        });
    }
}
