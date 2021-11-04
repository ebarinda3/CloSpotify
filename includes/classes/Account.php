<?php 
    class Account {

        private $errorArray;
       
        public function __construct() {
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


        private function validateUsername($un){           
            if(strlen($un) > 25 || strlen($un) < 5) {                
                array_push($this->errorArray,"Your username must be between 5 and 25 characters");
                return;

            }

            //TODO : check if the username exist

        }
        
        private function validateFirstName($fn){
            if(strlen($fn) > 25 || strlen($fn) < 2) {                
                array_push($this->errorArray,"Your firstname must be between 2 and 25 characters");
                return;

            }
            
        }
        private function validateLastName($ln){
            if(strlen($ln) > 25 || strlen($ln) < 2) {                
                array_push($this->errorArray,"Your lastname must be between 2 and 25 characters");
                return;

            }
            
        }
        private function validateEmails($em, $em2){
            if($em != $em2){
                array_push($this->errorArray,"Your email don't match");
                return;
            }

            if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
                array_push($this->errorArray,"Emails is invalid");
                return;
            }
            
            //TODO: Check that username hasn't already been used

        }
        
        private function validatePasswords($pswd, $pswd2){
            if($pswd != $pswd2){
                array_push($this->errorArray,"Your passwords don't match");
                return;
            }

            if(preg_match('/[^A-Za-z0-9]/',$pswd)){
                array_push($this->errorArray,"Your password can only contain numbers and letters");
                return;
            }
            if(strlen($pswd) > 30 || strlen($pswd) < 5) {                
                array_push($this->errorArray,"Your password must be between 5 and 30 characters");
                return;

            }

        }
    }

?>