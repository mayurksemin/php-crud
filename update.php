<?php
include 'database.php';
$id=$_GET['updateid'];
if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql ="update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    
    $result = mysqli_query($con,$sql); // Use mysqli_query instead of mysql_query
    
    if ($result) {
        echo'<script>alert("Account Updated successfully!");</script>';
    } else {
         die(mysqli_error($con)); 
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud operationn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <form method="post">
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Regrestration Form</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="process_login.php">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Enter your mobile number">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                        </div>
                        <button type="update" class="btn btn-primary" name="update">update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
  </body>
</html>
