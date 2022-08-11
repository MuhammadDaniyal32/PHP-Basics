<body>
<form method="post" action="view2.php">
<label>City:</label>
<select name="City">
 <option value="lahore">lahore</option>
 <option value="karachi">karachi</option>
 <option value="islamabad">islamabad</option>
</select>
<br><br>
<label>Gender:</label>
<label>MALE</label>
<input type="radio" value="Male" name="gender" checked>
<label>FEMALE</label>
<input type="radio" value="Female" name="gender">
<br><br>
<label>karachi:</label>
  <input type="checkbox" value="karachi" name="interestedplaces[]"/>
  <label>lahore:</label>
 <input type="checkbox" value="karachi" name="interestedplaces[]"/>
<br><br>
<input type="submit" name="submit">
</form>
</body>
</html>