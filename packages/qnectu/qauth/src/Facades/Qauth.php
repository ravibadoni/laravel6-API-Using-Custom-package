<?php

namespace qnectu\Qauth\Facades;

use Illuminate\Support\Facades\Facade;

class Qauth extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'qauth';
    }
}
