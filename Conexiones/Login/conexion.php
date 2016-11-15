<?php
$mysqli = new mysqli("mysql.hostinger.com.ar","u624814748_pola","polacoputo","u624814748_db01");
if (mysqli_connect_errno()) {
  echo 'Conexion Fallida: ', mysqli_connec_error();
  exit();
}
 ?>
