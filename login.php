<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
     <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Login</title>
</head>
<body>

    <header>
        <section>
            <?php
                if (isset($_SESSION['uId'])) {
                    echo "<h1> Logged In!</h1>";
                }
            ?>
        </section>

                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header">
                                Login
                        </div>
                        <div class="collapsible-body">
                            <form action="includes/login.php" method="POST">
                            <input type="text" name="uid" placeholder="Username / Email">
                            <input type="password" name="pass" placeholder="Password">
                            <button type="submit" name="submit">Login</button>
                            </form>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                        Sign Up
                        <div class="collapsible-body">
                            
                            <h1>Sign Up!</h1>
                    
                        </div>
                    </li>
                </ul>


    </header>
      <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/device.js"></script>
</body>
</html>