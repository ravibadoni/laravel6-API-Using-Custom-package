<?php

namespace qnectu\Qauth\Tests;

use qnectu\Qauth\Facades\Qauth;
use qnectu\Qauth\ServiceProvider;
use Orchestra\Testbench\TestCase;

class QauthTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'qauth' => Qauth::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
