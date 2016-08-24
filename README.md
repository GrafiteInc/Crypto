# Crypto

**Crypto** - Powerful and elegant cryptography tools for Laravel and Lumen

[![Codeship](https://img.shields.io/codeship/6ef9c860-2f4a-0134-3809-5ebc8f268022.svg?maxAge=2592000)](https://packagist.org/packages/yab/crypto)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/YABhq/Crypto/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/YABhq/Crypto/?branch=develop)
[![Packagist](https://img.shields.io/packagist/dt/yab/crypto.svg?maxAge=2592000)](https://packagist.org/packages/yab/crypto)
[![license](https://img.shields.io/github/license/mashape/apistatus.svg?maxAge=2592000)](https://packagist.org/packages/yab/crypto)

The Cryptograpy toolset Crypto provides a collection of methods for handy, encryption, decryption, uuid generating, app key generating and more.

##### Author(s):
* [Matt Lantz](https://github.com/mlantz) ([@mattylantz](http://twitter.com/mattylantz), matt at yabhq dot com)
* [Chris Blackwell](https://github.com/chrisblackwell) ([@chrisblackwell](https://twitter.com/chrisblackwell), chris at yabhq dot com)

## Requirements

1. PHP 5.6+
2. OpenSSL
3. Laravel 5.3 or Lumen

* For Lumen you must enable Facades: `$app->withFacades()`

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

## Documentation

[https://laracogs.com/docs/Services/crypto](https://laracogs.com/docs/Services/crypto)

## License
Crypto is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

### Bug Reporting and Feature Requests
Please add as many details as possible regarding submission of issues and feature requests

### Disclaimer
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
