<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="font-family:Arial;background:#f4f4f4;padding:30px;">

<a href="index.php" style="
display:inline-block;
padding:12px 25px;
background:red;
color:white;
text-decoration:none;
border-radius:8px;
font-size:18px;
margin-top:20px;
">
    Open Blood Bank 
</a>
    <h1 style="color:#c40000;">Admin Dashboard</h1>

    <div style="background:white;padding:20px;border-radius:10px;box-shadow:0 0 10px rgba(0,0,0,0.2);width:500px;">
        
        <h2>Welcome Admin</h2>

        <ul style="list-style:none;padding:0;font-size:20px;">
            <li style="margin:15px 0;">
                <a href="donor_registration.php">Donor Registration</a>
            </li>

            <li style="margin:15px 0;">
                <a href="index.php">Blood Availability</a>
            </li>

            <li style="margin:15px 0;">
                <a href="request.php">Request Blood</a>
            </li>

            <li style="margin:15px 0;">
                <a href="reports.php">View Reports</a>
            </li>

            <li style="margin:15px 0;">
                <a href="login.php">Logout</a>
            </li>
        </ul>

    </div>

</body>
</html>