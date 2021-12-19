<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <!-- top navigation -->
  <x-main_nav />

  <div class="flex">

    <!-- left navigation -->
    <div>
      <x-left_nav />
    </div>

    <!-- content here  -->
    <div class="w-full">
      <x-user_managment />
    </div>



  </div>








</body>

</html>