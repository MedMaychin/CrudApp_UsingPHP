<?php

    include "configdata.php";

    $result ="";

    if (isset($_POST['submit'])){
        $name = test_input($_POST['name']) ;
        $email = test_input($_POST['email']);
        $phone = test_input($_POST['phone']);
        $city = test_input($_POST['city']);

        $sql = "INSERT INTO users (name, email, phone, city) VALUES ('$name', '$email', '$phone', '$city')";

        if (mysqli_query($conn, $sql)) {
            $result = "one record Inserted Successgully";
        }else{
             $result = "Somethings went wrong" .mysql_connect_error($conn);
        }
       
    }


    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
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

    <title>CRUD APP USING PHP MYSQL</title>
  </head>
  <body class="bg-dark">
    <div class="container">
        <div class="row p-2">
            <div class="col-lg-4 offset-lg-4 bg-light text-dark mt-4 p-3 rounded">
                <h3 class="p-2 text-center"> Insert to database </h3>
                <hr class="bg-light">
                <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" required> 
                        </div>
                    
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                         
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" class="form-control" placeholder="Phone" required> 
                        </div>
                        
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" class="form-control" placeholder="City" required> 
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" value="Insert" name="submit" class="btn btn-primary btn-block" placeholder="Insert" > 
                        </div>
                        <div class="form-group text-center">
                            <a href="showdata.php" class="text-dark lead">View Records</a>
                        </div>                        

                        <div class="form-group text-center">
                            <p class="lead"> <?php echo $result; ?> </p>
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
