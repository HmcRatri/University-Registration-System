<?php
	include 'include/menu.php';
?>

	<div class="container">
		<div class="row">
			<form class="form-horizontal" method="post" >
				<div class="form-group">
					<div class="col-xs-3 text-right">
						Email
					</div>
					<div class="col-xs-6">
						<input type="email" autocomplete="off" name="useremail" class="form-control" placeholder="Username">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-3 text-right">
						Password
					</div>
					<div class="col-xs-6">
						<input type="password" autocomplete="off" name="password" class="form-control" placeholder="password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-3 text-right">
						
					</div>
					<div class="col-xs-6">
						<input type="submit" name="login-click" class="btn btn-info" value="Login">
					</div>
				</div>
			</form>
		</div>
	</div>

<?php 
	include 'include/footer.php';
?>