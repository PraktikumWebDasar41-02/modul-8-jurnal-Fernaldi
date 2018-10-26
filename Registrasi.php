<?php 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  </head>
  <body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <form method="POST" action="save.php">
  <center>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-1 col-form-label">Username</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputUsername3" name="username" placeholder="Username">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-1 col-form-label">Password</label>
    <div class="col-sm-3">
      <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputrePassword3" class="col-sm-1 col-form-label">Re-Password</label>
    <div class="col-sm-3">
      <input type="password" class="form-control" id="inputrePassword3" 
      name="repassword" placeholder="Re-Password">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-1 col-form-label">Email</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
    </div>
  </div>
 <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
  </div>
</center>
</form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>