<?php

	include 'db.php';
	session_start();

	//GET DATA

	if(isset($_POST['delete'])){
		$usd = $_POST['username'];

		$sql = "SELECT * FROM users WHERE username='$usd'";
		$result = mysqli_query($conn,$sql);
		$result_check = mysqli_num_rows($result);

		if($result_check > 0){

			while($data = mysqli_fetch_assoc($result)){

				$_SESSION['usd'] = $data['username'];

				$us = $_SESSION['usd'];

				$sql = "DELETE FROM users WHERE username='$us'";
				mysqli_query($conn,$sql);


				header("Location:../update.php?del=succ");
				exit();

			}

		}


		
	}