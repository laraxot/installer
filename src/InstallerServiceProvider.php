<?php

namespace Laraxot\Installer;

<<<<<<< HEAD
use Laraxot\Installer\Commands\InstallCommand;
=======
use Laraxot\Installer\Commands\InstallerCommand;
>>>>>>> 64e260f (Fix styling)
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
            ->hasCommand(InstallCommand::class);
    }
}
