<?php

$var1 = "kedi_merdiveni";

if (isset($_POST['submit'])){
		$var2= $_POST['password'];	
	}

if (strcmp($var1, $var2) == 0) {
    header("location:map2.html");
} else {
	$error = "Maalesef Yanlis!";
}


?>

<html>
<head>
	<title> Welcome to LayLayLand </title>
 	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
 </head>

<body>
	<div STYLE="position:relative; TOP:50px; LEFT:35%; WIDTH:380px; HEIGHT:350px; background-color:#FFCC00; padding:20px; border-radius:27px;
	border:3px solid black; text-align: center; ">

	<p> Detayli harita icin sifreyi girebilir misiniz? </p>

	<form name="Login" method="POST">
	  				<p> Password:&nbsp  <input type= "text" title= "Enter Your Password" id= "password" name= "password"/> </p>
	  				<input class="myButton" value="ENTER" />
				</form> </br></br>

				  
				  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="index.html" class="myButton">Back</a>

	</div>

</body>
</html>

