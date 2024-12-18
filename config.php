<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "skin-care";

    $conn = mysqli_connect($localhost, $username, $password, $dbname);

    $pdo = new PDO("mysql:host=$localhost;dbname=$dbname", $username, $password)
?>