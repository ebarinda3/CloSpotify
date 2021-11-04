<?php

function sanitizeFormUsername($inputText){

    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}

function sanitizeFormString($inputText){

    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}

// we only strip the tags because the user can type spaces in their password
function sanitizeFormPassword($inputText){

    $inputText = strip_tags($inputText);
    return $inputText;
}





if(isset($_POST['registerButton'])){

    //Register button was pressed
    $username = sanitizeFormUsername($_POST['username']);

    // the sanitization function replaced these 2 lines bellow
    // $username = strip_tags($username);
    // $username = str_replace(" ","", $username);

    $firstName = sanitizeFormString($_POST['firstName']);


    // $fistName = strip_tags($firstName);
    // $firstName = str_replace(" ","", $firstName);
    // $fistName = ucfirst(strtolower($firstName));

    $lastName = sanitizeFormString($_POST['lastName']);

    // $lastName = strip_tags($lastName);
    // $lastName = str_replace(" ","", $lastName);
    // $lastName = ucfirst(strtolower($lastName));

    $email = sanitizeFormString($_POST['email']);

    // $email = strip_tags($email);
    // $email = str_replace(" ","", $email);
    // $email = ucfirst(strtolower($email));

    $cemail =sanitizeFormString($_POST['cemail']);

    // $cemail = strip_tags($cemail);
    // $cemail = str_replace(" ","", $cemail);
    // $cemail = ucfirst(strtolower($cemail));

    $password = sanitizeFormPassword($_POST['password']);

    // $password = strip_tags($password);
    // $password = str_replace(" ","", $password);
    // $password = ucfirst(strtolower($password));

    $cpassword = sanitizeFormPassword($_POST['cpassword']);

    // $cpassword = strip_tags($cpassword);
    // $cpassword = str_replace(" ","", $cpassword);
    // $cpassword = ucfirst(strtolower($cpassword));

    $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $cemail, $password, $cpassword);

    if($wasSuccessful ==true){
        header("Location: index.php");
    }
}

?>