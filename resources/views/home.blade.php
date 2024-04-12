<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .custom-table {
            border: 1px solid #dee2e6;
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 1rem;
            background-color: #fff;
            border-radius: .25rem;
        }
        .custom-table th,
        .custom-table td {
            padding: .75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }
        .custom-table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }
        .custom-table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">My Form</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5"> 
    <div class="row justify-content-center"> 
        <div class="col-md-8"> 
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary mb-3">
                        <a href="userForm" class="text-decoration-none" style="color:white;">Add Student</a>
                    </button>
                    <table class="table custom-table"> 
                        <thead class="thead-dark"> 
                            <tr>
                                <th scope="col">S.no</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Branch</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $counter=1; ?>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$counter}}</td>
                                <td>{{ $user->title }}. {{ $user->name }}</td>
                                <td>{{ $user->age }}</td>
                                <td>{{ $user->branch }}</td>
                                <td>
                                  <div class="d-flex g-1"> 
                                      <a href="{{ route('edit-user', ['id' => $user->id]) }}" class="btn btn-success mr-2">Edit</a>
                                      <form action="{{ route('update-flag', ['id' => $user->id]) }}" method="POST">
                                          @csrf
                                          @method('PATCH') 
                                          <button type="submit" class="btn btn-danger ml-2">Delete</button>
                                      </form>
                                  </div>
                              </td>

                            </tr>
                            <?php $counter++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
      
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.min.js"></script>

</body>
</html>
