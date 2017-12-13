<?php
	include 'include/menu.php';
	$st = "SELECT * FROM `course`";
	$results = $db->GetData($st);
?>

	<div class="container">
		<div class="row">
			<table class="table table-striped table-bordered">
				<tr>					
					<th>Course Name</th>
					<th>Course Code</th>
					<th>Course Teacher</th>
				</tr>
				<?php
					while($result = mysqli_fetch_assoc($results))
					{ ?>
						<tr>
							<td><?=$result['cName'] ?></td>
							<td><?=$result['cCode'] ?> </td>
							<td><?=$result['cTake'] ?></td>
						</tr><?php
					}
				?>
				
			</table>
		</div>
	</div>

<?php 
	include 'include/footer.php';
?>