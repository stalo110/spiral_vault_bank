<?php


	include 'db.php';

	if(isset($_POST['adminreg'])){

		$acctname = mysqli_real_escape_string($conn,$_POST['acctname']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$tel = mysqli_real_escape_string($conn,$_POST['tel']);
		$accttype = mysqli_real_escape_string($conn,$_POST['accttype']);
		$birth = mysqli_real_escape_string($conn,$_POST['birth']);
		$addr = mysqli_real_escape_string($conn,$_POST['addr']);
		$nation = mysqli_real_escape_string($conn,$_POST['nation']);
		$city = mysqli_real_escape_string($conn,$_POST['city']);
		$state = mysqli_real_escape_string($conn,$_POST['state']);
		$marital = mysqli_real_escape_string($conn,$_POST['marital']);
		$gender = mysqli_real_escape_string($conn,$_POST['gender']);
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
		$pin = mysqli_real_escape_string($conn,$_POST['pin']);

		$acctnumber = rand(5000000,1000000000);
		$tac=rand(1000,5000);
		$tax=rand(3000,7000);
		$acct = 0;

		// IMAGE 
		$target = "../upload/".basename($_FILES['img']['name']);
		$img = $_FILES['img']['name'];


		// INSERT INTO DB

		$sql ="INSERT INTO users (acctname,acctnumber,email,tel,accttype,birth,addr,nation,city,states,marital,gender,username,pwd,pin,acctbal,tac,tax,img) VALUES ('$acctname','$acctnumber','$email','$tel','$accttype','$birth','$addr','$nation','$city','$state','$marital','$gender','$username','$pwd','$pin','$acct','$tac','$tax','$img')";

		move_uploaded_file($_FILES['img']['tmp_name'], $target);


		 $mailTo = $email;
    	$header = "From: contact@springbankplc.org";
    	$sub = " Your Account was successfully registered";
    	$txt = "Dear ".$acctname."\n\n"."Your account was successfully registered with HSBC BANK. These are your login details;"."\n\n"."Username: ".$acctnumber."\n\n"."Password: ".$pwd."\n\n"."Pin: ".$pin."\n\n"."Thanks"."\n\n"."From: HSBC BANK";

         mail($mailTo,$sub,$txt,$header);

		//  $token = 'nMuMwWTKAL';
		// $mobile = $tel;
		// $msg ="Dear ".$acctname."\n\n"."Your account was successfully registered with HSBC BANK. These are your login details;"."\n\n"."Username: ".$username."\n\n"."Password: ".$pwd."\n\n"."Pin: ".$pin."\n\n"."Thanks"."\n\n"."From: HSBC BANK";
		// $site = 'Howi';
		// $url = "http://api.fast2sms.com/sms.php?token=".$token."&mob=".$mobile."&mess=".$msg."&sender=".$site."&route=0";


// SENDING MAIL

$to = $email;
$subject = 'Registration Successful';
$from = 'info@cadencepartner.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message

$message = " <html><body style='width:100%;background: rgb(247, 247, 247);'>";
$message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 150, 26);border-radius: 5px;'>";
$message.=  "<div style='width:100%;'>";

$message.=  "<img src='https://cadencepartner.com/logo.png'>";

$message.=  "<h1 style='padding: 1px;font-family: Georgia;'><span style='color:rgb(253, 150, 26);'>Cadence </span>Partner</h1>";
$message.=  "<h4 style='padding: 1px;'>Dear ".$username.",</h4> ";
$message.= " <br>";

$message.="Dear ".$acctname."\n\n"."Your account was successfully registered with Cadence Partner. These are your login details;"."\n\n"."Username: ".$acctnumber."\n\n"."Password: ".$pwd."\n\n"."Pin: ".$pin."\n\n"."Thanks"."\n\n"."From: Cadence Partner";

$message .=  "<p style='text-align:center;'><span style='color:rgb(253, 150, 26);'>Cadence</span> Partner  © 2020 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";

mail($to, $subject, $message, $headers);


		mysqli_query($conn,$sql);
		
		header("Location:../admindash.php?suc");
		 exit();

		
		
	}else{
		header("Location:../admin.php?error");
		exit();
	}