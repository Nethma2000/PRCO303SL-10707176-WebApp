<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['university_email']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="university_email" value="<?php echo $row['university_email']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">university_name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="university_name" value="<?php echo $row['university_name']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">university_address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="university_address" value="<?php echo $row['university_address']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">university_email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="university_email" value="<?php echo $row['university_email']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">university_contactnum:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="university_contactnum" value="<?php echo $row['university_contactnum']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">carerguidanceHead:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="carerguidanceHead" value="<?php echo $row['carerguidanceHead']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">carerguidanceNumber:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="carerguidanceNumber" value="<?php echo $row['carerguidanceNumber']; ?>">
					</div>
				</div>
			
			
				
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['university_email']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Advisor</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['university_name']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?university_email=<?php echo $row['university_email']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
				<!-- <a class="btn btn-danger" href="universitydelete.php?university_email=<?php echo $row['university_email']; ?>">Delete</a> -->

			</div>

        </div>
    </div>
</div>