<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        // Register moved components
        Blade::component('components.nav.nav', 'nav');
        Blade::component('components.nav.nav-link', 'nav-link');
        Blade::component('components.nav.nav-dropdown', 'nav-dropdown');
        Blade::component('components.nav.theme-toggle', 'theme-toggle');

        // Branding
        Blade::component('components.branding.logo', 'app-logo');
        Blade::component('components.branding.logo-icon', 'app-logo-icon');

        // Auth
        Blade::component('components.auth.header', 'auth-header');
        Blade::component('components.auth.session-status', 'auth-session-status');
        Blade::component('components.auth.action-message', 'action-message');

        // UI
        Blade::component('components.ui.icon', 'icon');
        Blade::component('components.ui.footer', 'footer');
        Blade::component('components.ui.placeholder-pattern', 'placeholder-pattern');
    }
}
