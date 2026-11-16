<?php include "connect.php"; ?>

<h2>Personal Blood Request</h2>

<form action="search.php" method="GET">

Name:
<input type="text" name="name" required><br><br>

Phone:
<input type="text" name="phone" required><br><br>

City:
<input type="text" name="city" required><br><br>

Blood Group:
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


<button type="submit" name="search">Search</button>
<button type="submit" formaction="personal_save.php" name="save">Save</button>

</form>

