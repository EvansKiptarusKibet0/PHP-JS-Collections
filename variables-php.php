<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8"/>
<title>The variables in javascript</title>
</head>
<body>

<?php

$name='evans kibet';
$age=10;

//declare the constant vaiable
define("isThere","false");


echo $name." has an age of ".$age."<br/>";

if(isThere=='false'){
	echo "This statement is false";
}
else{
	echo "It is true";
}
?>

</body>

</html>