<?php

namespace Laraxot\Installer;

use Laraxot\Installer\Commands\InstallerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class InstallerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('installer')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_installer_table')
            ->hasCommand(InstallerCommand::class);
    }
}
