<?php

	include 'db.php';
	session_start();
	
	if(isset($_POST['adminupdate'])){
		$tranid = $_POST['transid'];
		$status = mysqli_real_escape_string($conn,$_POST['status']);
		$date = mysqli_real_escape_string($conn,$_POST['date']);
		

	
		$sql = "UPDATE transact

				SET stat='$status',tdate='$date'

				WHERE tranid = '$tranid'
		";

		mysqli_query($conn,$sql);
		 header("Location:../transferupdate.php?update=success");
		exit();

			



	}else{
		header("Location:../adminupdate.php?error");
		exit();
	}