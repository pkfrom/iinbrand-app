<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
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

       // Post::class => PostPolicy::class,
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */

    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        /*
        $gate->define('list-employee', function($user) {
            return $user->role === 'admin';
        });

        $gate->define('update-contact', function ($user, $contact) {
            return $user->id === $contact->user_id;
        });
        */
    }
}