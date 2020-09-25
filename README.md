<h1>Login System</h1>
<hr>

<p>Login System is a simple website built using a little bit of pure html and css in the frontend. With procedural php 7.4.2 and mysqli to handle the logic of sign up and login process. The project is another milestone of my learning process to become a full stack developer. It is based on a
<a href="https://www.youtube.com/watch?v=LC9GaXkdxF8">youtube tutorial</a>.</p><br>

<p>In order to run this project locally, first of all create a database named "login_system", then
run the following sql query:
    
    CREATE TABLE users ( 
        idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
        uidUsers TINYTEXT NOT NULL,
        emailUsers TINYTEXT NOT NULL,
        pwdUsers LONGTEXT NOT NULL
    );

</p>

Cheers!