<?php

   mysql_connect("localhost", "root", "") or die ("Connexion impossible : ".mysql_error());
   mysql_select_db("blog");

$connect = false;

  if (isset($_COOKIE['sid']))
   {
    $session = $_COOKIE['sid'];

    $req = "SELECT count(*) AS total FROM users WHERE sid = '$session'";
	
    //PRINT_R>>$req
    $excute =  mysql_query($req);
    
    //VAR_DATA
    $data = mysql_fetch_array($excute);
    
    //ECHO_DATA_TOTAL
    $connect = true;
   }
?>
