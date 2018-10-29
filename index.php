<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Page</title>
    <link rel="stylesheet" href="Bootstrap/css/styles.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
</head>
<body id="login">
<div class="row fr">
    <div class="col-md-1">

    </div>
    <div class="col-md-4 lgn">
        <form action="login-student-process.php" method="GET">
            <input required class="field__input" type="text" name="username" placeholder="Username">
            <input required class="field__input" type="password" name="password" placeholder="Password">
            <div class="lgn_bt">
                <a href="admin-login.php">Admin Login</a>
                <button type="submit" name="btn_submit">Login</button>
        </form>
    </div>
</div>
<div class="col-md-4 lgn_2">
    <div class="lgn_spn">
        <h1 class="lgn_2_txt">Welcome</h1>
        <p class="lgn_2_txt">Student Portal System</p>
        <p class="lgn_2_txt">Enter username and password to login</p>
        <span class="lgn_2_txt">New here?</span> <a href="">Sign Up today!</a>
    </div>
</div>
<div class="col-md-1">

</div>
<div class="ftr">
    <p class="lgn_2_txt"> Copyrights Reserved <?php echo date('Y')?></p>
</div>
</div>
</body>
</html>