<?php
$server="localhost";
$user="root";
$password="";
$database="webpw";
$konek=mysqli_connect($server,$user,$password,$database) or die ("gagal masuk server".mysqli_error());
/*
mysql_Select_db("$database") or die("gagal pilih database".mysql_error());

$konek=mysqli_connect($server,$user,$password,$database);

$sqli=new mysqli($server,$user,$password,$database);
if($sqli->connect_error){
die ('maaf koneksi gagal'.$sqli->connect_error);
}
*/
?>