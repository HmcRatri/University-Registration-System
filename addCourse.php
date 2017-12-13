<?php
	include 'include/menu.php';
	$st = "SELECT * FROM course";
	$courses = $db->GetData($st);
?>

	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h3 class="text-center"> Add Cource Here </h3>
				<hr/>
				<form class="form-horizontal" method="post" action="">
					<div class="form-group">
						<div class="col-xs-3 text-right">Course Name</div>
						<div class="col-xs-7">
							<select name="cid" required class="form-control">
								<option value="">---------- Select Cource ----------</option>
								<?php
									while ($couse = mysqli_fetch_assoc($courses)) { ?>
										<option value="<?=$couse['cid'] ?>"><?=$couse['cName'] ?></option> <?php
									}

								?>															
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-3 text-right">Course Schedule</div>
						<div class="col-xs-7">
							<select name="cSchedule" required class="form-control">
								<option value="">------ Select Course Schedule ------</option>
								<option value="10:00 AM - 11:30 AM">10:00 AM - 11:30 AM</option>
								<option value="11:30 AM - 01:00 PM">11:30 AM - 01:00 PM</option>
								<option value="01:00 PM - 02:30 PM">01:00 PM - 02:30 PM</option>
								<option value="02:30 PM - 04:00 PM">02:30 PM - 04:00 PM</option>
								<option value="04:00 PM - 5:00 PM">04:00 PM - 5:00 PM</option>							
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-3 text-right"></div>
						<div class="col-xs-7">
							<button type="submit" name="addCource" class="btn btn-primary">Add Course</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-7">
				<h3 class="text-center"> Added Course</h3>
				<hr/>
				<table class="table table-striped">
					<tr>
						<th>Course Code</th>
						<th>Course Name</th>
						<th>Course Schedule</th>
						<th>Action</th>
					</tr>
					<tr>
						<?php							
							$st = "SELECT * from schedule,course where schedule.cid = course.cid And schedule.sid = ".$_SESSION['user-id'];
							$courseDetails = $db->GetData($st);
							while($course = mysqli_fetch_assoc($courseDetails))
							{

						?>
						<td> <?=$course['cCode']?> </td>
						<td> <?=$course['cName']?> </td>
						<td> <?=$course['courseSchedule']?> </td>
						<td>
							<a href="?dropid=<?=$course['cid']?>" class="btn btn-danger" onclick="return confirm('Are you Sure ???')">Drop</a>
						</td>						
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>

<?php 
	include 'include/footer.php';
?>