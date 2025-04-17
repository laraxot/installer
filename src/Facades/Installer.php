<?php

namespace Laraxot\Installer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laraxot\Installer\Installer
 */
class Installer extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Laraxot\Installer\Installer::class;
    }
}
