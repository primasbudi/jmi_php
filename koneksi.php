<<<<<<< HEAD
<?php
$konek = mysql_connect('localhost','root', '');
if (!$konek)
    die("belum konek ke server");
	
$db = mysql_select_db("dbmanage");
if (!$db)
    die("belum konek ke database");
=======
<?php 
$host=?localhost?; 
$username=?username?; 
$password=?password?; 
$database=?buku?; 
$connect=mysql_connect($host,$username,$password); 
mysql_select_db($database,$connect); 
>>>>>>> 313872b541d2d8d4a6cf084e257cc6d1fd024515
?>