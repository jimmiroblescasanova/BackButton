<?php

namespace Jimmiroblescasanova\BackButton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jimmiroblescasanova\BackButton\BackButton
 */
class BackButton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Jimmiroblescasanova\BackButton\BackButton::class;
    }
}
