<?php

include "connect.php";

$name = $_GET['name'];
$authority = $_GET['authority'];
$phone = $_GET['phone'];
$blood = $_GET['blood'];

$type = "Institution";

$sql = "INSERT INTO reports(name, phone, blood, type)
VALUES('$name','$phone','$blood','$type')";

mysqli_query($conn,$sql);

echo "Institution Saved in Reports Successfully";

?>

