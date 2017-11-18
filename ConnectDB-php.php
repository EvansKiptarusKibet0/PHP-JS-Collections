<?php
//open connection to mysql db

$dbc=mysql_connect('localhost','root','');

if(!$dbc){
	die('Not connected to the server:'. mysql_error());
}

//select database
$dbc_select=mysql_select_db("game",$dbc); 
 if(!$dbc_select){
	 die('Not connected to the database: '.mysql_error());
 }

 //test the database
 $q="UPDATE game SET email='yyy' WHERE username='evans'";
 
 $result=mysql_query($q);
  
?>