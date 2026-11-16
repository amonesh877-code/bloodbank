<?php

$conn = mysqli_connect("localhost","root","","bloodbank");

$name = $_GET['name'];
$blood = $_GET['blood'];
$type = $_GET['type'];

$sql = "INSERT INTO reports(name,blood_group,type)
VALUES('$name','$blood','$type')";

mysqli_query($conn,$sql);

echo "Saved in Reports";

?>