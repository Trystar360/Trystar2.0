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
        <nav>
            <div class="mainWrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
                <div class="navLogin">
                    <?php
                        if (isset($_SESSION['uId'])) {
                            echo '<form action="includes/logout.php" method="POST">
                                    <button type="submit" name="submit">Logout</button>
                                </form>';
                        }else{
                            echo'<form action="includes/login.php" method="POST">
                            <input type="text" name="uid" placeholder="Username / Email">
                            <input type="password" name="pass" placeholder="Password">
                            <button type="submit" name="submit">Login</button>
                            </form>
                            <a href="signup.php">Sign up!</a>';
                        }
                    ?>
                </div>
            </div>
        </nav>
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
                        <i class="material-icons">filter_drama</i>
                        First
                        <span class="new badge">4</span></div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                        <i class="material-icons">place</i>
                        Second
                        <span class="badge">1</span></div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                </ul>


    </header>
    
</body>
</html>