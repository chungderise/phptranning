<?php
    require_once("db/sql_connect.php");  
    $query = "SELECT * FROM student";
    $result = pg_query($connect,$query);
    $data = array();
    while($row = pg_fetch_object($result)){
        $data[] =  $row;
    }
    pg_close($connect);
?>