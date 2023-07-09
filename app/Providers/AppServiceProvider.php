<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Carbon\Carbon;

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
        Blade::directive('money', function ($amount) {
            return "<?php echo number_format($amount,-1, '.','.') .'USD' ?>";
        });
        Blade::directive('card_number', function ($number) {
            return "<?php echo number_format($number,-2, ' ',' ') ?>";
        });

    }
}
