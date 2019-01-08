<?php
  $filename = "file.txt"; 
  $mailfun = true;

  
  // DB configuration - local
  $db_host = "localhost"; 
  $db_user = "root"; 
  $db_password = ""; 
  $db_name = "i218_phrases_live";

  // DB configuration - live
  /*
  $db_host = "10.35.249.98:3306"; 
  $db_user = "k58269_user"; 
  $db_password = "Rand0m!"; 
  $db_name = "k58269_hdmy";
  */
  $link = mysqli_connect($db_host, $db_user, $db_password, $db_name);    

  // Google Maps configuration
  $maps_key = "AIzaSyBOfH33yqSm78VVt9COBYIojovNCh0ByVM";
  
?>