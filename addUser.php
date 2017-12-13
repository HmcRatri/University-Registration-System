<?php
	include 'include/menu.php';
?>

<div class="container">
	<div class="row">
		<form class="form-horizontal" method="post">
			<div class="form-group">
				<div class="col-xs-3 text-center">
					Name
				</div>
				<div class="col-xs-6">
					<input type="text" name="name" required class="form-control">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 text-center">
					Gender
				</div>
				<div class="col-xs-6">
					<select name="gender" class="form-control">
						<option value="">Select Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 text-center">
					Mobile No.
				</div>
				<div class="col-xs-6">
					<input type="text" name="smobile" required class="form-control">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 text-center">
					Email
				</div>
				<div class="col-xs-6">
					<input type="email" name="email" required class="form-control">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 text-center">
					Password
				</div>
				<div class="col-xs-6">
					<input type="password" name="password" required class="form-control">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 text-center">
					Select Role					
				</div>
				<div class="col-xs-6">
					<select name="role" class="form-control">
						<option value="">Select Role</option>
						<option value="student">Student</option>
						<option value="professor">Professor</option>
						<option value="admin">Register</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 text-center">
					
				</div>
				<div class="col-xs-6">
					<input type="submit" name="Add-user-click" value="Add" class="btn btn-primary">
				</div>
			</div>
		</form>
	</div>
</div>


<?php 
	include 'include/footer.php';
?>