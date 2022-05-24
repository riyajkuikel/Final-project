
<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Username or Email Has Already Taken'); </script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Registration Successful'); </script>";
        }
        else{
            echo
            "<script> alert('Password Does Not Match'); </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Registration</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<h2>Registration</h2>
<form class="" action="" method="post" autocomplete="off">
    <label for="name">Name : </label>
    <input type="text" name="name" id = "name" required value="" class="form-control"> <br>
    <label for="username">Username : </label>
    <input type="text" name="username" id = "username" required value="" class="form-control"> <br>
    <label for="email">Email : </label>
    <input type="email" name="email" id = "email" required value="" class="form-control"> <br>
    <label for="password">Password : </label>
    <input type="password" name="password" id = "password" required value="" class="form-control"> <br>
    <label for="confirmpassword">Confirm Password : </label>
    <input type="password" name="confirmpassword" id = "confirmpassword" required value="" class="form-control"> <br>
    <button type="submit" name="submit" class="btn btn-dark">Register</button>
</form>
<br>
<a href="login.php">Login</a>
</body>
</html>