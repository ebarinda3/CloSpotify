<?php 
    class Account {

        private $con;
        private $errorArray;
       
        public function __construct($con) {
            $this->con = $con;
            $this->errorArray = array();

        }
        public function register($un, $fn, $ln, $em, $em2, $pswd, $pswd2){

            $this->validateUsername($un);
            $this->validateFirstName($fn);
            $this->validateLastName($ln);
            $this->validateEmails($em, $em2);
            $this->validatePasswords($pswd, $pswd2);

            if(empty($this->errorArray) == true){

                //Insert into db
                return true;
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

        private function insertUserDetails(($un, $fn, $ln, $em, $pswd){


        }

        private function validateUsername($un){           
            if(strlen($un) > 25 || strlen($un) < 5) {                
                array_push($this->errorArray,Constants::$userNameCharacters);
                return;

            }

            //TODO : check if the username exist

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
            
            //TODO: Check that username hasn't already been used

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