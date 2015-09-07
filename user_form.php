<?php

	//user_form.php
	//jutumärkide vahele GET-ile, see mida tahame kätte saada input elemendist NAME HTMLis.
	//olulised on <form action="user_form.php" method="get">
	//ja inputile panna name=""
	
	//echo $_POST["email"];
	//echo $_POST["password"];
	
	
	//muutuja "email_error"
	
	$email_error = "";
	
	//kontrolli ainult siis kui kasutaja vajutab "Logi sisse" nuppu.
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		//kontrollime kasutaja e-posti, et see poleks tühi.
		if(empty($_POST["email"])){
		$email_error = "Sisesta e-mail";
		
		}
	}
	
	$password_error ="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		//kontrollime kasutaja e-posti, et see poleks tühi.
		if(empty($_POST["password"])){
		$password_error = "Sisesta parool!";
		
		}
	}

	
	
?>
<html>
	<head>
		<title>User login page</title>
	</head>
	
	<body>
		
		<h2>Log in</h2>
		<!--selleks, et -->
			<form action="user_form.php" method="post">
			
				<input name="email" type="email" placeholder="e-post"> <?php echo $email_error; ?> <br><br>
				<input name="password" type="password" placeholder="parool"> <?php echo $password_error; ?><br><br>
				<input type="submit" value="Logi sisse">
			
			</form>
			
			
		<h2>Create user</h2>
			
		
		
	</body>

</html>