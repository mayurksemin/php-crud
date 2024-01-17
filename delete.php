<?php
include 'database.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `crud` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo'<script>alert("Account Deleted successfully!");</script>';
        header('location:manage.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>