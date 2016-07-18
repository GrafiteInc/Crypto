# Crypto

**Crypto** - Cryptography tools for Laravel and Lumen

The Cryptograpy toolset Crypto provides a collection of methods for handy, encryption, decryption, uuid generating, app key generating and more.

##### Author(s):
* [Matt Lantz](https://github.com/mlantz) ([@mattylantz](http://twitter.com/mattylantz), matt at yabhq dot com)
* [Chris Blackwell](https://github.com/chrisblackwell) ([@chrisblackwell](https://twitter.com/chrisblackwell), chris at yabhq dot com)

## Requirements

1. PHP 5.6+
2. OpenSSL
3. Laravel or Lumen

----

### Installation

Start a new Laravel project:
```php
composer create-project laravel/laravel your-project-name
```

Then run the following to add Crypto
```php
composer require "yab/crypto"
```

Add this to your providers:
```php
Yab\Crypto\CryptoProvider::class
```

##### After these few steps you have the following tools at your fingertips:

#### Facades
```php
Crypto::uuid();
Crypto::encrypt('string');
Crypto::decrypt('enc-string');
Crypto::shared()->encrypt('string');
Crypto::shared()->decrypt('enc-string');
```

#### Helpers
```php
crypto_uuid();
crypto_encrypt('string');
crypto_decrypt('enc-string');
```

#### Commands
```php
php artisan crypto:key
```

## License
Crypto is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

### Bug Reporting and Feature Requests
Please add as many details as possible regarding submission of issues and feature requests

### Disclaimer
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
