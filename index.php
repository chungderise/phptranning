<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Basic Tutorial</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css-style.css">
	<script>
		function loginCheck(){

		}

	</script>
</head>
<body>
	<?php 
		session_start();
		require_once("process.php");
		redirect();
		
	 ?>
	<div class="login">
		<form name="myForm" method="POST" action="" onsubmit="loginCheck()">
			<button type="submit" class="btn btn-primary" name="register">Register</button>
			<button type="submit" class="btn btn-primary" name="login">Login</button>
		</form>
	</div>
</body>
</html>