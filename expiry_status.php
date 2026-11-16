<?php
$conn = mysqli_connect("localhost","root","","bloodbank");

$result = mysqli_query($conn, "SELECT * FROM blood_stock");

echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>Blood Group</th>
        <th>Units</th>
        <th>Expiry Date</th>
        <th>Expiry Status</th>
      </tr>";

while($row = mysqli_fetch_assoc($result)){

    $expiry_date = $row['expiry_date'];

    if(strtotime($expiry_date) < time()){
        $status = "Expired";
    }
    elseif(strtotime($expiry_date) <= strtotime("+7 days")){
        $status = "Near Expiry";
    }
    else{
        $status = "Safe";
    }

    echo "<tr>";
    echo "<td>".$row['blood_group']."</td>";
    echo "<td>".$row['units']."</td>";
    echo "<td>".$row['expiry_date']."</td>";
    echo "<td>".$status."</td>";
    echo "</tr>";
}

echo "</table>";
?>