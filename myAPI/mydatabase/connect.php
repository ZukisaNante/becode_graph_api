<?php
request 'notes.sql';
$servername = "localhost";
$username = "username";
$password = "password";
$database_name = "Notes_Database";
$title = preg_replace( "#[^\w]#", "", $_POST['firstname'] );
$notes = preg_replace( "#[^\w]#", "", $_POST['lastname'] ); 
$author = preg_replace( "#[^\w]#", "", $_POST['lastname'] ); 

// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*SQL Database*/
$sql= "CREATE DATABASE IF NOT EXISTS Notes_Database";
$sql = "CREATE TABLE Notes_Table (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Title VARCHAR(100) NOT NULL UNIQUE,
        Notes VARCHAR(max) NOT NULL,
        Author  VARCHAR(100) NOT NULL
    )ENGINE=InnoDB DEFAULT CHARSET=latin1";
// prepare and bind
$sql = $conn->prepare("INSERT INTO Notes_table (Title, Notes,  Author) VALUES (?, ?, ?)");
$sql->bind_param("sss", $title, $notes, $author);//siss s->string & i->integer

// set parameters and execute



echo "New records created successfully";

$stmt->close();

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>