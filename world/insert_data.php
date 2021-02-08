<?php

$servername = "localhost";
$database = "world";
$username = "root";
$password = "";

$connection = new mysqli($servername,$username,$password,$database);

print_r($connection);
echo "<hr>";

// $person_data = "INSERT INTO persons (name,email,phone,age,city) VALUES ('Muazan Qureshi','muazanqureshi3@gmail.com','+923010301642',20,'Karachi')";

$result = $connection->query($person_data);


?>