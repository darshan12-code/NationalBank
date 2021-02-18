<?php
$servername="localhost";
$username="root";
$password="";
$db="NationalBank";

$conn=mysqli_connect($servername,$username,$password,$db);

if(!$conn)
{
    die("Unable to connect to the database (Error): ".mysqli_connect_error());
}

?>