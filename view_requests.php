<?php
require_once __DIR__ . '/connect.php';

$result = mysqli_query($conn, "SELECT * FROM emergency_requests");
?>

<!DOCTYPE html>
<html>
<head>
<title>Emergency Requests</title>
<style>
table {
    border-collapse: collapse;
    width: 80%;
    margin: auto;
}
th, td {
    border: 1px solid black;
    padding: 10px;
    text-align: center;
}
th {
    background: red;
    color: white;
}
</style>
</head>

<body>

<script>
function highlightRow(row) {
    row.style.backgroundColor = "yellow";
}
</script>

<h2 style="text-align:center;">🚨 Emergency Requests</h2>

<table>
<tr>
    <th>Name</th>
    <th>Blood Group</th>
    <th>Location</th>
    <th>Contact</th>
    <th>Time</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr onclick='highlightRow(this)'>";
    echo "<td>".$row['patient_name']."</td>";
    echo "<td>".$row['blood_group']."</td>";
    echo "<td>
<a href='https://www.google.com/maps?q=".$row['location']."' target='_blank'>
📍 ".$row['location']."
</a>
</td>";
    echo "<td>
<a href='tel:".$row['contact_number']."'>
📞 ".$row['contact_number']."
</a>
</td>";
    echo "<td>".$row['request_time']."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>