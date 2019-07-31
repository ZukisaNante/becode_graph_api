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
//SQL to create a table
$sql = "CREATE TABLE MyClients(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,

    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    jobtitle VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP
) ";
//insert data to the table
$sql = "INSERT INTO MyClients (firstname, lastname, email, jobtitle)
VALUES('Me','You','ze@yahoo.com','dev')";
//check connection
if ($connection->query($sql) === TRUE){
    echo "Database Created";
} else {
    echo "Error creating database: ".$connection->error;
}

$connection->close();

?>