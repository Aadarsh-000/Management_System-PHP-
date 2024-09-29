<?php

    if(isset($_POST['login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

    if($username == "admin" && $password == "pass"){

        session_start();
        $_SESSION['user'] = "admin";
        header("Location:index.php");
        
    }
    else {
        echo "<script>alert('Username: admin & Password: pass');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:grey">
    <h1 class="text-center text-light mt-4">Login Here: </h1>
    <div class="container mt-5" style="max-width: 600px;">
        <div class="login-form">
            <form action="login.php" method="post">
                <div class="form-field mb-4">
                    <input class="form-control" type="text" name="username" placeholder="Enter Username" required>
                </div>
                <div class="form-field mb-4">
                    <input class="form-control" type="password" name="password" placeholder="Enter Password" required>
                </div>
                <div class="form-field mb-4">
                    <input class="btn btn-primary" type="submit" value="Login" name="login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>