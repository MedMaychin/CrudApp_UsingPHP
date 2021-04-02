<?php

    $dbhost = "localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="appcrudphp";

    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if (!$conn){
        die("Could not connect to database" .mysql_connect_error());
    }
 

?>