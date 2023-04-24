<?php

namespace ShayanYS\IranianDatePicker\Rules;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class weekDayNotIn implements ValidationRule
{
    public function __construct(private array $days = [])
    {

    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {

        $iranWeekDays = [
          Carbon::SATURDAY => 0,
          Carbon::SUNDAY => 1,
          Carbon::MONDAY => 2,
          Carbon::TUESDAY => 3,
          Carbon::WEDNESDAY => 4,
          Carbon::THURSDAY => 5,
          Carbon::FRIDAY => 6,
        ];

        $valueWeekDay = $iranWeekDays[Carbon::parse($value)->dayOfWeek];

        if(in_array($valueWeekDay,$this->days)){
            $fail('IranianDatePicker::validation.weekDayNotIn')->translate();
        }
    }
}
