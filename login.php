<?php

$login_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $username_kader = "kader";
    $password_kader = "kader";
    
    $username_admin = "admin";
    $password_admin = "admin";
    
    if ($username === $username_kader && $password === $password_kader) {
        header('location: dashboard-kader.php');
        exit();
    } elseif ($username === $username_admin  && $password === $password_admin) {
        header('location: dashboard-admin.php');
        exit();
    } else {
        $login_error = "username atau password salah";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
    background-color: green;    
    text-align: center;
    font-family: Arial, sans-serif;
    margin: 0;
}

.card {
    background-color: greenyellow;
    border: 1px solid black;
    border-radius: 8px;
    margin-top: 15%;
    margin-left: 0%;
    display: inline-block;
    box-shadow: 0 4px 8px rgba(0,0,0,0,0.1);
    padding: 30px 40px;
    flex-direction: column;
    width: 300px;
    height: 300px;

}
    </style>
</head>
<body>
    <div class="card">
    <h1><strong>LOGIN</strong></h1>
        <div class="container">
            <form action="" method="POST">
                <label>username</label> <br>
                <input type="text" name="username" id="username" placeholder="masukkan username" required><br>
                <label>password</label> <br>
                <input type="password" name="password" id="password" placeholder="masukkan password" style="margin-bottom: 5px;" required> <br>
                <button type="submit">Login</button>
                <?php if ($login_error != ""): ?>
                    <p style="color: red; text-align:center;"><?= $login_error ?></p>
                <?php endif ?>
            </form>
        </div>
    </div>
</body>
</html>