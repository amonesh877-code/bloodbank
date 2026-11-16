<?php
include "connect.php";

$blood = $_GET['blood']??'';

$sql = "SELECT * FROM donor_records WHERE blood_group='$blood'";
$result = mysqli_query($conn,$sql);

echo "<h2>Available Donors</h2>";

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Age</th>
<th>Blood</th>
<th>Phone</th>
<th>Address</th>
<th>Status</th>
<th>Action</th>
</tr>";

while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";

echo "<td>".$row['name']."</td>";
echo "<td>".$row['age']."</td>";
echo "<td>".$row['blood_group']."</td>";
echo "<td>".$row['phone']."</td>";
echo "<td>".$row['address']."</td>";
echo "<td>".$row['status']."</td>";

if($row['status']=="IN"){
    $receiver_name = isset($_GET['name']) ? $_GET['name'] : 'Patient';

    echo "<td>
    <a href='take_blood.php?id=".$row['donor_id']."&type=Personal&name=".$receiver_name."'>Personal</a> |
    <a href='take_blood.php?id=".$row['donor_id']."&type=Institute&name=".$receiver_name."'>Institute</a>
    </td>";
}

else{
    echo "<td>Not Available</td>";
}


echo "</tr>";

}

echo "</table>";
?>