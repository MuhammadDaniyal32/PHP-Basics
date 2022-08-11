<?php
require_once 'config.php';
if (isset($_POST['Deleterecored'])) {
$id=$_POST['id'];
$result = mysqli_query($con, "DELETE FROM users_tbl WHERE Id=$id");
header('location:Index.php');
}
?>
<!-- DELETE MODEL -->
<form  method="POST" action="deleteuser.php">
	<div class="modal fade" id="delete<?php echo $data['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
					<h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
				</div>
				<div class="modal-body">
					
					<div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
					
				</div>
				<div class="modal-footer ">
					<button type="submit" name="Deleterecored" value="Deleterecored" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
					<input type="hidden" name="id" value=<?php echo $data['Id'];?>>
					<button type="button" name="no" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- DELETE MODEL -->
</form>