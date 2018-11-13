<?php
require_once 'header.php';

if(isset($_SESSION["principle"]) == false || $_SESSION["principle"] == NULL || $_SESSION["principle"] == false) 
{
    header("Location: Login.html");
}