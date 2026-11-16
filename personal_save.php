<?php

include "connect.php";

$name  = $_GET['name'];
$phone = $_GET['phone'];
$city  = $_GET['city'];
$blood = $_GET['blood'];

$type = "Personal";

$sql = "INSERT INTO reports(name, phone, address, blood, type)
VALUES('$name','$phone','$city','$blood','$type')";

mysqli_query($conn,$sql);

echo "Personal Request Saved in Reports Successfully";

?>

