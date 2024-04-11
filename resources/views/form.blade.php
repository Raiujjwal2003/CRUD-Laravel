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
    #main{
        width:90%;
        height:80%;
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
    }
</style>
<body>
    <div id="main" >

   
    <form  action="save" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <!-- @csrf -->

  <div class="mb-3">
    <label  class="form-label">name</label>
    <input name="name" type="text" class="form-control" aria-describedby="Help">
    <div  class="form-text">please enter  your name </div>
  </div>
  <div class="mb-3">
    <label  class="form-label">age</label>
    <input name="age" type="text" class="form-control" aria-describedby="Help">
    <div  class="form-text">please enter  your age </div>
  </div>
  <div class="mb-3">
    <label  class="form-label">branch</label>
    <input name="branch" type="text" class="form-control" aria-describedby="Help">
    <div  class="form-text">please enter  your branch </div>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

    </div>
    
</body>
</html>