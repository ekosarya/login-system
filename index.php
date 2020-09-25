<?php require "header.php"; ?> 

<main>
    <section class="user-page">
        <?php 
            if(isset($_SESSION['userId'])) {
                echo '<p>Your are login.</p>';
            }
            else {
                echo '<p>Your are logged out!</p>';
            }        
        ?>     
    </section>
</main>

<?php require "footer.php"; ?>