<?php

function redirect(){
    $action = "";
		if(isset($_POST)){
			foreach($_POST as $key => $value) {
				echo $key. " : " .$value. "<BR />";
				$action = $key;
			}
		}

		if(!empty($action)){
			if($action == 'register'){
				header("Location: register.php");
			}
			if($action == 'login'){
				header("Location: login.php");
			}
            if($action == 'logout'){
                session_destroy();
				header("Location: index.php");
			}
		}

}
function register(){
    $email = $fullname = $phonenumber = $username = $password = "";
    if(!empty($_POST)){
        $emailInput = $_POST['email'];
        $fullnameInput = $_POST['fullname'];
        $phonenumberInput = $_POST['phonenumber'];
        $usernameInput = $_POST['username'];
        $passwordInput = $_POST['password'];
        //Session
        // $_SESSION['email'] = $email;
        // $_SESSION['fullname'] = $fullname;
        // $_SESSION['phonenumber'] = $phonenumber;
        // $_SESSION['username'] = $username;
        // $_SESSION['password'] = $password;
       
        require_once("db/sql_connect.php");
        #Query used to insert data
        $query = "INSERT INTO STUDENT(email, full_name, phone_number, user_name, password) VALUES ('".$emailInput."', '".$fullnameInput."', '".$phonenumberInput."', '".$usernameInput."', '".$passwordInput."')";
        pg_query($connect,$query);
        pg_close($connect);

        if(isset($_SESSION)){
            header('Location: login.php');
        }
        //Cookie
        // setcookie("email",$email,time() + 24*60*60, "/");
        // setcookie("fullname",$fullname,time() + 24*60*60, "/");
        // setcookie("phonenumber",$phonenumber,time() + 24*60*60, "/");
        // setcookie("username",$username,time() + 24*60*60, "/");
        // setcookie("password",$password,time() + 24*60*60, "/");



    }
}

function login(){
    $username= $password="";
    $sessionUserName=$sessionPassword="";

    if(!empty($_SESSION)){
        $sessionUserName = $_SESSION['username'];
        $sessionPassword = $_SESSION['password'];
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST)){
            $usernameInput = $_POST['username'];
            $passwordInput = $_POST['password'];

            require_once("db/sql_connect.php");  
            $query = "SELECT * FROM student WHERE user_name = '".$usernameInput."' AND PASSWORD = '".$passwordInput."' ";
            $result = pg_query($connect,$query);
            $data = array();
            while ($row = pg_fetch_object($result)) {
                $data[] = $row;
            }
            pg_close($connect);
            if($data != null && count($data) > 0){
                header("Location: welcome.php");
            }else{
                echo "Tài khoản sai rồi ku!";
            }
        }
       
    }

}

function logout(){
    session_destroy();
    header("Location: index.php");
}


?>