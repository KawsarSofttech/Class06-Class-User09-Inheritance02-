<?php
// Inheritance from User.php
// php does'nt support multiple inheritance but can be used trait function.
include "User.php";

class Admin extends User{
    public function age()
    {
        echo "There is no age limit for Admin";
    }



}





?>