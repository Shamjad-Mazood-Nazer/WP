<?php
    $host="localhost";
    $user="root";
    $password="";
    $conn=mysqli_connect($host,$user,$password);
    if(!mysqli_select_db($conn,'LAB'))
        echo 'falied '.mysqli_error();
?>