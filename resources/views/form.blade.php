<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form with Navbar</title>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    .form-box {
        border: 2px solid #007bff; /* Blue border */
        border-radius: 10px; /* Rounded corners */
        padding: 20px; /* Padding inside the box */
        margin-top: 20px; /* Margin from the top */
        box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Box shadow */
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
                    <form action="{{ route('save') }}" method="post">
                        @csrf <!-- CSRF token field -->

                         <div class="form-group">
                            <label for="title">Title:</label>
                            <select id="title" name="title" class="form-control">
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" pattern="[A-Za-z. ]+" required>
                            <div class="invalid-feedback">Please enter a valid name containing only characters and dots.</div>
                          </div>

                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" id="age" name="age" class="form-control"  required>
                        </div>

                        <div class="form-group">
                            <label for="branch">Branch:</label>
                            <input type="text" id="branch" name="branch" class="form-control" pattern="[a-zA-Z\s]+" title="Please enter only letters and spaces" required>
                            <div class="invalid-feedback">Please enter only letters and spaces.</div>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
