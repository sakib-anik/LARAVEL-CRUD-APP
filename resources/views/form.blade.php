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
    
    <form action="{{url('/')}}/register" method="post">
        @csrf
        {{-- <pre>
        @php
            print_r($errors->all());
        @endphp
        </pre> --}}
        <div class="container">
            <h1 class="text-center">Registration</h1>
            
            {{-- <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('email')}}">
                <span class="text-danger">
                @error('email')
                  {{$message}}
                @enderror
                </span>
            </div> --}}
            @php
            $demo = 1;
            @endphp
            <x-input id="name" text="Name" type="text" :demo="$demo"/>
            <x-input id="email" text="Email" type="email"/>
            <x-input id="password" text="Passowrd" type="password"/>
            <x-input id="password confirmation" text="Confirm Passowrd" type="password"/>
            
            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    
  </body>
</html>