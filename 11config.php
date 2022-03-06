<?php
    $host="localhost";
    $user="root";
    $password="";
    $conn=mysqli_connect($host,$user,$password);
    if(mysqli_select_db($conn,'simple'))
    {
        echo 'connected';
    }
    else
        echo 'falied '.mysqli_error();
?>