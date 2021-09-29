<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        require_once('process.php');
        redirect();


    ?>
    <h3>Con cac gi the</h3>
    <form method="POST" action="">
        <button type="submit" name="logout">Logout</button>
    </form>
<div class="container-fluid">
    <table class="table table-bordered table">
        <tr>
            <th>No</th>
            <th>Email</th>
            <th>Full Name</th>
            <th>Phone Number</th>
            <th>User Name</th>
            <th>Passwrod</th>
        </tr>
        <tbody>
            <?php         
                require_once("db/sql_connect.php");  
                $query = "SELECT * FROM student";
                $result = pg_query($connect,$query);
                while($row = pg_fetch_object($result))
                {
                    echo '<tr>
                            <td>'.$row->id.'</td>
                            <td>'.$row->email.'</td>
                            <td>'.$row->full_name.'</td>
                            <td>'.$row->phone_number.'</td>
                            <td>'.$row->user_name.'</td>
                            <td>'.$row->password.'</td>
                        </tr>';
                }
                // $data = array();
                // while($row = pg_fetch_object($result)){
                //     $data[] =  $row;
                // }
               
                // for ($i = 0; $i < count($data); $i++){
                //     echo "$data[$i]['email']";
                    // echo '<tr>
                    //         <td>'.($i+1).'</td>
                    //         <td>'.$data[$i]['id'].'</td>
                    //         <td>'.$data[$i]['email'].'</td>
                    //         <td>'.$data[$i]['full_name'].'</td>
                    //         <td>'.$data[$i]['phone_number'].'</td>
                    //         <td>'.$data[$i]['user_name'].'</td>
                    //         <td>'.$data[$i]['password'].'</td>
                    //     </tr>';
                // }
                pg_close($connect);
            ?>
        </tbody>
            
    </table>

</div>


</body>
</html>