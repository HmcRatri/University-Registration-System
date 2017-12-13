<?php
	include 'include/menu.php';
?>
	<div class="container">
		<div class="row">
			<form class="form-horizontal" method="post">
				<div class="form-group">
					<div class="col-xs-3 text-right">
						Course Name
					</div>
					<div class="col-xs-6">
						<input type="text" name="cname" placeholder="Course Name" required  class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-3 text-right">
						Course Code
					</div>
					<div class="col-xs-6">
						<input type="text" name="ccode" placeholder="Course Code" required class="form-control" >
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-3 text-right">
						Course Fee
					</div>
					<div class="col-xs-6">
						<input type="text" name="cfee" placeholder="Course Fee" required class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-3 text-right">
						Course Teacher
					</div>
					<div class="col-xs-6">
						<input type="text" name="cTake" placeholder="Course Teacher" required class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-3">
						
					</div>
					<div class="col-xs-6">
						<input type="submit" name="added-cource" value="Add" class="btn btn-success" class="form-control">
					</div>
				</div>
			</form>
		</div>
	</div>

<?php 
	include 'include/footer.php';
?>
