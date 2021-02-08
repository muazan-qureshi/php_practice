<?php

    $servername = "mysql:host=localhost;dbname=php_login";
    $username = "root";
    $password = "";

    try
    {
        
    $pdo = new PDO($servername,$username,$password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "Connected";

    }
    catch(PDOException $e)
    {
        echo "Not Connected";
    }
?>