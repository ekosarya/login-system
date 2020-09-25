<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login System</title>
</head>
<body>
    
    <header>
        <nav class="navigation">
            <div class="container">
                <a href="index.php" class="logo">
                    Logo
                </a>

                <ul class="navbar">
                    <li><a href="index.php">home</a></li>
                    <li><a href="#">portfolio</a></li>
                    <li><a href="#">about me</a></li>
                    <li><a href="#">contact</a></li>
                </ul>

                <div class="navbar-form">
                    <?php    
                        if(isset($_SESSION['userId'])) {
                            echo '<form action="includes/logout.inc.php" method="post" class="signout-form">
                                    <button type="submit" name="logout-submit">logout</button>
                                </form>';
                        }
                        else {
                            echo '<form action="includes/login.inc.php" method="post" class="login-form">
                                    <input type="text" name="mailuid" placeholder="Username/Email" class="email-input">
                                    <input type="password" name="pwd" placeholder="Password" class="password-input">
                                    <button type="submit" name="login-submit">login</button>
                                </form>
    
                                <a href="signup.php" class="signup-btn">sign up</a>';
                        }                           
                    ?>
                </div>
            </div>    
        </nav>
    </header>