<?php

namespace Yab\Crypto\Encryption;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class LaravelCrypto extends CryptoEncrypter
{
    /**
     * Construct the Laravel version of the LaracogsEncrypter
     * using the app key and the session ID.
     */
    public function __construct()
    {
        $app_key = getenv('APP_KEY') ?: 'unsafe';
        $api_key = Auth::id() ?: 0;

        parent::__construct($app_key, $api_key);
    }
}
