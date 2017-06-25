<!DOCTYPE html>
<html>
<head>
	<title>403 Forbidden</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>
<form method="post" action="<?php echo base_url()?>main/form_validation">
	<?php
			if ($this->uri->segment(2) == "inserted") {
				echo '<span class="text-success">Data Inserted</span>';
			}
	?>

	<?php
	if(isset($user_data))
	{
		foreach($user_data->result() as $row)
		 {
?>
			<div class="form-group">
				<lable>Enter First Name</label>
				<input type="text" name="first_name" value="<?php echo $row->first_name ;?>" class="form-control"/>
				<span class="text-danger"><?php echo form_error("first_name"); ?></span>
			</div>
			<div class="form-group">
				<lable>Enter last Name</label>
				<input type="text" name="last_name" value="<?php echo $row->last_name; ?>" class="form-control"/>
					<span class="text-danger"><?php echo form_error("last_name"); ?></span>
			</div>
			<div class="form-group">
				<input type="hidden" name="hidden_id" value="<?php echo $row->id; ?>"  class="btn btn-info"/>
					<input type="submit" name="Update" value="Update" class="btn btn-info"/>
			</div>
<?php
		}
	}
	else
	{
	?>
	<div class="form-group">
		<lable>Enter First Name</label>
		<input type="text" name="first_name" class="form-control"/>
		<span class="text-danger"><?php echo form_error("first_name"); ?></span>
	</div>
	<div class="form-group">
		<lable>Enter last Name</label>
		<input type="text" name="last_name" class="form-control"/>
			<span class="text-danger"><?php echo form_error("last_name"); ?></span>
	</div>
	<div class="form-group">
		<input type="submit" name="insert" value="Insert" class="btn btn-info"/>
	</div>
<?php
}
 ?>
</form>
<!--<h1><?php //echo  $title1; ?></h1>-->
<br/><br/>


<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Delete</th>
			<th>Update</th>
		</tr>

		<?php
			if($fetch_data->num_rows() > 0)
			{
					foreach ($fetch_data->result() as $row)
					{
					?>
						<tr>
							<td><?php echo $row->id; ?></td>
							<td><?php echo $row->first_name; ?></td>
							<td><?php echo $row->last_name; ?></td>
							<td><a href="#" class="delete_data" id="<?php echo $row->id; ?>">Delete</a></td>
							<td><a href="<?php echo base_url(); ?>main/update_data/<?php echo $row->id; ?>">Edit</a></td>
						</tr>

					<?php
					}
			}
			else
			{
				?>
				<tr>
						<td colspan="3"><h1>No Data Found</h1></td>
				</tr>
				<?php
			}
		 ?>
	</table>
</div>
<script>
$(document).ready(function(){
		$('.delete_data').click(function(){
			var id = $(this).attr("id");
			if(confirm("Are you sure you want to delete this??"))
			{
				window.location="<?php echo base_url(); ?>main/delete_data/"+id;
			}
			else
			{
				return False;
			}
		});
});
</script>

</body>
</html>
