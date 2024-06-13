<?php
session_start();
$con=mysqli_connect('localhost','root','','fin_demo');

function getDbConnection() {
    $con = new mysqli('localhost','root','','fin_demo');
    // Check the connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    return $con;
}
?>