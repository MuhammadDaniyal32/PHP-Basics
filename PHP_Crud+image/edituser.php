<?php
require_once 'config.php';
if (isset($_POST['Update'])) {
$id=$_POST['id'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$website=$_POST['website'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$places=$_POST['places'];
if (isset($_POST['places'])) {
$place=implode(",",$places);
}
else{
$place="No Interested Places";
}
$image_name = $_FILES['user_image']['name'];
$image_temp = $_FILES['user_image']['tmp_name'];
$time = time();
$path = "upload/".$time.$image_name;
if(move_uploaded_file($image_temp, $path))
{
$result = mysqli_query($con, "UPDATE users_tbl SET Name='$name',Dob='$dob',Website='$website',Gender='$gender',Contact='$contact',City='$city',Places='$place',user_img='$path' WHERE Id=$id");

if($result)
{
echo "Your record updated now..";
header('location:Index.php');
}
else
{
echo "There is something wrong... try again...";
}
}
else
{
$result = mysqli_query($con, "UPDATE users_tbl SET Name='$name',Dob='$dob',Website='$website',Gender='$gender',Contact='$contact',City='$city',Places='$place' WHERE Id=$id");

if($result)
{
echo "Your record updated now..";
header('location:Index.php');
}
else
{
echo "There is something wrong... try again...";
}
}
}
?>
<?php
$query=mysqli_query($con,"SELECT * FROM users_tbl WHERE Id='".$data['Id']."'");
while ($row = mysqli_fetch_assoc($query)) {
$Name=$row['Name'];
$Dob=$row['Dob'];
$Website=$row['Website'];
$Gender=$row['Gender'];
$Contact=$row['Contact'];
$City=$row['City'];
$Places=$row['Places'];
$place=explode(",", $Places);
$image=$row['user_img'];
}
?>
<!-- edit Model -->
<form method="POST" action="edituser.php" enctype="multipart/form-data">
  <div class="modal fade" id="edit<?php echo $data['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
        </div>
        <div class="modal-body">
          
          <!-- <div class="profile-img-wrap">
            <img class="inline-block" id="disply" src="<?php echo $image; ?>"  name="image">
            <div class="fileupload btn">
              <span class="btn-text">edit</span>
              <input class="upload" type="file" id="img" name="user_image" accept="image/png,image/jpeg,image/jpg">
              
            </div>
          </div>
          <br><br><br><br><br><br><br> -->
          <img src="<?php echo $image; ?>" width="100" height="100" />
          <input class="upload" type="file" name="user_image" accept="image/png,image/jpeg,image/jpg">
          
          <div class="form-group">
            <label>Name:</label>
            <input class="form-control " type="text" placeholder="" name="name" value="<?php echo $Name; ?>">
          </div>
          <div class="form-group">
            <label>Date Of Birth:</label>
            <input class="form-control " type="date"  placeholder="" name="dob" value="<?php echo $Dob;?>">
          </div>
          <div class="form-group">
            <label>Website</label>
            <input class="form-control " type="url" placeholder="" name="website" value="<?php echo $Website;?>">
          </div>
          
          <div class="form-group">
            <label>Gender:</label>
            <label class="radio-inline">
              <input type="radio" name="gender" value="Male" <?php if($Gender=="Male"){echo "checked";}?> >Male
            </label>
            <label class="radio-inline">
              <input type="radio" name="gender" value="Female" <?php if($Gender=="Female"){echo "checked";}?> >Female
            </label>
          </div>
          <div class="form-group">
            <label>Contact:</label>
            <input class="form-control " type="number" placeholder="" name="contact" value="<?php echo $Contact;?>">
          </div>
          <div class="form-group">
            <label>City</label>
            <select class="form-control" name="city">
              <option value="Karachi" <?php if($City=="Karachi"){echo "selected";}?> >Karachi</option>
              <option value="Lahore" <?php if($City=="Lahore"){echo "selected";}?> >Lahore</option>
              <option value="Multan" <?php if($City=="Multan"){echo "selected";}?> >Multan</option>
              <option value="Islamabad" <?php if($City=="Islamabad"){echo "selected";}?> >Islamabad</option>
            </select>
          </div>
          <div class="form-group">
            <label>Interested Places:</label>
            <label class="checkbox-inline"><input type="checkbox" value="London" name="places[]" <?php if(in_array("London", $place)){ echo "checked"; } ?> >London</label>
            <label class="checkbox-inline"><input type="checkbox" value="Malburn" name="places[]" <?php if(in_array("Malburn", $place)){ echo "checked"; } ?> >Malburn</label>
            <label class="checkbox-inline"><input type="checkbox" value="California" name="places[]" <?php if(in_array("California", $place)){ echo "checked"; } ?> >California</label>
          </div>
          <input type="hidden" name="id" value=<?php echo $data['Id'];?>>
        </div>
        
      </div>
      <div class="modal-footer ">
        <input type="submit" name="Update" value="Update" class="btn btn-warning btn-lg" style="width: 100%;"></input>
      </div>
    </div>
    
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
</form>
<!-- edit Model -->
<!-- <script type="text/javascript">
$('#img').change(function () {
if (this.files && this.files[0]) {
var reader = new FileReader();
reader.readAsDataURL(this.files[0]);
reader.onload = function (x) {
$('#disply').attr('src', x.target.result);
}
}
});
</script>
<script>
var imge = "<?php echo $image; ?>";
/*var img = document.getElementById('image');
img.src = imge;*/
$('#disply').attr('src', imge);

</script> -->