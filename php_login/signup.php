<?php

// include("dbconnect.php");

$servername = "mysql:host=localhost;dbname=php_login";
$username = "root";
$password = "";

try {

    $pdo = new PDO($servername, $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected";
} catch (PDOException $e) {
    echo "Not Connected";
}

if (isset($_POST['signup_btn'])) {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // echo $name ."<hr>";
    // echo $email ."<hr>";
    // echo $password ."<hr>";
    // echo $confirm_password ."<hr>";

    $sql = "INSERT INTO users(name,email,password,user_type_id) VALUES (' . $name . ',' . $email . ',' . $password . ',2)";

    $pdo->exec($sql);

    // if($password == $confirm_password)
    // {

    // }
    // else
    // {
    //     echo "<script> alert("Sorry Password Not Match") </script>";
    // }
}




?>
<!-- HTML CODE START HERE -->
<!doctype html>
<html lang="en">

<head>
    <title>Signup</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <form action="" method="post" class="m-auto col-12 col-lg-6">
            <h1 class="py-3 text-center">
                SignUp
            </h1>
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" id="" aria-describedby="helpId" placeholder="Full Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="username">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="Phone">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="confirm_password" id="" placeholder="Confirm Password">
            </div>
            <button type="submit" class="w-100 btn btn-danger" name="signup_btn">
                Signup
            </button>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>


<?php



?>