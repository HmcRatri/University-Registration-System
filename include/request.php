<?php

	// Login Part 
	if(isset($_POST['login-click']))
	{
		$email = $_POST['useremail'];
		$pass = md5($_POST['password']);
		$st = "SELECT role,sid,pid from users where email = '$email' And password = '$pass'";
		$result = $db->GetData($st);
		if(mysqli_num_rows($result))
		{
			while ($row = mysqli_fetch_assoc($result)) {

				$_SESSION['user-role'] = $row['role'];
				if(empty($row['sid']))
				{
					$_SESSION['user-id'] = $row['pid'];
				}
				else
				{
					$_SESSION['user-id'] = $row['sid'];
				}
			}
			echo '<script> alert("Login Successfully"); </script>';
		}
		else
		{
			echo '<script> alert("Invalid Email or Password"); </script>';
		}

	}

	// logout click

	if(isset($_GET['logout']))
	{
		$_SESSION["user-role"] = null;
		header("Location:index.php");
	}

	// Add Course
	if(isset($_POST['addCource']))
	{
		
		$st = "SELECT * from schedule,course where schedule.cid = course.cid And schedule.sid = ".$_SESSION['user-id'];
		$result = $db->GetData($st);
		if(mysqli_num_rows($result)>=4)
		{
			echo '<script> alert("Already you have taken Maximum numbers of Course");</script>';
		}
		else
		{   $uid = $_SESSION['user-id'];		
			$cid = $_POST['cid'];
			$cs = $_POST['cSchedule'];			
			$st ="INSERT INTO `schedule`(`sid`,`cid`,courseSchedule) VALUES ('$uid','$cid','$cs')";
			if($db->InsertData($st))
			{
				echo '<script> alert("Course Added Successfully");</script>';
			}
			
		}
	}]=

	// Drop Course
	if(isset($_GET['dropid']))
	{
		$st = "DELETE FROM schedule WHERE cid=".$_GET['dropid'];
		if($db->InsertData($st))
		{
			echo '<script> alert("Course droped Successfully");</script>';
			echo '<script> window.location.href="addCourse.php" </script>';
		}
	}

	if(isset($_POST['Add-user-click']))
	{
		$role = $_POST['role'];
		$password = md5($_POST['password']);
		$email = $_POST['email'];
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$smobile = $_POST['smobile'];
		switch ($role) {
			case 'student':
			{
				$st ="INSERT INTO student(sMobile) VALUES ('$smobile')";
				$id = $db->LastId($st);
				$st ="INSERT INTO `users`(`sid`,`name`, `gender`, `email`, `password`, `role`) VALUES ($id,'$name','$gender','$email','$password','$role')";
				if($db->InsertData($st))
				{
					echo '<script> alert("Student Add Successfully");</script>';
				}
			}
			case 'admin':
			{
				$st ="INSERT INTO `users`(,`name`, `gender`, `email`, `password`, `role`) VALUES ('$name','$gender','$email','$password','$role')";
				if($db->InsertData($st))
				{
					echo '<script> alert("Admin Add Successfully");</script>';
				}
			}
			case 'professor':
			{
				$st ="INSERT INTO professor(pContac) VALUES ('$smobile')";
				$id = $db->LastId($st);
				$st ="INSERT INTO `users`(`pid`,`name`, `gender`, `email`, `password`, `role`) VALUES ($id,'$name','$gender','$email','$password','$role')";
				if($db->InsertData($st))
				{
					echo '<script> alert("Professor Add Successfully");</script>';
				}

			}
			default:
				
				break;
		}

	}


	// Admin Add Cource

	if(isset($_POST['added-cource']))
	{
		$cname = $_POST['cname'];
		$ccode = $_POST['ccode'];
		$cfee  = $_POST['cfee'];
		$cTake  = $_POST['cTake'];
		$st = "INSERT INTO `course`( `cName`, `cCode`,`cFee`,`cTake`) VALUES ('$cname','$ccode','$cfee','$cTake')";
		if($db->InsertData($st))
		{
			echo '<script> alert("Course Add Successfully");</script>';
		}
		else
		{
			echo '<script> alert("Error Add Course");</script>';
		}
	}

?>