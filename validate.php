<?php
 $errUsername=$errPassword="";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['username'])){
        $errUsername="Username is required";
    }
    if(empty($_POST['password'])){
        $errPassword="Password is required";
    }
 }

?>