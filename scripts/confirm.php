<?php

	session_start();

	if(isset($_POST['transfer'])){

		include 'db.php';
		$session = $_SESSION['username'];
	
		 $acctnames = mysqli_real_escape_string($conn,$_POST['bname']);
		 $acctnnum = mysqli_real_escape_string($conn,$_POST['bnacct']);
		 $bkname = mysqli_real_escape_string($conn,$_POST['bbank']);
		 $amout = mysqli_real_escape_string($conn,$_POST['amount']);
		 $desp = mysqli_real_escape_string($conn,$_POST['descrip']);
		 $status="pending";
		 $transferid=uniqid();
		$date=date("l jS \of F Y h:i:s A");
   //send admin notifications for silver plan
   $mailTo = "cadencepartnercompany@gmail.com";
   $header = "From: info@cadencepartner.com";
   $sub = "NEW TRANSACTION";
   $txt = "Hello Sir, There is a new transfer transaction to : "."\n\n"."benefeciary name: ".$acctnames."\n\n"."beneficiary bank: ".$bkname."\n\n"."amount: ".$amout;
   mail($mailTo,$sub,$txt,$header);
   

        $sql="INSERT INTO transact (acctname,acctnumb,bnkname,descrip,amount,transactid,tdate,stat,tranid) VALUES ('$acctnames','$acctnnum','$bkname','$desp', '$amout','$session','$date','$status','$transferid')";
        
         mysqli_query($conn,$sql);


        header("Location:../fundtransfer.php?transferrequest=success");



                               
		
	


	}else{
		header("Location:../sent.php?error");
		exit();
	}