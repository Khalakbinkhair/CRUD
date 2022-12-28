<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

  
    <th><b><a href='newfile'><button type="button" class="btn btn-success">Create New File</button></a>
     <center> All Records</center></b></th>
    
         
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($user as $u)
          <tr>
            <th scope="row">{{$u->id}}</th>
            <td>{{$u->name}}</td>
            <td>{{$u->email}}</td>
            <td><a href='/edit/{{ $u->id }}'> <button type="button" class="btn btn-success">Edit</button></a> 
              <a href='/delete/{{ $u->id }}'> <button type="button" class="btn btn-danger">Delete</button></a> </td>
          </tr>
          @endforeach

        </tbody>
      </table>
</body>
</html>