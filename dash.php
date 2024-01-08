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
		<!-- {{-- <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon"> --}} -->
        <title>Cadence Partner</title>		
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
		
        <link rel="shortcut icon" type="image/x-icon" href="img/apex.png" />

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
</head>
	
    <body data-spy="scroll" data-offset="80">

		
	
		
		<!-- START HOME -->
		        <section data-stellar-background-ratio="0.3" id="home" class="home-parallax2" style="background-image: url(assets/img/bg/parallax-bg.jpg); background-size:cover; background-position:top center;">        
    
        <div id="large-header" style="position:absolute;"><canvas id="demo-canvas"></canvas></div>

        
<div class="container" >
  <div class="row"> 
                
   <div class="col-md-12 col-sm-12 col-xs-12">
   
    
    </div>
   </div>
   
    

            </div>
            
            
            <!-- END CONTAINER-->
		</section>
        	
<section class="accountsection">

<div class="container" >
   <div class="row">
    <div class="col-md-4" >
     <div class="userbox animate" data-anim-type="fadeInUp" data-anim-delay="100" style='background:#336699'>
     <?php
			 echo "<img height='150px' width='130px' style='border-radius:50%' src='upload/".$img." '>";
					?>
     <div class="info">
    <p style="color:white;margin-top:10px" id="lblGreetings"></p>
    
     </div> 
     <!-- <a href="profile.php" class="edit" style='background:black;'><i class="pe-7s-config"></i>Profile</a> -->
     
    </div>
    
   <div>
     <ul class="usermenu animate" data-anim-type="fadeInUp" data-anim-delay="300">

      <li><a href="dash.php" ><i class="pe-7s-display1 hvr-pop" style='color:black;'></i> Dashboard</a></li>

       <li><a href="fundtransfer.php"><i class="pe-7s-cash hvr-pop" style='color:black;'></i> Funds Transfer</a></li>

      <li><a href="transacthistory.php"><i class="pe-7s-wallet hvr-pop" style='color:black;'></i> Transanction History</a></li>

      <li><a href="accountprofile.php"><i class="pe-7s-user hvr-pop" style='color:black;'></i> Account Profile</a></li>

     
     
     </ul>
    </div> 
    


    </div>
    


    <!-- {{-- END OF EVERY OTHER PAGE --}} -->
    
<div class="col-md-8">


    
     <!-- <div class="row row2 animate" data-anim-type="fadeInUp" data-anim-delay="100">
 <script src="https://cdn.logwork.com/widget/countdown.js"></script>
<a href="https://logwork.com/countdown-bqi" class="countdown-timer" data-style="columns" data-timezone="America/Toronto" data-date="2020-06-24 12:00" data-digitscolor="#4177b9">Expert Plan Countdown</a>
     </div> -->    
     <div class="row">
      
      <div class="col-md-6">
      
          <div class="det-box animate" data-anim-type="fadeInUp" data-anim-delay="500" id="signupBox">
           <div class="upline">
                 <i class="pe-7s-user" style='background:#336699;'></i>
                 <h4 style="margin-bottom:3px;">Account <span class="blu" style='color:black;'>Name</span></h4>
          </div>
          <h5 style='color:black;'><?php echo $acctname;?></h5>

                                            
                                            <!-- <a href="fund.php" class="btn btn-light-bg-three" style="margin-top:25px;">Make Investment</a> -->
    </div>
      
      </div>
      
      <div class="col-md-6">
      
          <div class="det-box animate" data-anim-type="fadeInUp" data-anim-delay="500" id="signupBox">
           <div class="upline">
                 <i class="pe-7s-server" style='background:#336699;'></i>
                 <h4 style="margin-bottom:3px;">Account <span class="blu" style='color:black;'>Type</span></h4>
          </div>
          <h5 style='color:black;'><?php echo $accttype;?></h5>

                                            
                                            <!-- <a href="fund.php" class="btn btn-light-bg-three" style="margin-top:25px;">Make Investment</a> -->
    </div>
      
      </div>
      




      <div class="col-md-6">
      
          <div class="det-box animate" data-anim-type="fadeInUp" data-anim-delay="500" id="signupBox">
           <div class="upline">
                 <i class="pe-7s-wallet" style='background:#336699;'></i>
                 <h4 style="margin-bottom:3px;">Account <span class="blu" style='color:black;'>Balance</span></h4>
          </div>
          <!-- <h2 style='color:black;'><b>$<?php echo number_format("$acctbal");?></b></h2> -->
          <h2 style='color:black;'><b>$<?php echo $acctbal;?></b></h2>
<!--           
<table class="tabel">
										
                                            </table> -->
                                            
                                            <!-- <a href="fund.php" class="btn btn-light-bg-three" style="margin-top:25px;">Make Investment</a> -->
    </div>
      
      </div>
      

      
      <div class="col-md-6">
      
      
                <div class="det-box animate" data-anim-type="fadeInUp" data-anim-delay="600" id="signupBox">


                 <div class="upline">
                 <i class="pe-7s-culture" style='background:#336699;'></i>
                  <h4 style="margin-bottom:3px;">Available <span class="blu" style='color:black;'>Balance</span></h4>
             </div>
             <!-- <h2 style='color:black;'><b>$<?php echo number_format("$acctbal");?></b></h2> -->
             <h2 style='color:black;'><b>$<?php echo $acctbal;?></b></h2>
             <table class="tabel">
                                              </table>
                                            
                                            <!-- <a href="with.php" class="btn btn-light-bg-three" style="margin-top:25px;">Withdraw Funds</a> -->

    </div>
      
      
      </div>
      
      
      
     </div>
     <div class="row">
      
      <div class="col-md-6">
      
          <div class="det-box animate" data-anim-type="fadeInUp" data-anim-delay="500" id="signupBox">
           <div class="upline">
                 <i class="pe-7s-user" style='background:#336699;'></i>
                 <h4 style="margin-bottom:3px;">Account <span class="blu" style='color:black;'>Number</span></h4>
          </div>
          <h5 style='color:black;'><?php echo $acctnumber;?></h5>

                                            
                                            <!-- <a href="fund.php" class="btn btn-light-bg-three" style="margin-top:25px;">Make Investment</a> -->
    </div>
      
      </div>
    
    </div>
    
   
   
   
   
   <div class="row" style='background:;'>
    <div class="col-md-12" style='background:;'>
 
 <div class="reff-box animate" data-anim-type="fadeInUp" data-anim-delay="800" style='background:#337ab7;'>
   <div class="col-md-7">
   <h3 style='color:white;'>SUPPORT ISSUES</h3>
   <p style='color:white;'>Issues related to transactions and other related Finanacial actions are addressed through the bank customer support.</p>
   </div>
    
    
<div class="col-md-5" >


<label style="cursor:pointer; width:100%;" id="copy-address" data-clipboard-target="div.reffl span">
 <div style='color:black;' class="reffl"><i class="pe-7s-mail-open-file" title="Copy Link" style='color:white;'></i> <span style='color:white;'>info@cadencepartner.com</span></div>
</label>
</div>
  </div> 
    

    </div>
   </div>
  </div>
</section>




<!-- START FOOTER BOTTOM -->


<?php
  include "foot.php";
?>