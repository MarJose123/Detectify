<?php

namespace MarJose123\Detectify\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MarJose123\Detectify\Detectify
 */
class Detectify extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MarJose123\Detectify\Detectify::class;
    }
}
