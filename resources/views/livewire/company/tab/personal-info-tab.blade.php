<div>
    <h1>Personal info</h1>

    @foreach ($companies as $company)
        
    @endforeach
    <br>
    <h1>First Name</h1>
    <h1>{{ $companies[0]['first_name'] }}</h1>
    <br>

    <br>
    <h1>Last Name</h1>
    <h1>{{ $companies[0]['last_name'] }}</h1>
    <br>

    <br>
    <h1>Address Line 1</h1>
    <h1>{{ $companies[0]['addressline1'] }}</h1>
    <br>
    
</div>