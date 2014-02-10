<?php 
$host=?localhost?; 
$username=?username?; 
$password=?password?; 
$database=?buku?; 
$connect=mysql_connect($host,$username,$password); 
mysql_select_db($database,$connect); 
?>