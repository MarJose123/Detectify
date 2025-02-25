<?php

namespace MarJose123\Detectify;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MarJose123\Detectify\Commands\DetectifyCommand;

class DetectifyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('detectify')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_detectify_table')
            ->hasCommand(DetectifyCommand::class);
    }
}
