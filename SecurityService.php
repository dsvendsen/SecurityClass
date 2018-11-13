<?php

class SecurityService
{
    private $username = "";
    private $password = "";
    
    function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }
    
    function authenticate(){
        if($this->username === "" || $this->password === "")
        {
            return false;
        }
        if($this->username === "Dylan" && $this->password === "Enter")
        {
            return true;
        }
        else
        {
            return false;
        }
    
    }
}

