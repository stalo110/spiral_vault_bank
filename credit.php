


						<?php
include 'scripts/db.php';
include 'adminhead.php';

							if(isset($_POST['credit'])){

								$usernam= $_POST['usd'];


								$sql = "SELECT * FROM users WHERE username = '$usernam' ";
								$result = mysqli_query($conn,$sql);
								$result_checker = mysqli_num_rows($result);

								if($result_checker > 0){
									while($data = mysqli_fetch_assoc($result)){

										$acctname = $data['acctname'];
										$accttype = $data['accttype'];
										$email = $data['email'];
										$acctbal= $data['acctbal'];
										$username= $data['username'];

										$_SESSION['acctnam'] = $data['acctname'];
										$_SESSION['accttype'] = $data['accttype'];
										$_SESSION['email'] = $data['email'];
										$_SESSION['acctbal'] = $data['acctbal'];
										$_SESSION['username'] = $data['username'];

										$acctnam = $_SESSION['acctnam'];
										$accttype = $_SESSION['accttype'];
										$emai = $_SESSION['email'];
										$acctba = $_SESSION['acctbal'];
										$usernam = $_SESSION['username'];



                                        echo "
                                       
										<body style='background-color:#003679'>
										<div class='container'>
                             <div class='container'>
                                       
                             <div class='card o-hidden border-0 shadow-lg my-5'>
                               <div class='card-body p-0'>
                                 <!-- Nested Row within Card Body -->
                                 <div class='row'>
                                   
                                   <div class='col-lg-7'>
                                     <div class='p-5'>
                                       <div class='text-center'>
                                         <h1 class='h4 text-gray-900 mb-4'>Credit Customer....</h1>
                                         
                                       </div>
                        <form action='scripts/creditscript.php' method='POST' class='user'>
                        
						<div class='form-group row'>
						<div class='col-sm-6 mb-3 mb-sm-0'>
						<label style='color:black'>Account Name</label>
			<input type='text' class='form-control form-control-user' name='acctname' value='$acctnam'>
                        </div>
		
						<div class='col-sm-6'>
						<label style='color:black'>Account Type</label>	
	<input type='text' class='form-control form-control-user' name='acctnumb' value='$accttype'>
							</div>
							</div>

							<div class='form-group'>
							<div>
							<label style='color:black'>Amount</label>
			<input type='text' name='amoun' class='form-control form-control-user' placeholder='Enter Amount'> 
			</div>
			</div>
							<input type='hidden' name='email' value='$emai'> 

							<input type='hidden' name='uid' value='$usernam'> 

							<input type='hidden' name='acctbal' value='$acctba'> <br><br>

							<input type='submit' name='cred' value='CREDIT' class='btn btn-success'>

							<a class='btn btn-danger' href='op.php'> CLOSE </a>
                        </form>
                        </div>
                         </body>
                        <html>
                        ";


									}

								}












							}


						?>

						


				
