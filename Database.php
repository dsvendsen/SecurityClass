<?php


class Database
{
  private $dbservername = "thh2lzgakldp794r.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  private $dbusername = "ahq6t9qbh77fir53";
  private $dbpassword = "vk8xitodfnw7pa0u ";
  private $dbname = "bo410oxydcqq8ojh";
  
  function getConnection
  {
    $conn = new mysqli($this->dbservername, $this->dbusername, $this->dbpassword, $this->dbname);
    if($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }
}
?>
