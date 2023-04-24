<?php

namespace ShayanYS\IranianDatePicker\Components\forms;

use Carbon\Carbon;
use Filament\Forms\Components\Field;
use ShayanYS\IranianDatePicker\Rules\weekDayNotIn;
use ShayanYS\IranianDatePicker\Traits\HasJsDateFormat;

class IranianDatePickerField extends Field
{
    use HasJsDateFormat;

    protected string $view = 'IranianDatePicker::forms.components.iranian-date-picker-field';

    private ?int $minDate = null, $maxDate = null, $hourStep = 1, $minuteStep = 1, $secondStep = 1;

    private bool $withTimePicker = true, $withSeconds = true;

    private array $disabledDates = [], $disabledWeekDays = [];

    private string $timezone = 'Asia/Tehran';
    private ?string $format = 'Y-m-d',$displayFormat = null;

    public function minDate(Carbon $date)
    {
        $this->minDate = $date->valueOf();

        $this->rule("after_or_equal:{$date->format('Y-m-d')}");

        return $this;
    }

    public function format(string $format): static
    {
        $this->format = $format;

        $this->rule("date_format:{$format}");

        return $this;
    }

    public function displayFormat(string $format): static
    {
        $this->displayFormat = $format;

        return $this;
    }

    public function maxDate(Carbon $date): static
    {
        $this->maxDate = $date->valueOf();

        $this->rule("before_or_equal:{$date->format('Y-m-d')}");

        return $this;
    }

    public function withoutTime(): static
    {
        $this->withTimePicker = false;

        return $this;
    }

    public function withoutSeconds(): static
    {
        $this->withSeconds = false;

        return $this;
    }

    public function hourStep(int $step): static
    {
        $this->hourStep = $step;

        return $this;
    }

    public function minuteStep(int $step): static
    {
        $this->minuteStep = $step;

        return $this;
    }

    public function secondStep(int $step): static
    {
        $this->secondStep = $step;

        return $this;
    }

    public function disabledDates(array $dates): static
    {
        $this->disabledDates = $dates;

        return $this;
    }

    public function disabledWeekDays(array $days): static
    {
        $this->disabledWeekDays = $days;
        $this->rule(new weekDayNotIn($days));

        return $this;
    }

    public function getDisabledWeekDays(): array
    {
        return $this->evaluate($this->disabledWeekDays);
    }

    public function getMinDate(): ?int
    {
        return $this->evaluate($this->minDate);
    }

    public function getMaxDate(): ?int
    {
        return $this->evaluate($this->maxDate);
    }

    public function getHourStep(): int
    {
        return $this->evaluate($this->hourStep);
    }

    public function getMinuteStep(): int
    {
        return $this->evaluate($this->minuteStep);
    }

    public function getSecondStep(): int
    {
        return $this->evaluate($this->secondStep);
    }

    public function getWithTimePicker(): bool
    {
        return $this->evaluate($this->withTimePicker);
    }

    public function getWithSeconds(): bool
    {
        return $this->evaluate($this->withSeconds);
    }

    public function getDisabledDates(): array
    {
        return $this->evaluate($this->disabledDates);
    }

    public function getFormat(){
        return $this->evaluate($this->makeJsDateFormat($this->format));
    }

    public function getDisplayFormat(){
        return !empty($this->displayFormat) ? $this->evaluate($this->makeJsDateFormat($this->displayFormat)) : $this->evaluate($this->makeJsDateFormat($this->format));
    }

}
