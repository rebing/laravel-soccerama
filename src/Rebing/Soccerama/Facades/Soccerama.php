<?php

namespace Rebing\Soccerama\Facades;

use Illuminate\Support\Facades\Facade;

class Soccerama extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'soccerama';
    }

}