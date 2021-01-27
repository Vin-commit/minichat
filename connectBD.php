<?php
try 
{
  $host = 'localhost';
  $dbname = 'test';
  $userDB = 'vincent';
  $password = '';

  $bdd = new PDO('mysql:host=' . $host .';dbname=' . $dbname . ';charset=utf8', $userDB, '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}