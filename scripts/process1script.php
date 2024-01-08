<?php

	session_start();

	include 'db.php';

	$uid=  $_SESSION['username'];

	if(isset($_POST['process1'])){

		$ta = mysqli_real_escape_string($conn,$_POST['tac']);

		if(empty($ta)){

			header("Location:../process1.php?empty");
			exit();	
		}else{

			$sql = "SELECT * FROM users WHERE username='$uid' AND tac='$ta'";
			$result = mysqli_query($conn,$sql);
			$result_query = mysqli_num_rows($result);

			if($result_query < 1){
				header("Location:../process1.php?mail=code");
				 exit();	
				

				}else{
					while($data = mysqli_fetch_assoc($result)){

					$tacc = $data['tac'];

					if($ta != $tacc ){

						// header("Location:../process1.php?wcode");
						// exit();	

						// echo "wrong";

					}else{

						header("Location:../process2.php?mail=suc");
				 		exit();

					}
				}
				


			}


		}


	}else{
		header("Location:../process1.php?error");
		exit();
	}







?>