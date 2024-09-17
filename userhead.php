<?php
require_once('scripts/db.php');
session_start();
$session = $_SESSION['username'];
if(!isset($_SESSION['username']))
{
 header("Location:login.php");
}

if(isset($_SESSION['username']))  
{  
     if((time() - $_SESSION['last_login_timestamp']) > 300) // 900 = 15 * 60  
     {  
          header("location:server/logout.php");  
     }  
     else  
     {  
          $_SESSION['last_login_timestamp'] = time();  
        	$sql = "SELECT * FROM users WHERE username ='$session'";
	$result = mysqli_query($conn,$sql);
	$result_checker = mysqli_num_rows($result);

	if($result_checker > 0){

		while($data = mysqli_fetch_assoc($result)){
								$acctname = $data['acctname'];
								$acctnumber = $data['acctnumber'];
								$email = $data['email'];
								$tel = $data['tel'];
								$accttype = $data['accttype'];
								$birth = $data['birth'];
								$addr = $data['addr'];
								$nation = $data['nation'];
								$city = $data['city'];
								// $state = $data['state'];
								$marital = $data['marital'];
								$gender = $data['gender'];
								$username = $data['username'];
								$pwd = $data['pwd'];
								$pin = $data['pin'];
								$acctbal = $data['acctbal'];
								$book = $data['book'];								
								$tac = $data['tac'];
								$tax = $data['tax'];
                $ip = $data['ip'];
                $img = $data['img'];



		}

	}

     }  
}  

?>
<!DOCTYPE html>
<html lang="en">
     <head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="shortcut icon" type="image/x-icon" href="img/apex.png" />
        <title>The Spiral Vault</title>		
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">		
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i|Montserrat:400,700" rel="stylesheet" type="text/css">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">	
        <!-- venobox CSS -->		
		<link rel="stylesheet" href="assets/css/venobox.css">		
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">	

		


    <link href="sweetalert-js/sweetalert.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="sweetalert-js/sweetalert.min.js"></script>
<script type="text/javascript" src="sweetalert-js/sweetalert.js"></script>


        
        
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/iziModal.css?ver=4">
    
    <link href="assets/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />

    
<script>
   $(function () {
     $('.reffl span').attr('id', 'copy-target');
    });
</script>   
<script src="assets/js/clipboard.min.js"></script>
<script>
   $(function () {
     $('.reffl span').attr('id', 'copy-target');
    });
</script>   
<script src="assets/js/clipboard.min.js"></script>

<style>
  #copybtc{
    width:100%;
    margin-top:20px;

  }

  #clickcopy{
    background:green;
    color:white;
    padding:7px;
    /* margin-top:25px; */
    position:relative;
    top:15px;
    cursor:pointer;
  }

</style>
</head>
	
    <body data-spy="scroll" data-offset="80">
    
		
	
		
		<!-- START HOME -->
		        <section data-stellar-background-ratio="0.3" id="home" class="home-parallax2" style="background-image: url(assets/img/bg/parallax-bg.jpg); background-size:cover; background-position:top center;">        
    
        <div id="large-header" style="position:absolute;"><canvas id="demo-canvas"></canvas></div>

        
<div class="container">
  <div class="row"> 
                
   <div class="col-md-12 col-sm-12 col-xs-12">
 
    
    </div>
   </div>
   
    

            </div>
            
            
            <!-- END CONTAINER-->
		</section>
        	
<section class="accountsection">

<div class="container">
   <div class="row">
    <div class="col-md-4">
    <div class="userbox animate" data-anim-type="fadeInUp" data-anim-delay="100" style='background:#336699'>
    <?php
			 echo "<img height='150px' width='130px' style='border-radius:50%' src='upload/".$img." '>";
					?>
     <div class="info">
    <p style="color:white;margin-top:10px" id="lblGreetings"></p>
    </div> 
     <!-- <a href="profile.php" class="edit" style=''><i class="pe-7s-config"></i>Profile</a> -->
     
    </div>
    <ul class="usermenu animate" data-anim-type="fadeInUp" data-anim-delay="300">

      <li><a href="dash.php" ><i class="pe-7s-display1 hvr-pop" style='color:black;'></i> Dashboard</a></li>

       <li><a href="fundtransfer.php"><i class="pe-7s-cash hvr-pop" style='color:black;'></i> Funds Transfer</a></li>

      <li><a href="transacthistory.php"><i class="pe-7s-wallet hvr-pop" style='color:black;'></i> Transanction History</a></li>

      <li><a href="accountprofile.php"><i class="pe-7s-user hvr-pop" style='color:black;'></i> Account Profile</a></li>

     
     
     </ul>
    
<!--     
   <div>
     <ul class="usermenu animate" data-anim-type="fadeInUp" data-anim-delay="300">

      <li><a href="dash.php"><i class="pe-7s-display1 hvr-pop"></i> Dashboard</a></li>

       <li><a href="fund.php"><i class="pe-7s-display1 hvr-pop"></i> Fund</a></li>

      <li><a href="invest.php"><i class="pe-7s-wallet hvr-pop"></i> Make Investment</a></li>

      <li><a href="with.php"><i class="pe-7s-cash hvr-pop"></i> Withdraw Funds</a></li>

      <li><a href="investhist.php"><i class="pe-7s-safe hvr-pop"></i> My Investments</a></li>

      <li><a href="earnhist.php"><i class="pe-7s-search hvr-pop"></i> Withdrawal History</a></li>

      <li><a href="deposithist.php"><i class="pe-7s-search hvr-pop"></i> Deposit History</a></li>

      <li><a href="ref.php"><i class="pe-7s-users hvr-pop"></i> Referrals</a></li>

      <li><a href="profile.php"><i class="pe-7s-config hvr-pop"></i> Profile</a></li>
     </ul>
    </div> -->
    
 

    </div>
    
