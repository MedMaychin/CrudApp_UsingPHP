<?php 
    
    include "configdata.php";
    $id=$_GET["id"];

    $sql = "DELETE FROM users WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location:showdata.php");
    }else{
        echo "Error";
    }
?>