<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8"/>
<title>The variables in javascript</title>
</head>
<body>
<?php
function getName($name){
	$myname=$name;
	echo $myname;
}

getName("Evans kibet");


function getMarks($eng,$kis){
	
	$mark1=$eng;
	$mark2=$kis;
	
	echo "i got ".mark1. " in English <br/>";
	echo "i got ".mark2. " in Kiswahili";
	
}
getMarks("22","34");
?>

</body>

</html>