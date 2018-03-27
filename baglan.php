<?php
$username = "root";
$password = "goksenin4411";
$sunucu = "localhost";
$database = "magexpress";


$baglan = mysql_connect($sunucu,$username,$password);
mysql_query("SET NAMES UTF8");


if(!$baglan){

  echo "Baglantı hatası: ".mysql_errorno();
  exit();

}
$db = mysql_select_db($database);

if(!$db) {

  echo "Veritabanı hatası : ".mysql_error(); echo "<br>";

  exit();

}





 ?>
