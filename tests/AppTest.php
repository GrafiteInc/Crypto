<?php


class AppTest extends Orchestra\Testbench\TestCase
{
    protected $app;

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
        $app->make('Illuminate\Contracts\Http\Kernel');
    }

    protected function getPackageProviders($app)
    {
        return [
            \Yab\Crypto\CryptoProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Crypto'     => \Yab\Crypto\Services\Crypto::class,
        ];
    }

    public function setUp()
    {
        parent::setUp();
        $this->withFactories(__DIR__.'/../src/Models/Factories');
        $this->artisan('migrate', [
            '--database' => 'testbench',
            '--realpath' => realpath(__DIR__.'/../src/Migrations'),
        ]);
        $this->withoutMiddleware();
        $this->withoutEvents();
    }

    public function testCrypto()
    {
        $crypto = $this->app['Crypto'];
        $this->assertTrue(is_object($crypto));
    }
}
