<?php
$servername = getenv('IP'); // may be 'localhost'
$username = getenv('C9_USER'); // may be 'root'
$password = "";
$database = "shoutit";
//Connect to MySQL
$con = mysqli_connect($servername, $username, $password, $database);

//Test Connection
if(mysqli_connect_errno()){
	echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}