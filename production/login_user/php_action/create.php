<?php

require_once '../../db_connect.php';

if($_POST) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $date_birth = $_POST['date_birth'];
    $email = $_POST['email'];
    $hashpassword = $_POST['password'];
    $password = md5($hashpassword);

    $sql = "INSERT INTO users (id_user, username, name, gender, address, contact, date_birth, email, password, master_access, active) VALUES ('', '$username', '$name', '$gender', '$address', '$contact', '$date_birth','$email', '$password', 0, 1)";
    if($connect->query($sql) === TRUE) {
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bogor Community in Action | Success</title>

    <!-- Bootstrap -->
    <link href="../../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../../../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
      <div class="login_wrapper">
          <div class="text-center text-center">
            <h1><i class="fa fa-check-circle-o" style="font-size: 250px "> </i></h1>
            <h1>Success!</h1>
            <p>Your account has been created. You can now login to Bogor Community in Action.
            </p>
            <div class="mid_center">
                <a class="btn btn-default" type="button" href="../login.php" >Back to login</a>

            </div>
          </div>
        </div>

  </body>
</html>
