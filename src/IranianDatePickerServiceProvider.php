<?php

namespace ShayanYS\IranianDatePicker;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class IranianDatePickerServiceProvider extends PluginServiceProvider
{

    protected array $beforeCoreScripts = [
        'jquery' => __DIR__ . '/../resources/js/jquery.js',
        'persianDateJs' => __DIR__ . '/../resources/js/persianDate.js',
        'persianDatePickerJs' => __DIR__ . '/../resources/js/persianDatePicker.js',
    ];

    protected array $styles = [
        'persianDatePickerCss' => __DIR__ . '/../resources/css/persianDatePicker.css',
    ];

    public function configurePackage(Package $package): void
    {
        $package->name('IranianDatePicker')->hasViews();
    }
}
