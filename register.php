<?php
    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CloSpotify</title>
</head>
<body>
    
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
                <p>
                    <label for="loginUsername">Username</label>
                    <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g raymond.reddington" required>
               </p>
               <p>
                   <label for="loginPassword">Password</label>
                    <input id="loginPassword" name="loginPassword" type="password" placeholder="Your Password" required>
               </p>   
               
               <button type="submit" name="loginButton">Log In</button>
        </form>


        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
                <p>
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" placeholder="e.g raymond.reddington" required>
               </p>

               <p>
                    <label for="firstName">First Name</label>
                    <input id="firstName" name="firstName" type="text" placeholder="e.g Raymond" required>
               </p>

               <p>
                    <label for="lastName">Last Name</label>
                    <input id="lastName" name="lastName" type="text" placeholder="e.g Reddington" required>
               </p>

               <p>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="e.g raymond.reddington@blacklist.tv" required>
               </p>

               <p>
                    <label for="cemail">Confirm Email</label>
                    <input id="cemail" name="cemail" type="email" placeholder="e.g raymond.reddington@blacklist.tv" required>
               </p>

               <p>
                   <label for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="Your Password" required>
               </p> 
               
               <p>
                   <label for="cpassword">Confirm Password</label>
                    <input id="cpassword" name="cpassword" type="password"  placeholder="Confirm Your Password" required>
               </p>  
               
               <button type="submit" name="registerButton">SIGN UP</button>
        </form>
    </div>



</body>
</html>