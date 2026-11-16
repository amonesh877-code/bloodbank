<?php
$conn = mysqli_connect("localhost","root","","bloodbank");

$blood = "";

if(isset($_GET['blood']))
{
$blood = $_GET['blood'];
$query = "SELECT * FROM donor_records WHERE blood_group='$blood'";
}
else
{
$query = "SELECT * FROM donor_records";
}

$result = mysqli_query($conn,$query);
?>

<h2>Donor Records</h2>

<br><br>

<table border="1">

<tr>
<th>Name</th>
<th>Age</th>
<th>Blood</th>
<th>Phone</th>
<th>Address</th>
<th>Donation Date</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['name']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><?php echo $row['blood_group']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['donation_date']; ?></td>

</tr>

<?php
}
?>

</table>