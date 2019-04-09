<?php

namespace Grafite\Crypto;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Grafite\Crypto\Services\Crypto;

class CryptoProvider extends ServiceProvider
{
    /**
     * Boot method.
     *
     * @return void
     */
    public function boot()
    {
        /*
        |--------------------------------------------------------------------------
        | Blade Directives
        |--------------------------------------------------------------------------
        */

        // Crypto
        Blade::directive('crypto_encrypt', function ($expression) {
            return "<?php echo Crypto::encrypt($expression); ?>";
        });

        Blade::directive('crypto_decrypt', function ($expression) {
            return "<?php echo Crypto::encrypt($expression); ?>";
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        /*
        |--------------------------------------------------------------------------
        | Register the Services
        |--------------------------------------------------------------------------
        */

        $this->app->singleton('Crypto', function () {
            return new Crypto();
        });

        if (class_exists('Illuminate\Foundation\AliasLoader')) {
            $loader = AliasLoader::getInstance();
            $loader->alias('Crypto', \Grafite\Crypto\Services\Crypto::class);
        } else {
            class_alias(\Grafite\Crypto\Services\Crypto::class, 'Crypto');
        }

        /*
        |--------------------------------------------------------------------------
        | Register the Commands
        |--------------------------------------------------------------------------
        */

        $this->commands([
            \Grafite\Crypto\Console\KeyMaster::class,
        ]);
    }
}
