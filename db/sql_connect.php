<?php
 try{
    $host = "localhost";
    $port = 5432;
    $username = "postgres";
    $password = "rental@36";
    $dbname = "php_basic";   
    $connect = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password");
}catch(PDOException $e){
    echo $e -> getMessage();
}
?>