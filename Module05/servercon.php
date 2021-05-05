<?php
$dbconnect = mysqli_connect("localhost", "testuser","12345678","testdb");

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_errno();
    exit();
} else
{
    
}

// $dbconnect = new mysqli("localhost", "testuser","12345678");

// if ($dbconnect -> connect_errno){
//     echo "Failed to connect to MySQL";
//     exit();
// } else
// {
//     echo "Connected";
// }

// $dbconnect='localhost';

//PDO

// $server = "localhost";
// $user = "testuser";
// $password = "12345678";

// try {
//     $dbconnect = new PDO ("mysql: host=$server", $user, $password);
//     $dbconnect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected";
// }
// catch (PDOException $e) {
//     echo "Connection Failed:" . $e->getMessage();
// }

?>