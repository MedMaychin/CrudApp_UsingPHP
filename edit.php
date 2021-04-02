<?php

    include "configdata.php";

    $id=$_GET["id"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");

    $row = mysqli_fetch_assoc($result);

    if(isset($_POST['submit'])){
        $id = $_GET['id'];
        $name = $_POST['name'] ;
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];

        $sql = "UPDATE  users  SET  name ='$name', email ='$email', phone ='$phone' , city ='$city' WHERE id = '$id'";

        if (mysqli_query($conn, $sql)) {
            header("Location:showdata.php");
        }
       
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Update databse USING PHP MYSQL</title>
  </head>
  <body class="bg-dark">
    <div class="container">
        <div class="row p-2">
            <div class="col-lg-4 offset-lg-4 bg-light text-dark mt-4 p-3 rounded">
                <h3 class="p-2 text-center"> Update database </h3>
                <hr class="bg-light">
                <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" required
                            value="<?=
                                $row['name'];
                            ?>"
                            > 
                        </div>
                    
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required
                            value="<?=
                                $row['email'];
                            ?>"
                            >
                        </div>
                         
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" class="form-control" placeholder="Phone" required
                            value="<?=
                                $row['phone'];
                            ?>"
                            > 
                        </div>
                        
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" class="form-control" placeholder="City" required
                            value="<?=
                                $row['city'];
                            ?>"
                            >
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" value="Update" name="submit" class="btn btn-primary btn-block" placeholder="Update"> 
                        </div>
                        <div class="form-group text-center">
                            <a href="index.php" class="text-dark lead">Insert</a><br>
                            <a href="showdata.php" class="text-danger lead">Edit</a>
                        </div> 
                </form>
            </div>
        </div>
    </div>
    


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


  </body>
</html>
