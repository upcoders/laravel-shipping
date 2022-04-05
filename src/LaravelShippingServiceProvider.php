<?php

namespace Upcoders\LaravelShipping;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Upcoders\LaravelShipping\Commands\LaravelShippingCommand;

class LaravelShippingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-shipping')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_shipping_table')
            ->hasCommand(LaravelShippingCommand::class);
    }
}
