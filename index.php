<?php
session_start();

if(isset($_SESSION['email'])) {
    header("Location: profile.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1>Welcome back!</h1>

                </div>
                <div class="panel-body">
                    <form action="login.php" method="post">
                        <label for="email">Enter your Email:</label>
                        <input type="text" name="email" class="form-control">

                        <br>

                        <label for="password">Enter your password:</label>
                        <input type="password" name="password" class="form-control">

                        <br>

                        <input type="submit" class="btn btn-primary btn-block" value="Login!">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>