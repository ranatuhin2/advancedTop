<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
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
        $this->configRateLimiter(5,10);

    }


    protected function configRateLimiter($maxAttempts,$decaySeconds)
    {
        $key = 'Login|'.request()->ip();
        RateLimiter::for('limiter', function($maxAttempts) use($key): Limit {
            return Limit::perMinute($maxAttempts)->by($key);
        });

        if(RateLimiter::tooManyAttempts($key,$maxAttempts)){
            abort(429);
        }

        RateLimiter::hit($key,$decaySeconds);

        if(RateLimiter::availableIn($key) === 0){
            RateLimiter::cleanRateLimiterKey($key);
        }
        
    }
}
