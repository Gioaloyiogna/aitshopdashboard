<?php 
$servername="localhost";
$username="root";
$password="";
$database="smartshop";
// connecting to database;
$conn=mysqli_connect($servername,$username,$password,$database);
//check for connection
if (!$conn) {
	die("connection failed");
}
else{

 }