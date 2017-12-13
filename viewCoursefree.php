<?php
	include 'include/menu.php';
	$st = "SELECT * FROM `course`";
	$results = $db->GetData($st);
?>
	<div class="container">
		<div class="row">
			<table class="table table-bordered">
				<tr>
					<th>Course ID</th>
					<th>Course Code</th>
					<th>Course Name</th>
					<th>Course Free</th>
				</tr>
				<tr>
					<?php
						while($result = mysqli_fetch_assoc($results))
						{
					?>
					<td><?=$result['cid']?></td>
					<td><?=$result['cCode']?></td>
					<td><?=$result['cName']?></td>
					<td><?=$result['cFee']?></td>
				</tr><?php } ?>
				
			</table>
		</div>
	</div>
<?php 
	include 'include/footer.php';
?>