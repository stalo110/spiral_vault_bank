<?php

	include 'db.php';
	session_start();
	
	if(isset($_POST['adminupdate'])){
		$usd = $_POST['username'];
		$acctname = mysqli_real_escape_string($conn,$_POST['acctname']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$tel = mysqli_real_escape_string($conn,$_POST['tel']);
		$accttype = mysqli_real_escape_string($conn,$_POST['accttype']);
		$birth = mysqli_real_escape_string($conn,$_POST['birth']);
		$addr = mysqli_real_escape_string($conn,$_POST['addr']);
		$nation = mysqli_real_escape_string($conn,$_POST['nation']);
		$city = mysqli_real_escape_string($conn,$_POST['city']);
	
		$marital = mysqli_real_escape_string($conn,$_POST['marital']);
		$gender = mysqli_real_escape_string($conn,$_POST['gender']);
	
		$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
		$pin = mysqli_real_escape_string($conn,$_POST['pin']);
		$acctbal = mysqli_real_escape_string($conn,$_POST['acctbal']);
		$book = mysqli_real_escape_string($conn,$_POST['book']);
		$tac = mysqli_real_escape_string($conn,$_POST['tac']);
		$tax = mysqli_real_escape_string($conn,$_POST['tax']);
	
	
		$sql = "UPDATE users

				SET acctname='$acctname',email='$email',tel='$tel',accttype='$accttype',birth='$birth',addr='$addr',nation='$nation',city='$city',marital='$marital',gender='$gender',pwd='$pwd',pin='$pin',acctbal='$acctbal',book='$book',tac='$tac',tax='$tax'

				WHERE username = '$usd'
		";

		mysqli_query($conn,$sql);
		 header("Location:../update.php?update=success");
		exit();

			



	}else{
		header("Location:../adminupdate.php?error");
		exit();
	}