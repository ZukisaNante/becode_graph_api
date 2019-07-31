<?php
//declare variables
$servername = 'localhost';
$username = 'username';
$password = 'password';
//connect to database
$connection = new mysqli($servername, $username, $password);//creates new connection to the server
//Check connection
if ($connection->connect_error){
    die('Connection failed!'.$connection->connect_error);
}
//echo 'Successfully Connected';
//Create databaseunior

$sql = "CREATE DATABASE my_api";
//check connection
if ($connection->query($sql) === TRUE){
    echo "Database Created";
} else {
    echo "Error creating database: ".$connection->error;
}

$connection->close();

?>