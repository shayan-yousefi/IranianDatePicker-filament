<?php

namespace ShayanYS\IranianDatePicker;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class IranianDatePickerServiceProvider extends PluginServiceProvider
{

    protected array $beforeCoreScripts = [
        'jquery' => __DIR__ . '/../resources/inc/persianDatePicker/js/jquery.js',
        'persianDateJs' => __DIR__ . '/../resources/inc/persianDatePicker/js/persianDate.js',
        'persianDatePickerJs' => __DIR__ . '/../resources/inc/persianDatePicker/js/persianDatePicker.js',
    ];

    protected array $styles = [
        'IranSansFont' => __DIR__ . '/../resources/fonts/fontiran.css',
        'persianDatePickerCss' => __DIR__ . '/../resources/inc/persianDatePicker/css/persianDatePicker.css',
        'persianDatePickerCustomCss' => __DIR__ . '/../resources/inc/persianDatePicker/css/customDatePicker.css',
    ];

    public function configurePackage(Package $package): void
    {
        $package->name('IranianDatePicker')->hasViews();
    }
}
