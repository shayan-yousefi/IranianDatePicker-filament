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
        $valueWeekDay = Carbon::parse($value)->locale('fa')->getDaysFromStartOfWeek(Carbon::SATURDAY);

        if(in_array($valueWeekDay,$this->days)){
            $fail('IranianDatePicker::validation.weekDayNotIn')->translate();
        }
    }
}
