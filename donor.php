<form action="donor_save.php" method="POST">

Name<br>
<input type="text" name="name"><br><br>

Age<br>
<input type="number" name="age"><br><br>

Blood Group<br>
<select name="blood_group">
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<option>AB+</option>
<option>AB-</option>
</select><br><br>

Phone<br>
<input type="text" name="phone"><br><br>

Address<br>
<textarea name="address"></textarea><br><br>

<label>Donation Date:</label><br>
<input type="date" name="donation_date" required><br><br>

<input type="submit" value="Save">

</form>