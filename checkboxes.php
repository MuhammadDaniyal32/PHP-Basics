<form action="result.php" method="get">

    Lahore<input type="checkbox" name="city[]" id="city" value="Lahore"><br/>
   Karachi<input type="checkbox" name="city[]" id="city" value="Karachi"><br/>
    Multan<input type="checkbox" name="city[]" id="city" value="Multan">
 <br/><br/><br/>
<label>Gender: </label>
    Male<input type="radio" name="gender" id="Male" value="Male">
 Female<input type="radio" name="gender" id="Female" value="Female">
 
 <br/><br/><br/>
 <select name="cities" id="cities">
 <option value="Karchi">Karachi</option>
 <option value="Lahore">Lahore</option>
 <option value="Multan">Multan</option>
 </select>
 <br/><br/><br/>
    <input type="submit" value="submit">
</form>