<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css-style.css">
</head>
<body>
    <?php
    session_start();
    include 'process.php';
    // require_once("validate.php");
    include 'validate.php';
    login();

    ?>
    <div class="login">
        <form method="POST" action="">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="username"><span class="err"><?php echo $errUsername; ?></span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password"><span class="err"><?php echo $errPassword; ?></span>
            </div><br>
            <input type="submit" name="submit" value="Submit">
                <a href="#" onclick="history.back(); return false;">Go Back</a>
            </div>
        </form>
    </div>

</body>
</html>