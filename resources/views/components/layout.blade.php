<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
</head>

<body>


    <!-- top navigation -->
    <x-main_nav />

    <div class="flex">

        <!-- left navigation -->

        <x-left_nav />


        <!-- content here  -->

        {{ $slot }}


    </div>

</body>

</html>
