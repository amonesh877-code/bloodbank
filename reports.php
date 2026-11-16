<?php

require_once __DIR__ . '/connect.php';

$result = mysqli_query($conn,"SELECT * FROM reports");

?>

<h2>Reports</h2>

<table border="1">

<tr>
<th>Name</th>
<th>Blood</th>
<th>Type</th>
<th>Phone</th>
<th>Donor_name</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['name']; ?></td>
<td><?php echo $row['blood']; ?></td>
<td><?php echo $row['type']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['donor_name']; ?></td>
<?php
}
?>

</table>