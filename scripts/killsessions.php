<?php
	
	if(isset($_POST['killsessions'])){
		// session_destroy();
		// session_start();

		session_unset($_SESSION['bname']);
		session_unset($_SESSION['bacct']);
		session_unset($_SESSION['bbank']);
		session_unset($_SESSION['bswift']);
		session_unset($_SESSION['iban']);
		session_unset($_SESSION['baddr']);
		session_unset($_SESSION['bemail']);
		session_unset($_SESSION['amountt']);
		// session_unset($_SESSION['amount']);
		session_unset($_SESSION['descrip']);
		// session_unset($_SESSION['acctbal']);
		

		header("Location:../userdash.php?killsuc");
		exit();

	}



?>