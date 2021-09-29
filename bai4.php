<?php
function register(){
    $email = $fullname = $phonenumber = $username = $password = "";
    if(!empty($_POST)){
        $email = $_POST['email'];
        $fullname = $_POST['fullname'];
        $phonenumber = $_POST['phonenumber'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        setcookie("email",$email,time() + 24*60*60, "/");
        setcookie("fullname",$fullname,time() + 24*60*60, "/");
        setcookie("phonenumber",$phonenumber,time() + 24*60*60, "/");
        setcookie("username",$username,time() + 24*60*60, "/");
        setcookie("password",$password,time() + 24*60*60, "/");

        if($username == 'admin' && $password = "123"){
            header("Location: welcome.php");
        }


    }
}

?>