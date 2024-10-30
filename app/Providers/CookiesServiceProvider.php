<?php

namespace App\Providers;

use Whitecube\LaravelCookieConsent\CookiesServiceProvider as ServiceProvider;
use Whitecube\LaravelCookieConsent\Facades\Cookies;

class CookiesServiceProvider extends ServiceProvider
{
    /**
     * Define the cookies users should be aware of.
     */
    protected function registerCookies(): void
    {
        // Register Laravel's base cookies under the "required" cookies section:
        Cookies::essentials()
               ->session()
               ->csrf();

        // Register all Analytics cookies at once using one single shorthand method:
        Cookies::analytics()
               ->google(
                   id: 'UA-155885850-1',
                   anonymizeIp: true
               );
    }
}
