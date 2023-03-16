<?php

namespace ShayanYS\IranianDatePicker\Components\Tables\Columns;

use Filament\Tables\Columns\Column;
use ShayanYS\IranianDatePicker\Traits\HasJsDateFormat;

class IranianDatePickerColumn extends Column
{
    use HasJsDateFormat;
    protected string $view = 'tables.columns.iranian-date-picker-column';
}
