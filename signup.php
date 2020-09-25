<?php require "header.php"; ?> 

<main>
   <section class="sign-up">
       <h1>sign up</h1>

       <?php
            if(isset($_GET['error'])) {
                if($_GET['error'] == "emptyfields") {
                    echo '<p class="signup-error">Fill in all fields!</p>';
                }
                else if($_GET['error'] == "invaliduidmail") {
                    echo '<p class="signup-error">Invalid username and email!</p>';
                }
                else if($_GET['error'] == "invaliduid") {
                    echo '<p class="signup-error">Sign up successful!</p>';
                }
                else if($_GET['error'] == "invalidmail") {
                    echo '<p class="signup-error">Invalid email!</p>';
                }
                else if($_GET['error'] == "passwordcheck") {
                    echo '<p class="signup-error">Your passwords do not match!</p>';
                }
                else if($_GET['error'] == "usertaken") {
                    echo '<p class="signup-error">Username is already taken!</p>';
                }
            }
            else if(isset($_GET['signup']) == 'success') {
                echo '<p class="signup-success">Sign up successful!</p>';
            }
       ?>

       <form action="includes/signup.inc.php" method="post" class="sign-up-form"> 
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="Email">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat Password">
            
            <button type="submit" name="signup-submit">sign up</button>
       </form>
   </section>
</main>

<?php require "footer.php"; ?>