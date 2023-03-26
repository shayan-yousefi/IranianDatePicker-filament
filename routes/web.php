<?php
use Illuminate\Support\Facades\Route;
use ShayanYS\IranianDatePicker\Http\Controllers\AssetController;

Route::prefix('filament/IranianDatePicker')->name('IranianDatePicker.')->group(function(){
   Route::get('assets/{file}', AssetController::class)->where('file', '.*');
});
