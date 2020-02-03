<?php

namespace MalaveHaxiel\TableBuilder\Facades;

class Table extends \Illuminate\Support\Facades\Facade
{
    public static function getFacadeAccessor()
    {
        return 'tablebuilder';
    }
}
