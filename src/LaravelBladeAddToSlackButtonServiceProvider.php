<?php

namespace Vblinden\LaravelBladeAddToSlackButton;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Vblinden\LaravelBladeAddToSlackButton\Commands\LaravelBladeAddToSlackButtonCommand;

class LaravelBladeAddToSlackButtonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-blade-add-to-slack-button')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_blade_add_to_slack_button_table')
            ->hasCommand(LaravelBladeAddToSlackButtonCommand::class);
    }
}
