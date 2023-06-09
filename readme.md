![IraninaDatePicker-filament license](https://img.shields.io/github/license/shayan100/IraninaDatePicker-filament)
![IraninaDatePicker-filament size](https://img.shields.io/github/languages/code-size/shayan100/IraninaDatePicker-filament)
[![IraninaDatePicker-filament version](https://img.shields.io/packagist/v/shayanys/iranian-date-picker)](https://packagist.org/packages/shayanys/iranian-date-picker)

The IranianDatePicker-filament package was created to add the Iranian calendar field to the filament

thanks to [babakhani](https://github.com/babakhani "babakhani") for the wonderful [pwt.datepicker](https://github.com/babakhani/pwt.datepicker "pwt.datepicker") javascript package.

## Instalation
```shell
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

## hourStep, minuteStep, and secondStep
```php
IranianDatePickerField::make('date')->hourStep(2);
```
```php
IranianDatePickerField::make('date')->minuteStep(2);
```
```php
IranianDatePickerField::make('date')->secondStep(2);
```
You may also customize the input interval for increasing the hours / minutes / seconds using the hoursStep() , minutesStep() or secondsStep();

## disabledDates
```php
IranianDatePickerField::make('date')->disabledDates(['2023-03-17','2023-03-18','1402-01-01']);
```
The disabledDates method disables the dates passed with an array in the date selector (you can also enter a Iranian date).

## disabledDates
```php
IranianDatePickerField::make('date')->disabledWeekDays([0,1,2]); // this will disable saturday, sunday and monday

/*
 * saturday => 0
 * sunday => 1
 * monday => 2
 * tuesday => 3
 * wednesday => 4
 * thursday => 5
 * friday => 6
 */
```
this method will disable passed days in date picker and add rule to ensure selected date is not in disabled days by this method

## column
to show date in Iranian format use this column
```php
IranianDatePickerColumn::make('date');

//you can use it with format method
IranianDatePickerColumn::make('date')->format('Y/m/d');
```

## CHANGELOG
you can see change logs in [CHANGELOG.md](https://github.com/shayan100/IranianDatePicker-filament/blob/1.x/CHANGELOG.md)

## license
Freely distributable under the terms of the [MIT](https://opensource.org/licenses/MIT "MIT") license.

---

 <!--
This font is considered a proprietary software. To gain information about the laws regarding the use of these fonts, please visit www.fontiran.com
--------------------------------------------------------------------------------------
This set of fonts are used in this project under the license: (PY0845KQ)
--------------------------------------------------------------------------------------
...-->
<a target="_blank" href="https://fontiran.com/license/PY0845KQ">
    <p align="center">
        <img src="https://fontiran.com/storage/uploads/images/2023/1/badge1-minDN14Uj.png" width="50" height="50" alt="فونت ایران‌سنس">
        <br>
        This package legally <br> uses IranSans font.
    </p>
</a>
