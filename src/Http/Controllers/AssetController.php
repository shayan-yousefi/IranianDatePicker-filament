<?php

namespace ShayanYS\IranianDatePicker\Http\Controllers;

use Filament\Http\Controllers\AssetController as FilamentAssetController;
use Illuminate\Support\Str;

class AssetController extends FilamentAssetController
{
    public function __invoke($file)
    {

        if (Str::endsWith($file,'.woff')){
            return $this->pretendResponseIsFile(__DIR__ . '/../../../resources/fonts/woff/' . $file,'application/font');
        } elseif (Str::endsWith($file,'woff2')){
            return $this->pretendResponseIsFile(__DIR__ . '/../../../resources/fonts/woff2/' . $file,'application/font');
        }

        abort(404);
    }
}
