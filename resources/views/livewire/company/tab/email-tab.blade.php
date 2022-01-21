<div>
    <h1>Email info</h1>

    @foreach ($configs as $config)
        @if ($config['domain'] == "email")
            <br>
            <h1>{{ ucfirst(trim(str_replace("email","",str_replace("_"," ",$config['key'])))) }}</h1>
            <h1>{{ $config['value'] }}</h1>
            <br>
        @endif
    @endforeach
</div>