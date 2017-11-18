<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8"/>
<title>The variables in javascript</title>
</head>
<body>

<?php

//there are local and global variables
$name="Evans Kibet Kiptarus";

function getName(){
	echo $name."<br/>";
}
getName();
//The above will show undefine variable error name

$course="Computer science";

function getCourse(){
	//global is use to access the global-variable
	global $course;
	
	//declare the local variable
	$skill="coding and programming";
	
echo "I love <strong>".$course."</strong> because it help in <strong>".$skill."</strong>";
}
getCourse();
?>

</body>

</html>