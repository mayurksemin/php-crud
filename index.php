<?php

include("database.php");
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];


    $sql="select * from crud where email='$email' and password= '$password'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1){
        echo'<script>alert("Login success");</script>';
        header("location:manage.php");
    }
    else{
        echo'<script>alert("Login Failed!");</script>';
    }


}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header">
                      <h4>Login Form</h4>
                  </div>
                  <div class="card-body">
                      <form method="post">
                          <div class="mb-3">
                              <label for="email" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                          </div>
                          <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                          </div>
            
                          <button type="submit" class="btn btn-primary" name="login">Login</button>
                      </form>
                  </div>
                  <div class="card-footer text-center">
                      <p>Don't have an account? <a href="register.php">Register here</a></p>
                  </div>
              </div>
          </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-e5yoXWkF2z2FRv0D3Zr2XTjbPunxmJ9aIuPIEZ0q/2TwvqE+0w77z2XRPbdabvq" crossorigin="anonymous"></script>
  </body>
</html>
