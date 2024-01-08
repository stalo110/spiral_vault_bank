<?php
include 'scripts/db.php';
include 'adminhead.php';
if(isset($_POST['edit'])){

                        $username=$_POST['username'];
                        $sql = "SELECT * FROM users WHERE username ='$username';";
                        $result = mysqli_query($conn,$sql);
                        $result_checker = mysqli_num_rows($result);
                if($result_checker > 0){
                    while($data = mysqli_fetch_assoc($result)){  
                    $id = $data['id'];
                    $acctname = $data['acctname'];
                    $acctnumber = $data['acctnumber'];
                    $email = $data['email'];
                    $tel = $data['tel'];
                    $accttype = $data['accttype'];
                    $birth = $data['birth'];
                    $addr = $data['addr'];
                    $nation = $data['nation'];
                    $city = $data['city'];
                 
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
                    


                             echo "
                           
                             <body style='background-color:#4e73df'>
                             
                             <div class='container'>
                             <div class='container'>
                                       
                             <div class='card o-hidden border-0 shadow-lg my-5'>
                               <div class='card-body p-0'>
                                 <!-- Nested Row within Card Body -->
                                 <div class='row'>
                                   
                                   <div class='col-lg-7'>
                                     <div class='p-5'>
                                       <div class='text-center'>
                                         <h1 class='h4 text-gray-900 mb-4'>Update Customer Informations....</h1>
                                         
                                       </div>
         

            <form method='POST' class='user' action='scripts/adminupdatescript.php'>

                           <div class='form-group row'>
                            
                           <div class='col-sm-6 mb-3 mb-sm-0'>
                           <label style='color:black'>Account name</label>
                    <input type='text' class='form-control form-control-user' name='acctname' value='$acctname' placeholder='account name'> 
            </div>

            <div class='col-sm-6'>
            <label style='color:black'>Email Address</label>
         <input type='text' class='form-control form-control-user' name='email'  value='$email' placeholder='email'> 
                     </div>
                     </div>

                     <div class='form-group'>
                     <div>
                     <label style='color:black'>Phone Number</label>
                   <input type='text' name='tel' class='form-control form-control-user' value='$tel' placeholder='phone'> 
                     </div>
                     </div>

                     <div class='form-group row'>
               <div class='col-sm-6 mb-3 mb-sm-0'>
               <label style='color:black'>Account Type</label>
                    <input type='text' name='accttype' class='form-control form-control-user' value='$accttype' placeholder='account type'> 
                    </div>

                    <div class='col-sm-6'>
                    <label style='color:black'>Date of Birth</label>
                   <input type='date' name='birth' class='form-control form-control-user' value='$birth' placeholder='date of birth'> 
                   </div>
                   </div>

                   <div class='form-group row'>
                  <div class='col-sm-6'>
                  <label style='color:black'>Address</label>
                 <input type='text' name='addr' class='form-control form-control-user' value='$addr'> 
                 </div>

                 <div class='col-sm-6'>
               
                 <label style='color:black'>Country</label>
                   <input type='text' name='nation' class='form-control form-control-user' value='$nation' placeholder='country'> 
                   </div>
                   </div>
                  

                  <div class='form-group'>
                      <div >
                      <label style='color:black'>City</label>
                    <input type='text' name='city' class='form-control form-control-user' value='$city' placeholder='city'> 
                    </div>
                  
                <div class='col-sm-6'>
                <label style='color:black'>Marital Status</label>
                   <input type='text' name='marital' class='form-control form-control-user' value='$marital' placeholder='marital'> 
                   </div>
                   </div>

                   <div class='form-group row'>
                    <div class='col-sm-6'>
                    <label style='color:black'>Gender</label>
                 <input type='text' name='gender' class='form-control form-control-user' value='$gender' placeholder='gender'> 
                 </div>

         
                   <input type='hidden' name='username' class='form-control form-control-user' value='$username' placeholder='username'>
                  

                  
                   <div class='col-sm-6'>
                   <label style='color:black'>Password</label>
                <input type='password' name='pwd' class='form-control form-control-user' value='$pwd' placeholder='password'>
                </div>
</div>
                <div class='form-group row''>
                <div class='col-sm-6'>
                <label style='color:black'>Pin</label>
                 <input type='password' name='pin' class='form-control form-control-user' value='$pin' placeholder='pin'> 
                 </div>
              
                    <div class='col-sm-6'>
                    <label style='color:black'>Account Balance</label>
                    <input type='text' name='acctbal' class='form-control form-control-user' value='$acctbal' placeholder='account balance'>
                        </div>
                        </div>
                  
                        <div class='form-group row'> 
                        <div>  
                  <label style='color:black'>Book</label>
            <input type='text' name='book' class='form-control form-control-user' value='$book' placeholder='book'>
                        </div>
                        </div>

                        <div class='form-group row'> 
                        <div class='col-sm-6'>
                        <label style='color:black'>Tac Code</label>
                 <input type='text' name='tac' class='form-control form-control-user' value='$tac' placeholder='tac code'> 
                     </div>
                     

                     <div class='col-sm-6'>
                     <label style='color:black'>Tax Code</label>
                    <input type='text' name='tax' class='form-control form-control-user' value='$tax' placeholder='tax code'> 
                        </div>
                        </div>

                    

                    <input type='submit' name='adminupdate' value='UPDATE' class='btn btn-success'> 

                    <a class='btn btn-danger' href='update.php' > CLOSE </a>
                


            </form>
            
        </div>
   </body>
   </html>
";

                




        
















                     }




                }
}				


?>




