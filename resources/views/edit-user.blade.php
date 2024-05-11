<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form with Navbar</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    .form-box {
        border: 2px solid #007bff;
        border-radius: 10px; 
        padding: 20px; 
        margin-top: 20px; 
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
</style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">My Form</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="form-box">
                <form  action="/update-user/{{$user->id}}" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                    <div class="form-group">
                            <label for="title">Title:</label>
                            <select id="title" name="title" value="{{ $user->title}}" class="form-control">
                            <option value="Mr" {{ $user->title == 'Mr' ? 'selected' : '' }}>Mr</option>
                            <option value="Mrs" {{ $user->title == 'Mrs' ? 'selected' : '' }}>Mrs</option>
                            </select>
                        </div>
                <div class="mb-3">
                  <label  class="form-label">name</label>
                  <input name="name" type="text" class="form-control" aria-describedby="Help" value="{{ $user->name}}" pattern="[A-Za-z. ]+" title="Please enter valid name" required>
                  <div  class="form-text">please enter  your name </div>
                </div>
                <div class="mb-3">
                  <label  class="form-label">age</label>
                  <input name="age" type="number" class="form-control" aria-describedby="Help"  value="{{ $user->age}}" pattern="[0-9]+" required>
                  <div  class="form-text">please enter  your age </div>
                </div>
                <div class="mb-3">
                  <label  class="form-label">branch</label>
                  <input name="branch" type="text" class="form-control" aria-describedby="Help" value="{{ $user->branch}}" pattern="[a-zA-Z\s]+" title="Please enter a valid Branch" required>
                  <div  class="form-text">please enter  your branch </div>
                </div>
 
  <button type="submit" class="btn btn-primary aline-center">Save</button>
</form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
