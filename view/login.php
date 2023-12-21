<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login2.css">
    <title>LOGIN</title>
    <script src="../controller/loginvalidation.js"></script>
</head>

<body>
    <center>


        <div class="login-form">

            <h1>Login</h1>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p> <br>
            <?php } ?>

            <form name="loginform" action="../controller/loginvalidation.php" method="post" onsubmit="return form()">

                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="enter email"> <br><br>
                <center><span class="validate" id="emailerror"></span></center>
                <br>

                <label for="userpassword">Password</label>
                <input type="password" name="userpassword" id="userpassword" placeholder="enter password"> <br> <br>
                <center><span class="validate" id="userpassworderror"></span></center>
                <br>
                <input class="login-button" type="submit" value="login" name="login"><br>

                <div class="remember-me">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember Me</label>
                </div>
            </form>


        </div>

    </center>

    <?php
    session_start();
    if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {


        $_SESSION['flag'] = true;
        $_SESSION['email'] = $_COOKIE['email'];
        $_SESSION['password'] = $_COOKIE['password'];

        header("Location: ../view/staff.php");
        exit();
    }
    ?>

</body>

</html>