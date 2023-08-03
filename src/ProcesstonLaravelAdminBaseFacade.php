<?php

namespace ProcesstonIO\ProcesstonLaravelAdminBase;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ProcesstonIO\ProcesstonLaravelAdminBase\Skeleton\SkeletonClass
 */
class ProcesstonLaravelAdminBaseFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'processton-laravel-admin-base';
    }
}
