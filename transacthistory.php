<?php
  include "userhead.php";
?>

    
<div class="col-md-8">


    
     <div class="row row2 animate" data-anim-type="fadeInUp" data-anim-delay="100">
 
     </div>
    
 
     
     <div class="row" >
      

     <p style="color:black;margin-left:15px">Transaction History</p>
     <div class="table-responsive">
<table cellspacing=1 cellpadding=1 border=0 width=100% class='tab'>


<tr>
 
 <td  style="background:#336699; color: white;">Account Name</td>

  <td  style="background:#336699; color: white;">Account Number</td>

  <td style="background:#336699; color: white;">Bank Name</td>

  <td style="background:#336699; color: white;">Description</td>
  <td style="background:#336699; color: white;">Amount</td>
  <td style="background:#336699; color: white;">Date</td>
  <td style="background:#336699; color: white;">Status</td>
  <td style="background:#336699; color: white;">Transaction Id</td>
</tr>
<?php
                        $sql = "SELECT * FROM transact WHERE transactid ='$session' ORDER BY id DESC";
                        $result = mysqli_query($conn,$sql);
                        $result_check = mysqli_num_rows($result);

                        if($result_check > 0){
                            while($data = mysqli_fetch_assoc($result)){

                               
                                 $acctnam = $data['acctname'];
                                $acctnumb = $data['acctnumb'];
                                $bnkname = $data['bnkname'];
                                 $descrip = $data['descrip'];
                                 $amount = $data['amount'];
                                 $tdate = $data['tdate'];
                                 $stat = $data['stat'];
                                 $id = $data['tranid'];


 echo "<tr> ";
                                           
                                                echo '<td>'.$acctnam. '</td>'; 
                                                echo '<td>'.$acctnumb. '</td>'; 
                                                
                                                echo '<td>'.$bnkname. '</td>'; 
                                                 echo '<td>'.$descrip. '</td>'; 
                                                 echo '<td>'.$amount. '</td>';   
                                                 echo '<td>'.$tdate. '</td>';   
                                                 echo '<td>'.$stat. '</td>';   
                                                 echo '<td>'.$id. '</td>';  
                                               
                                echo '</tr>';

                            }

                        }else{
                          echo "<p style='color:red;'>No Deposit Transactions</p>";
                        }


                    ?>


         
       
</table>
</div>
<br>
</td></tr></table>


<br>


  
      
      
     </div>
    
    </div>
   </div>
   
   
   

  </div>
</section>





<!-- START FOOTER BOTTOM -->
<br><br>
<?php
  include "foot.php";
?>