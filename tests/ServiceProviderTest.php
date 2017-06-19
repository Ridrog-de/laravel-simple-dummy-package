<?php

namespace Ridrog\SimpleDummy\Test;

use Illuminate\Support\ServiceProvider;
use Ridrog\SimpleDummy\SimpleDummyServiceProvider;
use Ridrog\SimpleDummy\Test\Testcase as TestCase;


class ServiceProviderTest extends TestCase
{
    /**
     *
     * @var SimpleDummyServiceProvider
     */
    private $provider;

    /**
     * Setup
     */
    public function setUp()
    {
        parent::setUp();

        $this->provider = $this->app->getProvider(SimpleDummyServiceProvider::class);

    }

    /**
     * Tear Down
     */
    public function tearDown()
    {
        unset($this->provider);

        parent::tearDown();
    }

    /** @test */
    public function it_can_be_instantiated()
    {
        $expectations = [
            ServiceProvider::class,
            SimpleDummyServiceProvider::class
        ];

        foreach ($expectations as $expected) {
            $this->assertInstanceOf($expected, $this->provider);
        }
    }
}