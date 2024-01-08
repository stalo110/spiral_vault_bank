<?php

	include 'db.php';
	session_start();

	//GET DATA

	if(isset($_POST['delete'])){
		$tranid = $_POST['tranid'];

		$sql = "SELECT * FROM transact WHERE tranid='$tranid'";
		$result = mysqli_query($conn,$sql);
		$result_check = mysqli_num_rows($result);

		if($result_check > 0){

			while($data = mysqli_fetch_assoc($result)){

				$_SESSION['tranid'] = $data['tranid'];

				$tra = $_SESSION['tranid'];

				$sql = "DELETE FROM transact WHERE tranid='$tra'";
				mysqli_query($conn,$sql);


				header("Location:../transferupdate.php?del=succ");
				exit();

			}

		}


		
	}