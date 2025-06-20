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
        $this->configRateLimiter(10,10);
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

        RateLimiter::increment($key,$decaySeconds);

        echo RateLimiter::increment($key, $decaySeconds);
        // RateLimiter::clear($key);
    }
}
