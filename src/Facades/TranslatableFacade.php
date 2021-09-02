<?php

namespace Laravelir\Translatable\Facades;

use Illuminate\Support\Facades\Facade;

class TranslatableFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'translatable'; // TODO: Change the accessor name
    }
}
