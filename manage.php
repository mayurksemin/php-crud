<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserData</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
      .custom-bg {
        background-color: #3498db; /* You can change this to your desired color */
        color: #fff; /* Text color on the background */
        padding: 20px; /* Adjust the padding as needed */
      }
      .custom-table {
        border: 1px solid #dee2e6; /* Border color for the table */
        text-align: center; /* Center-align table content */
      }
    </style>
</head>
<body>
    <div class="col-md-15 text-center custom-bg">
        <h1 >welcom to ksemin</h1>
    </div>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="register.php" class="text-light">add user</a></button>
    </div>
    <div class="container mt-2">
      <div class="row justify-content-center">
        <div class="col-md-20">
          <div class="custom-table">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Sr.No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Password</th>
                  <th scope="col">Operation</th>
                </tr>
              </thead>
              <tbody>
              
                <?php 
                $sql="Select * from `crud`";
                $result=mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $name=$row['name'];
                        $email=$row['email'];
                        $mobile=$row['mobile'];
                        $password=$row['password'];
                        echo'<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$mobile.'</td>
                        <td>'.$password.'</td>
                        <td>
                        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                    </td>
                        </tr>';
                    }
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</body>
</html>