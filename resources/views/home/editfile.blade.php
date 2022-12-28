<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>

    <form action="{{route('editsubmit')}}"  method="post" enctype="multipart/form-data" >
        {{@csrf_field()}}



    <a href="/record"><button type="button" class="btn btn-success"><- Back</button></a>
    <table class="table">
        <thead>
            <div><center><h1><b><u>Welcome To Registration </u><b></h1></center></div>
                <center>
                
                   <input type="hidden" name='id' value='{{$user->id}}'>

                <b>Name:<input type='text' name='name' value="{{$user->name}}" ></br></br>
{{--                 
                @error('name')
                
                <span>{{$message}} </span>
                
                 @enderror --}}                
                 <b>Email:<input type='email' name='email' value="{{$user->email}}"> </br></br>
                
                 {{-- @error('email')
                
                <span>{{$message}} </span>
                
                 @enderror --}}
                 <button type="submit" class="btn btn-info">Update</button>

                
               
                
        </tbody>
</form>
</body>
</html>