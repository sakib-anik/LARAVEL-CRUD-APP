<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        @include('/layouts/nav')
        <a href="{{url('/customer/create')}}"><button class="btn btn-primary m-2 d-inline-block float-right">Add</button></a>
        <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>State</th>
                <th>Country</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                
            <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>@switch($customer->gender)
                    @case('M')
                        Male
                        @break
                    @case('F')
                        Female
                        @break
                    @default
                        Other
                @endswitch</td>
                <td>{{$customer->dob}}</td>
                <td>{{$customer->state}}</td>
                <td>{{$customer->country}}</td>
                <td>@if($customer->status == "1")
                        <a href=""><span class="badge badge-success">Active</span></a>
                    @else
                    <a href=""><span class="badge badge-danger">Inactive</span></a>
                    @endif</td>
                <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
      </table></div>
  </body>
</html>