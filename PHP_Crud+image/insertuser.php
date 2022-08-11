<?php
require_once 'config.php';
if (isset($_POST['adduser'])) {
$Name=$_POST['name'];
$DOB=$_POST['dob'];
$Gender=$_POST['gender'];
$Website=$_POST['website'];
$Contact=$_POST['contact'];
$City=$_POST['city'];
$Places=$_POST['places'];
$image_name = $_FILES['user_image']['name'];
$image_temp = $_FILES['user_image']['tmp_name'];
$time = time();
$path = "upload/".$time.$image_name;
if (isset($_POST['places'])) {
$place=implode(",",$Places);
/*
foreach ($Places as $Places) {
$place .= $Places.",";
}*/
}
else{
$place="No Interested Places";
}
if(move_uploaded_file($image_temp, $path))
{
$query="INSERT INTO `users_tbl`(`Name`, `Dob`, `Website`, `Gender`, `Contact`, `City`, `Places`,`user_img`) VALUES ('$Name','$DOB','$Website','$Gender','$Contact','$City','$place','$path')";
$RUN=mysqli_query($con,$query);
if ($RUN) {
echo '<script> alert("Data Saved!"); </script>';
header('Location: Index.php');
}
else{
echo '<script> alert("Data not Saved!"); </script>';
}
}
}
?>
<!-- add user form -->
<form method="POST" action="insertuser.php" enctype="multipart/form-data">
  <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          <h4 class="modal-title custom_align" id="Heading">Add User</h4>
        </div>
        <div class="modal-body">
          <div class="profile-img-wrap">
            <img class="inline-block" src="user.png" id="no_img">
            <div class="fileupload btn">
              <span class="btn-text">edit</span>
              <input class="upload" type="file" id="input_file" name="user_image" accept="image/png,image/jpeg,image/jpg" name="userimg">
              
            </div>
          </div>
          <br><br><br><br><br><br><br>
          
          <div class="form-group">
            <label>Name:</label>
            <input class="form-control " type="text" placeholder="" name="name">
          </div>
          <div class="form-group">
            <label>Date Of Birth:</label>
            <input class="form-control " type="date"  placeholder="" name="dob">
          </div>
          <div class="form-group">
            <label>Website</label>
            <input class="form-control " type="url" placeholder="" name="website">
          </div>
          
          <div class="form-group">
            <label>Gender:</label>
            <label class="radio-inline">
              <input type="radio" name="gender" value="Male" checked>Male
            </label>
            <label class="radio-inline">
              <input type="radio" name="gender" value="Female">Female
            </label>
          </div>
          
          <div class="form-group">
            <label>Contact:</label>
            <input class="form-control " type="number" placeholder="" name="contact">
          </div>
          <div class="form-group">
            <label>City</label>
            <select class="form-control" name="city">
              <option value="Karachi">Karachi</option>
              <option value="Lahore">Lahore</option>
              <option value="Multan">Multan</option>
              <option value="Islamabad">Islamabad</option>
            </select>
          </div>
          <div class="form-group">
            <label>Interested Places:</label>
            <label class="checkbox-inline"><input type="checkbox" value="London" name="places[]">London</label>
            <label class="checkbox-inline"><input type="checkbox" value="Malburn" name="places[]">Malburn</label>
            <label class="checkbox-inline"><input type="checkbox" value="California" name="places[]">California</label>
          </div>
        </div>
        
      </div>
      <div class="modal-footer ">
        <input type="submit" name="adduser" class="btn btn-warning btn-lg" style="width: 100%;"></input>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
</form>
<!-- add user form -->
<script type="text/javascript">
$('#input_file').change(function () {
if (this.files && this.files[0]) {
var reader = new FileReader();
reader.readAsDataURL(this.files[0]);
reader.onload = function (x) {
$('#no_img').attr('src', x.target.result);
}
}
});
</script>