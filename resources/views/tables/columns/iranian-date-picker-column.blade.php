<div x-text="new persianDate(@js($getState()->toDateString())).toLocale(@js(\Illuminate\Support\Facades\Config::get('app.locale'))).format(@js($getFormat()))">

</div>
