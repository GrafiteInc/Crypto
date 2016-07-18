<?php

namespace Yab\Crypto\Services;

use Illuminate\Support\Facades\Config;
use Yab\Crypto\Encryption\CryptoEncrypter;
use Yab\Crypto\Encryption\LaravelCrypto;

class Crypto
{
    /**
     * Make the value shareable.
     *
     * @return CryptoEncrypter
     */
    public static function shareable()
    {
        $key = Config::get('app.key')[0] ?: 'someRandomString';

        return new CryptoEncrypter($key, $key);
    }

    /**
     * Encrypt using the Laravel Crypto.
     *
     * @param string $value
     *
     * @return string
     */
    public static function encrypt($value)
    {
        return (new LaravelCrypto())->encrypt($value);
    }

    /**
     * Decrypt using the Laravel Crypto.
     *
     * @param string $value
     *
     * @return string
     */
    public static function decrypt($value)
    {
        return (new LaravelCrypto())->decrypt($value);
    }

    /**
     * Generate a UUID.
     *
     * @return string
     */
    public static function uuid()
    {
        return (new LaravelCrypto())->uuid();
    }
}
