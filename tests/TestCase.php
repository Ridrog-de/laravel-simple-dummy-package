<?php

namespace Ridrog\SimpleDummy\Test;

use Ridrog\SimpleDummy\SimpleDummyServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            SimpleDummyServiceProvider::class,
        ];
    }
}