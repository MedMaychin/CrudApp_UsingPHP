<?php

    include "configdata.php";


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>SHOW DATA USING PHP MYSQL</title>
  </head>
  <body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset mt-3">
                <table class="table table-striped table-bordered bg-light">
                <thead>
                    <tr class="bg-dark text-light text-center">
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PHONE</th>
                        <th>CITY</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM users";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                    ?>

                    <tr class="text-center">
                        <td><?= $row['id'];?></td>
                        <td><?= $row['name'];?></td>
                        <td><?= $row['email'];?></td>
                        <td><?= $row['phone'];?></td>
                        <td><?= $row['city'];?></td>
                        <td><a class="btn btn-primary" href="edit.php?id=<?= $row['id'];?>">Edit</a></td>
                        <td><a class="btn btn-danger" href="delete.php?id=<?= $row['id'];?>">Delete</a></td>
                    </tr>
                    <?php } } ?>
                </tbody>
                </table>


                <div class="form-group text-center">
                    <a class="btn btn-warning text-center" href="index.php">Insert New User</a>
                </div>
            </div>
        </div>
    </div>
    


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


  </body>
</html>
