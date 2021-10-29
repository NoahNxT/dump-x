<?php

namespace Codana\DumpX;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codana\DumpX\DumpX
 */
class DumpXFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'dumpx';
    }
}
