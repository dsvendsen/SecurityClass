<?php
require_once 'header.php';

if($_SESSION["principal"] || $_SESSION["principal"] == NULL || $_SESSION["principal"] == false)
{
    header("login.html");
}