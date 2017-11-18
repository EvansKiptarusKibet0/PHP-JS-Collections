<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8"/>
<title>The variables in javascript</title>
<script type="text/javascript">
function val(){
	var fullname=document.getElementById("name");
	var age=document.getElementById("ag");
	
	if(fullname.value==""&&age.value==""){
		alert("The fields cannot be null");
	}else{
		return true;
	}
	
}

</script>


</head>
<body>
<?php

function getData(){
	echo $_POST['name'];
	
}



?>

<form method="POST">
<p>Full Names:</p>
<input type="text" name="fname" id="name"/>
<p>Age:</p>
<input type="text" name="age" id="ag"/>

<br/>
<br/>
<input type="submit" name="sub" value="Send data" onsubmit="return val()"/>


</form>

</body>

</html>