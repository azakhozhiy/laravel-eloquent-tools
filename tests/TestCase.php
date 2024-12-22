<?php

declare(strict_types=1);

namespace AZakhozhiy\Laravel\Eloquent\Tools\Tests;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
        ];
    }
}
