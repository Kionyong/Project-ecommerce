<?php
    define('host','127.0.0.1');
    define('user', 'root');
    define('pwd', '');
    define('db', 'M3Y3');
    $conn=new mysqli(host,user,pwd,db);
    if($conn->connect_error){
        die("Field connect database".$conn->connect_error);
    }  
?>