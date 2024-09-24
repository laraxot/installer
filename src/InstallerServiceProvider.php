<?php

namespace Laraxot\Installer;

<<<<<<< HEAD
<<<<<<< HEAD
use Laraxot\Installer\Commands\InstallCommand;
=======
use Laraxot\Installer\Commands\InstallerCommand;
>>>>>>> 64e260f (Fix styling)
=======
use Laraxot\Installer\Commands\InstallerCommand;
>>>>>>> 64e260fb9b0d0ec8bb50f3e40aefcab9c2957756
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
