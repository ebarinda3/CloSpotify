<?php 
    class Account {
       
        public function __construct() {

        }
        public function register(){

            $this->validateUsername($username);
            $this->validateFirstName($firstName);
            $this->validateLastName($lastName);
            $this->validateEmails($email, $cemail);
            $this->validatePasswords($password, $cpassword);

        }

        private function validateUsername($un){
            echo"Username function called";

        }
        
        private function validateFirstName($fn){
            
        }
        private function validateLastName($ln){
            
        }
        private function validateEmails($em, $em2){
            
        }
        
        private function validatePasswords($pswd, $pswd2){
            
        }
    }

?>