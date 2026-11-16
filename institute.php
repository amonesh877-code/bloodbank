<?php include "connect.php"; ?>

<h2>Institution Blood Request</h2>

<form action="search.php" method="GET">

Institution Name:
<input type="text" name="name" required><br><br>

Authority:
<input type="text" name="authority" required><br><br>

Phone:
<input type="text" name="phone" required><br><br>

Address:
<input type="text" name="address" required><br><br>

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
<button type="submit" formaction="institute_save.php" name="save">Save</button>

</form>