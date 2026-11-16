<?php
$conn = mysqli_connect("localhost","root","","bloodbank");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>