<?php
    $server_name = "localhost:3307";
    $username = "root";
    $password = "";

    $connection=mysqli_connect($server_name,$username,$password);

    if(!$connection){
        die("connection faild !");
    }
    else{
        echo "connection to MySQL server successfully...";
    }

    mysqli_close($connection);


    ?>