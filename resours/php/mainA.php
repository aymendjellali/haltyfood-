<?php
try 
{
  $db = new PDO("OCI:dbname=test;charset=UTF-8", "user", "password");
} 
catch(PDOException $e)
{
  echo $e->getMessage();
}
?>