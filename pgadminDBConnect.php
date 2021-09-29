<?php
function register(){

    try{
        $host = "localhost";
        $port = 5432;
        $username = "postgres";
        $password = "rental@36";
        $dbname = "php_basic";   
        $connect = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password");
    
        #Query used to insert data
        $query = "INSERT INTO STUDENT(id, email, full_name, phone_number, user_name, password) VALUES ('','', '', '', '', '')";
    
        $result = pg_query($connect,"select * from student");
        while($row = pg_fetch_object($result))
        {
            echo "ID:".$row->id;
            echo "<br/>Email:".$row->email;
            echo "<br/>Full Name:".$row->full_name;
            echo "<br/>Phone number:".$row->phone_number;
            echo "<br/>User Name:".$row->user_name;
            echo "<br/>Password:".$row->password;
            echo "<br/>----------------------------------<br/>";
        }
        pg_close($connect);
    
    }catch(PDOException $e){
        echo $e -> getMessage();
    }
}

?>