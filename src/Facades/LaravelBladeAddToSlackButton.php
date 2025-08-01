<?php

namespace Vblinden\LaravelBladeAddToSlackButton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vblinden\LaravelBladeAddToSlackButton\LaravelBladeAddToSlackButton
 */
class LaravelBladeAddToSlackButton extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Vblinden\LaravelBladeAddToSlackButton\LaravelBladeAddToSlackButton::class;
    }
}
