<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'SecurityService.php';

$username = $_POST["Username"];
$password = $_POST["Password"];

if($username == NULL || trim($username) == "")
{
    exit("User Name is required!");
}
if($password == NULL || trim($password)  == "")
{
    exit("Password is required!");
}

$service = new SecurityService($username, $password);
$ok = $service->authenticate();
if($ok)
{
    $_SESSION['principal'] == true;
    include 'loginPassed.php';
}
else
{
    $_SESSION['principal'] == false;
    include 'loginFailed.php';
}
    

