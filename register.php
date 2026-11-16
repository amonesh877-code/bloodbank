<?php
include 'connect.php';

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$blood=$_POST['blood'];

mysqli_query($conn,"INSERT INTO donors(name,phone,city,blood,status)
VALUES('$name','$phone','$city','$blood','IN')");
}
?>

<h2>Register Donor</h2>

<form method="post">

Name  
<input type="text" name="name"><br>

Phone  
<input type="text" name="phone"><br>

City  
<input type="text" name="city"><br>

Blood   
<select name="blood">
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<option>AB+</option>
<option>AB-</option>
</select>

<br><br>

<input type="submit" name="submit" value="Register">

</form>