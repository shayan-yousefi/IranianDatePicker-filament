<x-dynamic-component
    :component="$getFieldWrapperView()"
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-action="$getHintAction()"
    :hint-color="$getHintColor()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>
    <div x-data="{ state: $wire.entangle('{{ $getStatePath() }}').defer }">

        <input
            class='block w-full transition duration-75 rounded-lg shadow-sm outline-none focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70
            dark:bg-gray-700 dark:text-white dark:focus:border-primary-500'
            readonly
            x-init="
            $('#visible_{{str_replace('.','\\\.',$getId())}}').persianDatepicker({
            initialValue:false,
            altField: '#{{str_replace('.','\\\.',$getId())}}',
            altFieldFormatter:function (unix){
                let date = new persianDate(unix).toLocale('en').toCalendar('gregorian').format(@js($getFormat()));
                state = date;
                return date;
            },
            calendar:{
                persian:{
                    locale: '{{\Illuminate\Support\Facades\Config::get('app.locale')}}'
                },
            },
                format: @js($getDisplayFormat()),
                @if($getMinDate()) minDate: @js($getMinDate()),@endif
                @if($getMaxDate()) maxDate: @js($getMaxDate()),@endif

                @if($getWithTimePicker())
                    timePicker:{
                        enabled:true,

                        hour:{
                            step:@js($getHourStep()),
                        },

                        minute:{
                            step:@js($getMinuteStep()),
                        },
                        second:{
                            step:@js($getSecondStep()),
                            enabled: @js($getWithSeconds())
                        },
                    },
                @endif
                checkDate:function (unix){
                    if($.inArray(new persianDate(unix).toLocale('en').format('YYYY-MM-DD'),@js($getDisabledDates())) !== -1 || $.inArray(new persianDate(unix).toCalendar('gregorian').toLocale('en').format('YYYY-MM-DD'),@js($getDisabledDates())) !== -1){
                        return false;
                    }
                    return true;
                }
            });


        " type="text" id="visible_{{$getId()}}">

        <input type="hidden" id="{{$getId()}}" x-model="state">

    </div>
</x-dynamic-component>
