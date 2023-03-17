![IraninaDatePicker-filament license](https://img.shields.io/github/license/shayan100/IraninaDatePicker-filament)
![IraninaDatePicker-filament size](https://img.shields.io/github/languages/code-size/shayan100/IraninaDatePicker-filament)
[![IraninaDatePicker-filament version](https://img.shields.io/packagist/v/shayanys/iranian-date-picker)](https://packagist.org/packages/shayanys/iranian-date-picker)

The IranianPersianDatePicker package was created to add the solar calendar field to the filament

thanks to [babakhani](https://github.com/babakhani "babakhani") for the wonderful [pwt.datepicker](https://github.com/babakhani/pwt.datepicker "pwt.datepicker") javascript package.

## Instalation
```bash
composer require shayanys/iranian-date-picker
```

## Usage
in your form schema write:
```php
IranianDatePickerField::make('date')
```
# Methods
The methods you can use in IranianDatePicker are as follows

## minDate
```php
IranianDatePickerField::make('date')->minDate(now());
```
This method receives a carbon date to determine the minimum date that the user can choose.

## maxDate
```php
IranianDatePickerField::make('date')->maxDate(now()->addDays(10));
```
This method receives a carbon date to determine the maximum date that the user can choose.

## format
```php
IranianDatePickerField::make('date')->format('Y-m-d');
```
The format method is used to determine the date format (the date is stored in the database with the same format).

## displayFormat
```php
IranianDatePickerField::make('date')->displayFormat('Y/m/d');

// Use with the format method
IranianDatePickerField::make('date')->format('Y-m-d')->displayFormat('Y/m/d');
```
Maybe you want the format displayed in the field to be different from the format stored in the database, for this you can use the displayFormat method.

## withoutTime
```php
IranianDatePickerField::make('date')->withoutTime();
```
The withoutTime method loads the date picker without the time picker

## withoutSeconds
```php
IranianDatePickerField::make('date')->withoutSeconds();
```
The withoutSeconds method loads the date picker and time picker without seconds

## hourStep
```php
IranianDatePickerField::make('date')->hourStep(2);
```
The hourStep method increments or decrements the hour counter in the time picker each time by the number passed to the method.

## minuteStep
```php
IranianDatePickerField::make('date')->minuteStep(2);
```
The minuteStep method increments or decrements the minute counter in the time picker each time by the number passed to the method.

## secondStep
```php
IranianDatePickerField::make('date')->secondStep(2);
```
The secondStep method increments or decrements the second counter in the time picker each time by the number passed to the method.

## disabledDates
```php
IranianDatePickerField::make('date')->disabledDates(['2023-03-17','2023-03-18','1402-01-01']);
```
The disabledDates method disables the dates passed with an array in the date selector (you can also enter a solar date).

## column
to show date in Iranian format use this column
```php
IranianDatePickerFieldColumn::make('date');

//you can use it with format method
IranianDatePickerFieldColumn::make('date')->format('Y/m/d');

```

## license
Freely distributable under the terms of the [MIT](https://opensource.org/licenses/MIT "MIT") license.
