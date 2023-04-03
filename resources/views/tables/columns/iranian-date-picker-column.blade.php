@php
    $state = $getState();
    if(is_string($getState())){
        $state = \Carbon\Carbon::parse($state);
    }
@endphp

<div
    x-text="new persianDate(@js($state->valueOf())).toLocale(@js(\Illuminate\Support\Facades\Config::get('app.locale'))).format(@js($getFormat()))">

</div>
