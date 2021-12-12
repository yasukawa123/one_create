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

        // 開発者のみ許可
        Gate::define('system-only', function ($user) {
            return ($user->role == 1);
        });
        // 管理者以上（管理者＆システム管理者）に許可
        Gate::define('admin-higher', function ($user) {
            return ($user->role > 0 && $user->role <= 5);
        });
        // 一般ユーザ以上（つまり全権限　※クライアント）に許可
        Gate::define('client-higher', function ($user) {
            return ($user->role > 5 or $user->role <= 10);
        });
        // 一般ユーザ以上（つまり全権限　※デザイナー）に許可
        Gate::define('designer-higher', function ($user) {
            return ($user->role > 10 or $user->role <= 20);
        });
    }
}
