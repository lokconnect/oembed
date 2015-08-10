<?php namespace Lokconnect\Oembed\Facades;

use Illuminate\Support\Facades\Facade;

class Oembed extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'oembed';
    }

}