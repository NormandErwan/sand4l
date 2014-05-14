<?php

//On démarre la session
session_start();
  
//Librairies
require_once 'librairies/connexion_mysql.php';
require_once 'librairies/fonctions.php';

//Si les magic quotes sont activés, on les désactive avec notre super fonction ! ;)
if(get_magic_quotes_gpc()) {
   $_GET = stripslashes_r($_GET);
   $_POST = stripslashes_r($_POST);
   $_COOKIE = stripslashes_r($_COOKIE);
}