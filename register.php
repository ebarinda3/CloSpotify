<?php
    include("includes/config.php");
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");

    $account = new Account($con);
    
    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");

    function getInputValue($name){
        if(isset($_POST[$name])){
            echo $_POST[$name];
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CloSpotify</title>
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>

</head>
<body>

<?php

    if(isset($_POST['registerButton'])) {
        echo '<script>
                $(document).ready(function() {
                    $("#loginForm").hide();
                    $("#registerForm").show();
                });
            </script>';
    }
    else {
        echo '<script>
                $(document).ready(function() {
                    $("#loginForm").show();
                    $("#registerForm").hide();
                });
            </script>';
    }

    ?>

    <div id="background">
        <div id="loginContainer">

            <div id="inputContainer">

                <form id="loginForm" action="register.php" method="POST">
                    <h2>Login to your account</h2>
                        <p>
                            <?php echo $account->getError(Constants::$loginFailed);?>
                            <label for="loginUsername">Username</label>
                            <input id="loginUsername" name="loginUsername" type="text"  placeholder="e.g raymond.reddington" required>
                    </p>
                    <p>
                        <label for="loginPassword">Password</label>
                            <input id="loginPassword" name="loginPassword" type="password" placeholder="Your Password" required>
                    </p>   
                    
                    <button type="submit" name="loginButton">LOG IN</button>

                    <div class="hasAccountText">
                        <span id="hideLogin">Don't have an account yet? Signup here.</span>
                    </div>
                </form>


                <form id="registerForm" action="register.php" method="POST">
                    <h2>Create your free account</h2>
                        <p>
                            <?php echo $account->getError(Constants::$userNameCharacters);?>
                            <?php echo $account->getError(Constants::$usernameTaken);?>
                            <label for="username">Username</label>
                            <input id="username" name="username" type="text" value="<?php getInputValue('username')?>" placeholder="e.g raymond.reddington" required>
                    </p>

                    <p>
                            <?php echo $account->getError(Constants::$firstNameCharacters);?>
                            <label for="firstName">First Name</label>
                            <input id="firstName" name="firstName" type="text" value="<?php getInputValue('firstName')?>" placeholder="e.g Raymond" required>
                    </p>

                    <p>
                            <?php echo $account->getError(Constants::$lastNameCharacters);?>
                            <label for="lastName">Last Name</label>
                            <input id="lastName" name="lastName" type="text" value="<?php getInputValue('lastName')?>" placeholder="e.g Reddington" required>
                    </p>

                    <p>
                            <?php echo $account->getError(Constants::$emailsDoNotMatch);?>
                            <?php echo $account->getError(Constants::$emailInvalid);?>
                            <?php echo $account->getError(Constants::$emailTaken);?>
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" value="<?php getInputValue('email')?>" placeholder="e.g raymond.reddington@blacklist.tv" required>
                    </p>

                    <p>
                            <label for="cemail">Confirm Email</label>
                            <input id="cemail" name="cemail" type="email" value="<?php getInputValue('cemail')?>" placeholder="e.g raymond.reddington@blacklist.tv" required>
                    </p>

                    <p>
                            <?php echo $account->getError(Constants::$passwordCharacters);?>
                            <?php echo $account->getError(Constants::$passwordNotAlphanumeric);?>
                            <?php echo $account->getError(Constants::$passwordsDoNotMatch);?>
                            <label for="password">Password</label>
                            <input id="password" name="password" type="password" placeholder="Your Password" required>
                    </p> 
                    
                    <p>
                        <label for="cpassword">Confirm Password</label>
                            <input id="cpassword" name="cpassword" type="password"  placeholder="Confirm Your Password" required>
                    </p>  
                    
                    <button type="submit" name="registerButton">SIGN UP</button>

                    <div class="hasAccountText">
                        <span id="hideRegister">Already have an account? Log in here.</span>
                    </div>
                </form>
        </div>
    </div>
</div>



</body>
</html>