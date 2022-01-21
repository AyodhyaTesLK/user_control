<div>
    <h1>SMS info</h1>

    @foreach ($configs as $config)
        @if ($config['domain'] == "sms")
            <br>
            <h1>{{ ucfirst(trim(str_replace("sms","",str_replace("_"," ",$config['key'])))) }}</h1>
            <h1>{{ $config['value'] }}</h1>
            <br>
        @endif
    @endforeach

</div>