<?php
require_once __DIR__ . '/connect.php';

$name = $_POST['name'];
$age = $_POST['age'];
$blood = $_POST['blood_group'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$donation_date = $_POST['donation_date'];

$sql = "INSERT INTO donor_records(name,age,blood_group,phone,address,donation_date,status)
VALUES('$name','$age','$blood','$phone','$address','$donation_date','IN')";

if(mysqli_query($conn,$sql)){
echo "Saved Successfully";
}
else{
echo mysqli_error($conn);
}

?>