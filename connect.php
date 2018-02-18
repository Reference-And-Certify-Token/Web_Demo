<?php
$servername = "localhost";
$username = "root";
$password = "mother22";
$dbname= "important_score";
//$db = new mysqli("localhost", "root", "mother22", "important_score");
    //Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Check Connection
    if ($conn->connect_error){

        die('Sorry, we are having some problems');
    }

 ?>
