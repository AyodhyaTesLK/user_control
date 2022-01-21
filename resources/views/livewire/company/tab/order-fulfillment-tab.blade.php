<div>
    <h1>Order Fulfillment info</h1>

    @foreach ($configs as $config)
        @if ($config['domain'] == "order_fulfillment")
            <br>
            <h1>{{ ucfirst(str_replace("_"," ",$config['key'])) }}</h1>
            <h1>{{ $config['value'] }}</h1>
            <br>
        @endif
    @endforeach
</div>