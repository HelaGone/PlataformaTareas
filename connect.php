<?php
  ini_set('display_errors', 'On');
  ini_set('memory_limit', '512M');
  error_reporting(E_ALL | E_STRICT); //DECLARA DEBUG, COMENTAR ESTA LINEA CUANDO TERMINE DE HACER DEBUG

  //DEVELOPMENT
  DEFINE('DB_USER', 'root');
  DEFINE('DB_PSWD', 'helagone-pass');
  DEFINE('DB_HOST', '127.0.0.1');
  DEFINE('DB_NAME', 'alumnos_db');


  // PRODUCTION
  // DEFINE('DB_USER', 'dbdart_master');
  // DEFINE('DB_PSWD', 'fc8u&EAk%or1UVHYmf*IH');
  // DEFINE('DB_HOST', 'localhost');
  // DEFINE('DB_NAME', 'dbdart_ntcoronamapa');

  $dbconn = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);
  mysqli_set_charset($dbconn,'utf8');
  if(!$dbconn){
  die(' ERROR EN LA CONEXIÓN A DB');
  }
?>
