<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "parkingbookspacefinal";

$conn = new mysqli($server,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection Error" .$conn->connect_error);
}
?>