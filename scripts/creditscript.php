<?php

	if(isset($_POST['cred'])){


		include 'db.php';
		

		$acctna = $_POST['acctname'];
		$acctnumb = $_POST['acctnumb'];
		$amoun = $_POST['amoun'];
		$email = $_POST['email'];
		$acctbal = $_POST['acctbal'];
		 $uid = $_POST['uid'];

		$totalbal = $acctbal + $amoun;
         $date= date('Y-m-d H:i:s a');
         $decrip ="our BANK";


		 $sql = "UPDATE users

        SET acctbal='$totalbal'

        WHERE username='$uid'

        ";

        

 $to = $email;
$subject = 'CREDIT ALERT';
$from = 'info@cadencepartner.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();


$message = " <html><body style='width:100%;background: rgb(247, 247, 247);'>";
$message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 150, 26);border-radius: 5px;'>";
$message.=  "<div style='width:100%;'>";

$message.=  "<img src='https://cadencepartner.com/logo.png'>";

$message.=  "<h1 style='padding: 1px;font-family: Georgia;'><span style='color:rgb(253, 150, 26);'>Cadence</span> Partner</h1>";

$message.=  "<h4 style='padding: 1px;'>Dear".$uid .",</h4> ";
$message.= " <br>";
$message.=  "<h3 style='text-align:center;font-family: Georgia;'>Transaction Alert</h3>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";
$message.=  "<table style='padding:8px;line-height: 30px;margin-left: 0px;'>";

$message.=  "<tr><td><strong>Credit/Debit</strong>: </td><td>  Credit   </td></tr>";
$message.= "<tr><td><strong>Account Name</strong>: </td><td>".$acctna. "</td></tr>";
$message.=  "<tr><td><strong>Account Number</strong>: </td><td>  ".$accttype. "</td></tr>";
$message.=  "<tr><td><strong>Date/Time</strong>: </td><td>  ".$date. "</td></tr> ";
$message.=  "<tr><td><strong>Description</strong>: </td><td>  ".$decrip. "</td></tr>";
$message.=  "<tr><td><strong>Amount</strong>: </td><td>$  ".$amoun. "</td></tr> ";
$message.=  "<tr><td><strong>Balance</strong>:</td><td>$  ".$totalbal. " </td></tr> ";
$message.=  "<tr><td><strong>Available Balance</strong>: </td><td>$  ".$totalbal. " </td></tr> ";

$message.=  "</table> ";
$message.= "</div> ";

$message .=  "<p style='text-align:center;'><span style='color:rgb(253, 150, 26);'>Cadence </span> Partner © 2020 All Rights Reserved</p> ";

$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";






	mail($to, $subject, $message, $headers);

         // mail($mailTo,$sub,$txt,$header);


        mysqli_query($conn,$sql);

        header("Location:../op.php?credit=success");
		exit();


	}else{
		header("Location:../admin.php?error");
		exit();
	}