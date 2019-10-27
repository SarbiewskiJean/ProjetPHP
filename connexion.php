<?php
  try{
    $objPdo = new PDO('mysql:host=devbdd.iutmetz.univ-lorraine.fr; port=3306; dbname=sarbiews2u_blog' , 'sarbiews2u_appli' , '31706830');
  }
  catch( Exception $exception)
  {
    die($exception->getMessage());
  }
 ?>