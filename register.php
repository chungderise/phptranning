<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css-style.css">
</head>
<body>
    <?php 
        session_start();
		require_once("process.php");
		register();
	 ?>
	<div class="login">
		<form method="POST" action="">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Full Name</label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="fullname">
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Phone number</label>
				<input type="number" class="form-control" id="exampleInputEmail1" name="phonenumber">
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">User name</label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="username">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" name="password">
			</div><br>
			<button type="submit" class="btn btn-primary">Register</button>

		</form>
	</div>
</body>
</html>