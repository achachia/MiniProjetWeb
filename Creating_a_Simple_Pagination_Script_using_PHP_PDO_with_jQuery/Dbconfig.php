<?php

 $db_username = 'megacour_user';
 $db_password = '7130chachia';
 $db_name = 'megacour_dev';
 $db_host = 'localhost';
 $item_per_page = 4;  // Le nombre elements qui vont affiche par page 
 
 
 try
 {
  $dbcon = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_username,$db_password);
  $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e)
 {
  echo $e->getMessage();
 }

?>

