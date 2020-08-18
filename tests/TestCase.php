<?php

namespace codicastudio\PasswordStrength\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use codicastudio\PasswordStrength\PasswordStrengthServiceProvider;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            PasswordStrengthServiceProvider::class,
        ];
    }
}
