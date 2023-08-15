<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container_1{
            margin-top: 10px;
            display: grid;
            grid-template-areas: 
		        'grid_item1 grid_item2';
            column-gap: 50px;
        }
        .submit {
            width: 100%;
            margin-top: 15px;
        }
        textarea, .dob{
            width: 100%;
            border-radius: 5px;
        }
        
    </style>
  </head>
  <body>
    @include('./layouts/nav')
    <h1 class="text-center" style="color:rgba(25, 163, 255, 0.884)">Customer Registration</h1>
    <form action="{{url('/')}}/customer" method="post">
        @csrf
    <div class="container">
        <div class="container_1">
            <div class="subcontainer"><x-customer_input_star type="text" name="name" id="name" label="Name: " class="grid_item1"/>
                <span class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </span></div>
        
        <div class="subcontainer"><x-customer_input_star type="email" name="email" id="email" label="Email: " class="grid_item2"/>
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span></div>
        <div class="subcontainer"><x-customer_input_star type="password" name="password" id="password" label="Password: " class="grid_item3"/>
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </span></div>
        <div class="subcontainer"><x-customer_input_star type="password" name="confirm_password" id="c_password" label="Confirm Password: " class="grid_item4"/>
            <span class="text-danger">
                @error('confirm_password')
                    {{$message}}
                @enderror
            </span></div>
        <x-customer_input type="text" name="country" id="country" label="Country: " class="grid_item5"/>
        <x-customer_input type="text" name="state" id="state" label="State: " class="grid_item6"/></div>
        <label for="address">Address:</label><br>
        <textarea name="address" id="address"></textarea>
        <div class="container_1">
            <div class="grid_item1">
                <label>Gender:</label><br>
                <input type="radio" name="gender" id="" value="M">&nbsp;Male&nbsp;&nbsp;
                <input type="radio" name="gender" id="" value="F">&nbsp;Female&nbsp;&nbsp;
                <input type="radio" name="gender" id="" value="O">&nbsp;Other
            </div>
            <div class="grid_item2">
                <label for="dob">Date of birth:</label><br>
	            <input type="text" name="dob" id="dob" placeholder="dd-----yyyy" onfocus="(this.type='date')" class="dob" onblur="(this.type='text')">
            </div>
        </div>
          <button class="btn btn-primary submit">Submit</button>
    </div>
    </form>
  </body>
</html>