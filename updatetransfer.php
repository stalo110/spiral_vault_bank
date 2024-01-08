<?php
include 'scripts/db.php';
include 'adminhead.php';
if(isset($_POST['edit'])){

                        $transid=$_POST['transactid'];
                        $sql = "SELECT * FROM transact WHERE tranid ='$transid';";
                        $result = mysqli_query($conn,$sql);
                        $result_checker = mysqli_num_rows($result);
                if($result_checker > 0){
                    while($data = mysqli_fetch_assoc($result)){  
                    $id = $data['id'];
                    $acctname = $data['acctname'];
                    $acctnumb = $data['acctnumb'];
                    $bnkname = $data['bnkname'];
                    $descrip = $data['descrip'];
                    $amount = $data['amount'];
                    $tdate = $data['tdate'];
                    $transactid = $data['tranid'];
                    $stat = $data['stat'];
                   
                 
                 
                    


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
         

            <form method='POST' class='user' action='scripts/transupdatescript.php'>

                           <div class='form-group row'>
                            
                           <div class='col-sm-6 mb-3 mb-sm-0'>
                           <label style='color:black'>Transfer Status</label>
                   
                    <select class='form-control form-control' name='status'>
                    <option value='$stat'> $stat </option>
                    <option value='SUCCESSFUL'>SUCCESSFUL</option>
                    <option value='CANCELLED'> CANCELLED </option>
                    <option value='FAILED'> FAILED </option>
                   
</select>
           
                    </div>

            </div>

            <div class='form-group row'>
                            
            <div class='col-sm-6 mb-3 mb-sm-0'>
            <label style='color:black'>Transfer date</label>
            <input type='text' name='date' class='form-control form-control-user' value='$tdate' placeholder='username'>
                  

     </div>

</div>


                
                  
               
               
                   <input type='hidden' name='transid' class='form-control form-control-user' value='$transactid' placeholder='username'>
                  

           
                  
                     

                   

                    

                    <input type='submit' name='adminupdate' value='UPDATE' class='btn btn-success'> 

                    <a class='btn btn-danger' href='transferupdate.php' > CLOSE </a>
                


            </form>
            
        </div>
   </body>
   </html>
";

                




        
















                     }




                }
}				


?>




