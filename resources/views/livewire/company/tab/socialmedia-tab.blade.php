<div>
    <h1>Social Media info</h1>

    @foreach ($configs as $config)
        @if ($config['domain'] == "social_media")
            <br>
            <h1>{{ ucfirst(str_replace("_"," ",$config['key'])) }}</h1>
            <h1>{{ $config['value'] }}</h1>
            <br>
        @endif
    @endforeach
</div>
