<?php
    include("includes/classes/Account.php");

    $account = new Account();
    
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
                    <?php echo $account->getError("Your username must be between 5 and 25 characters");?>
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" placeholder="e.g raymond.reddington" required>
               </p>

               <p>
                    <?php echo $account->getError("Your firstname must be between 2 and 25 characters");?>
                    <label for="firstName">First Name</label>
                    <input id="firstName" name="firstName" type="text" placeholder="e.g Raymond" required>
               </p>

               <p>
                    <?php echo $account->getError("Your lastname must be between 2 and 25 characters");?>
                    <label for="lastName">Last Name</label>
                    <input id="lastName" name="lastName" type="text" placeholder="e.g Reddington" required>
               </p>

               <p>
                    <?php echo $account->getError("Your email don't match");?>
                    <?php echo $account->getError("Emails is invalid");?>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="e.g raymond.reddington@blacklist.tv" required>
               </p>

               <p>
                    <label for="cemail">Confirm Email</label>
                    <input id="cemail" name="cemail" type="email" placeholder="e.g raymond.reddington@blacklist.tv" required>
               </p>

               <p>
                    <?php echo $account->getError("Your passwords don't match");?>
                    <?php echo $account->getError("Your password can only contain numbers and letters");?>
                    <?php echo $account->getError("Your password must be between 5 and 30 characters");?>
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