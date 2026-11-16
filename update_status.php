<?php

include "connect.php";

$id = $_GET['id'];

$sql = "UPDATE donors SET status='OUT' WHERE id=$id";

mysqli_query($conn,$sql);

header("Location: donor_list.php");

?>