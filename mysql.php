<?php
    $server_name = "localhost:3307";
    $username = "root";
    $password = "";
    $db_name = "myDB";

    $connection=mysqli_connect($server_name,$username,$password);

    if(!$connection){
        die("connection faild !");
    }
    else{
        echo "connection to MySQL server successfully...";
    }
//  //create database
//  $SQL="CREATE DATABASE myDB";
    

//  if(mysqli_query($connection,$SQL)){
//      echo "Database created successfully";
//  } else {
//      echo "Error. creating database ";
//  }

    // create table query

    mysqli_query($connection,"use myDB");

    // $query = "create table users(id int auto_increment primary key,fname varchar(100) not null,lname varchar(100),email varchar (50) not null)";

    // if(mysqli_query($connection,$query)){
    //     echo "Table creation successfully";
    // }else{
    //     echo "Error table creation...";
    // }

    

    mysqli_close($connection);


    ?>