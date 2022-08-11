<?php
require_once 'config.php';
$query="Select * from users_tbl";
$run = mysqli_query($con,$query);
?>
<?php
if (isset($_POST['submit'])) {
$search=$_POST['Search'];
$query="SELECT * FROM users_tbl WHERE Name LIKE'$search%'";
$run = mysqli_query($con,$query);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style2.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br>
          <h2 class="text-center">Users Records</h2>
          <br>
          <div class="col-md-4">
            <button class="btn btn-success btn-xs" data-title="Add" data-toggle="modal" data-target="#add" ><span class="glyphicon glyphicon-pencil">AddUser</span></button>
            <?php include('insertuser.php'); ?>
            <br><br>
            <form  class="form-inline" method="POST" action="Index.php">
              <input class="form-control" type="text" name="Search" placeholder="Search" aria-label="Search">
              <button name="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span></button>
              <br>
            </form>
          </div>
          <div class="table-responsive col-md-12">
            
            <table id="mytable" class="table table-bordred table-striped">
              
              <thead>
                
                <th>Id</th>
                <th>Image</th>
                <th>Name</th>
                <th width="100px">DOB</th>
                <th>Website</th>
                <th>Gender</th>
                <th>Contact</th>
                <th>City</th>
                <th>Interested Places</th>
                <th>Edit</th>
                <th>Delete</th>
              </thead>
              <tbody>
                <tr>
                  <?php
                  if($run)
                  {
                  while($data = mysqli_fetch_array($run))
                  {
                  ?>
                  <tr>
                    <td><?php echo $data['Id']; ?></td>
                    <td><img src="<?php echo $data['user_img']?>" class="img-circle" height="100" width="100"/></td>
                    <td><?php echo $data['Name']; ?></td>
                    <td><?php echo $data['Dob']; ?></td>
                    <td><?php echo $data['Website']; ?></td>
                    <td><?php echo $data['Gender']; ?></td>
                    <td><?php echo $data['Contact']; ?></td>
                    <td><?php echo $data['City']; ?></td>
                    <td><?php echo $data['Places']; ?></td>
                    <td>
                      <a href="#edit<?php echo $data['Id']; ?>"
                        data-toggle="modal"  class="btn btn-warning btn-sm">
                        <span class="glyphicon glyphicon-edit">
                        </span> Edit</a>&nbsp;
                        <?php include('edituser.php'); ?>
                      </td>
                      <td>
                        <a href="#delete<?php echo $data['Id']; ?>"
                          data-toggle="modal" class="btn btn-danger btn-sm">
                          <span class="glyphicon glyphicon-trash">
                          </span> Delete</a>
                          <?php include('deleteuser.php'); ?>
                        </td>
                        <?php  } ?>
                      </tr>
                    </tbody>
                  </table>
                  <?php
                  }
                  else
                  {
                  echo "Error!!!!!!!!!!!!";
                  }
                  ?>
                  
                  
                </body>
              </html>