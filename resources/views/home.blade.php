<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    html, body{
        width:100%;
        height:100%;
    }
    #main{
        position: absolute;
        width:90%;
        height:90%;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
    }
</style>
<body>

<div id="main" >


<button class="btn btn-primary mb-3" ><a href="userForm" class="text-decoration-none" style="color:white;">Add Student</a> </button>
<table class="table ">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Branch</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->age }}</td>
      <td>{{ $user->branch }}</td>
      <td>
      <a href="{{ route('edit-user', ['id' => $user->id]) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('delete-user', ['id' => $user->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
      
</body>
</html>
