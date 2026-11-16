<?php
$conn = mysqli_connect("localhost", "root", "", "bloodbank");

if(!$conn){
    die("Connection failed");
}

$id = $_GET['id'];
$type = $_GET['type'];
$receiver_name = isset($_GET['name']) ? $_GET['name'] : 'Patient';

// Get donor details
$res = mysqli_query($conn, "SELECT * FROM donor_records WHERE donor_id='$id'");
$donor = mysqli_fetch_assoc($res);

$donor_name = $donor['name'];
$phone = $donor['phone'];
$blood = $donor['blood_group'];

// Save report
mysqli_query($conn, "INSERT INTO reports(name, blood, type, phone, donor_name)
VALUES ('$receiver_name', '$blood', '$type', '$phone', '$donor_name')");

// Update donor status
mysqli_query($conn, "UPDATE donor_records SET status='OUT' WHERE donor_id='$id'");

// Redirect back
header("Location: reports.php");
exit();
?>