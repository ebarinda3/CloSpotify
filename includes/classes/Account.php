<?php 
    class Account {

        private $con;
        private $errorArray;
       
        public function __construct($con) {
            $this->con = $con;
            $this->errorArray = array();

        }

        public function login($un, $pswd){

            $pswd = md5($pswd);

            $query = mysqli_query($this->con, "SELECT * FROM users WHERE username='$un' AND password ='$pswd'");

            if(mysqli_num_rows($query) == 1){
                return true;
            }
            else {
                array_push($this->errorArray, Constants::$loginFailed);
                return false;
            }

        }


        public function register($un, $fn, $ln, $em, $em2, $pswd, $pswd2){

            $this->validateUsername($un);
            $this->validateFirstName($fn);
            $this->validateLastName($ln);
            $this->validateEmails($em, $em2);
            $this->validatePasswords($pswd, $pswd2);

            if(empty($this->errorArray) == true){

                //Insert into db
                return $this->insertUserDetails($un, $fn, $ln, $em, $pswd);
            }
            else{
                return false;
            }

        }

        public function getError($error){
            if(!in_array($error, $this->errorArray)){
                $error ="";
            }
            return "<span class='errorMessage'>$error</span>";
        }

        private function insertUserDetails($un, $fn, $ln, $em, $pswd){
            $encryptedPw = md5($pswd);
            $profilePic = "assets/images/profile-pics/profile.png";
            $date = date("Y-m-d");

            $result = mysqli_query($this->con,"INSERT INTO users VALUES ('', '$un','$fn','$ln','$em','$encryptedPw', '$date', '$profilePic')");
           
            return $result;

        }

        private function validateUsername($un){           
            if(strlen($un) > 25 || strlen($un) < 5) {                
                array_push($this->errorArray,Constants::$userNameCharacters);
                return;

            }

            $checkUsernameQuery = mysqli_query($this->con,"SELECT username FROM users WHERE username='$un'");
            if(mysqli_num_rows($checkUsernameQuery) != 0){
                array_push($this->errorArray, Constants::$usernameTaken);
                return;
            }

        }
        
        private function validateFirstName($fn){
            if(strlen($fn) > 25 || strlen($fn) < 2) {                
                array_push($this->errorArray,Constants::$firstNameCharacters);
                return;

            }
            
        }
        private function validateLastName($ln){
            if(strlen($ln) > 25 || strlen($ln) < 2) {                
                array_push($this->errorArray,Constants::$lastNameCharacters);
                return;

            }
            
        }
        private function validateEmails($em, $em2){
            if($em != $em2){
                array_push($this->errorArray,Constants::$emailsDoNotMatch);
                return;
            }

            if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
                array_push($this->errorArray,Constants::$emailInvalid);
                return;
            }
            
            //Check that username hasn't already been used

            $checkemailQuery = mysqli_query($this->con,"SELECT email FROM users WHERE email='$em'");
            if(mysqli_num_rows($checkemailQuery) != 0){
                array_push($this->errorArray, Constants::$emailTaken);
                return;
            }


        }
        
        private function validatePasswords($pswd, $pswd2){
            if($pswd != $pswd2){
                array_push($this->errorArray,Constants::$passwordCharacters);
                return;
            }

            if(preg_match('/[^A-Za-z0-9]/',$pswd)){
                array_push($this->errorArray,Constants::$passwordNotAlphanumeric);
                return;
            }
            if(strlen($pswd) > 30 || strlen($pswd) < 5) {                
                array_push($this->errorArray,Constants::$passwordsDoNotMatch);
                return;

            }

        }
    }

?>