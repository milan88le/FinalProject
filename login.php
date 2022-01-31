<?php

session_start();


?>
<script src="js/script.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stil.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
        <h1 id="na">Welcome to Travel Agency</h1>
        <div class="row">
            <div class="col-md-6 login">
                <h2>Login</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <p><br>OR</p> 
                    <button type="submit" class="btn btn-primary"><a href="./signup.php">SignUp</a></button>
                    <p>If you not registered.</p>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>
</html>