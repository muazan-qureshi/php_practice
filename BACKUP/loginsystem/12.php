<?php


try {
    //  Connection start here
    $servername = "mysql:host=localhost;dbname=loginsystem";
    $username = "root";
    $password = "";

    $pdo = new PDO($servername, $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // var_dump($pdo);

    // COnnection end here

    if (isset($_POST['signup_btn'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];

        // photo
        $files = $_FILES['profilephoto'];
        // var_dump($files);


        // echo "$firstname  $lastname <br>";
        // echo "$uname <br>";
        // echo "$email<br>";
        // echo "$password <br>";
        // echo "$dob <br>";
        // echo "$gender <br>";
        // echo "$photo <br>";
        if ($password == $confirmpassword) {

            $photo = $files['name'];
            move_uploaded_file($files['tmp_name'], "profilephoto/.$photo");


            // SQL QUERY FOR INSERTING DATA INTO DATABASE
            $sql = "INSERT INTO `users`(`firstname`, `lastname`, `username`, `email`, `phone`, `dob`, `gender`, `photo`, `password`) VALUES (:firstname, :lastname, :username, :email, :phone, :dob, :gender, :photo, :password)";

            $query = $pdo->prepare($sql);
            $query->bindParam("fname", $firstname, PDO::PARAM_STR);
            $query->bindParam("lastname", $lastname, PDO::PARAM_STR);
            $query->bindParam("username", $uname, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $query->bindParam("phone", $phone, PDO::PARAM_STR);
            $query->bindParam("gender", $gender, PDO::PARAM_STR);
            $query->bindParam("photo", $photo, PDO::PARAM_STR);
            $query->bindParam("password", $password, PDO::PARAM_STR);
            $query->bindParam("dob", $dob, PDO::PARAM_STR);

            $query->execute();
            // header("location:signin.php");
        } else {
            echo "<script> alert('Sorry, Password not match!') </script>";
        }
    }
} catch (PDOException $e) {
    // echo 'Error';
    echo $e->getMessage();
}

?>
<!-- Html START herE -->
<!doctype html>
<html lang="en">

<head>
    <title>Sign Up Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <form action="" method="post" class="m-auto col-12 col-lg-6" enctype="multipart/form-data">
            <h1 class="py-3 text-center">
                Sign Up
            </h1>
            <div class="row">
                <div class="form-group col-6">
                    <input type="text" class="form-control" name="firstname" id="" aria-describedby="helpId" placeholder="Full Name">
                </div>
                <div class="form-group col-6">
                    <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Last Name">
                </div>
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
                <input type="date" class="form-control" name="dob" id="" aria-describedby="helpId" placeholder="Date of Birth">
            </div>
            <div class="form-group">
                <!-- <label for="inputState">State</label> -->
                <select id="inputState" name="gender" class="form-control">
                    <option selected>Choose Your Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Custom</option>
                </select>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="confirmpassword" id="" placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <small>Please Attach Your Profile Photo (Max Size 2MB)</small>
                <br>
                <input name="profilephoto" type="file" class="form-control-file">
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        I Agree the <a href="">Terms & Conditions</a>
                    </label>
                </div>
            </div>
            <button type="submit" class="w-100 btn btn-danger" name="signup_btn">
                Signup
            </button>
            <p class="text-center py-3">
                Already Have an Account <a href="signin.php">Sign In</a>
            </p>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>