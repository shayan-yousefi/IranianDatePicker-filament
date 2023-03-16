<?php

namespace ShayanYS\IranianDatePicker\Components\Tables\Columns;

use Filament\Tables\Columns\Column;
use ShayanYS\IranianDatePicker\Traits\HasJsDateFormat;

class IranianDatePickerColumn extends Column
{
    use HasJsDateFormat;
    protected string $view = 'IranianDatePicker::tables.columns.iranian-date-picker-column';

    private string $format = 'Y/m/d';

    public function format($format){
        $this->format = $format;
    }

    public function getFormat(){
        return $this->evaluate($this->makeJsDateFormat($this->format));
    }
}
