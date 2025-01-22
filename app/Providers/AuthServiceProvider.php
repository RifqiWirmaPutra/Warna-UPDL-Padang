<?php

namespace App\Providers;

use app\Models\Admin;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // Gate::define('create-account', function ($admin) {
        //     // Logika izin di sini, misalnya hanya admin yang dapat membuat akun
        //     return $admin->role === Admin::ROLE_SUPERADMIN;
        // });
        $this->registerPolicies();

        Gate::define('create-account', function ($admin) {
            return $admin->isAdmin(); // Menggunakan metode isAdmin() yang telah Anda tambahkan
        });
        
    }
}
