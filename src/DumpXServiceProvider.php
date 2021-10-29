<?php

namespace Codana\DumpX;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Codana\DumpX\Commands\DumpXCommand;

class DumpXServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('dump-x')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_dump-x_table')
            ->hasCommand(DumpXCommand::class);
    }
}
