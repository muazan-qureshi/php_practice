<?php

$server = "mysql:host=localhost;dbname=loginsystem";
$user = "root";
$pass = "";

$pdo = new PDO($server, $user, $pass);

// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if (isset($_POST['btn'])) {
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];


    $query = $pdo->prepare("INSERT INTO w (name,email,password,username) VALUES(:name1,:email1,:password1,username1)");
    $query->bindParam("name1", $_POST['name'], PDO::PARAM_STR);
    $query->bindParam("username1", $_POST['username'], PDO::PARAM_STR);
    $query->bindParam("email1", $_POST['email'], PDO::PARAM_STR);
    $query->bindParam("password1", $_POST['password'], PDO::PARAM_STR);
    $query->execute();
}

?>
<!-- HTML CODE BEGINS HERE -->
<!doctype html>
<html lang="en">

<head>
    <title>SIGNUP 1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- form BEgins here -->
    <form action="signup1.php" method="POST" class="col-6">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
            <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
        </div>
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="">
            <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
            <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
            <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
        </div>
        <button type="submit" name="btn" class="btn btn-info">
            Signup
        </button>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>