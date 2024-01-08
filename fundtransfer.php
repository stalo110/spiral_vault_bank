<?php
  include "userhead.php";
?>

    
<div class="col-md-8">
<?php
 $sql = "SELECT * FROM users WHERE username='$session' ";
 $result= mysqli_query($conn,$sql);
 $result_checker= mysqli_num_rows($result);
 if($result_checker > 0){
     while($data = mysqli_fetch_assoc($result)){
        $tac = $data['tac'];
        $tax = $data['tax'];
        $acctbal = $data['acctbal'];
      
     }}

?>

    
     <div class="row row2 animate" data-anim-type="fadeInUp" data-anim-delay="100">
 
     </div>
     <script>
function validateForm() {
  var bname = document.forms["transfer"]["bname"].value;
  var bnacct = document.forms["transfer"]["bnacct"].value;
  var bbank = document.forms["transfer"]["bbank"].value;
  var tac = document.forms["transfer"]["tac"].value;
  var tax = document.forms["transfer"]["tax"].value;
  var baddr = document.forms["transfer"]["baddr"].value;
  var bemail = document.forms["transfer"]["bemail"].value;
  var amount = document.forms["transfer"]["amount"].value;
  var balance = document.forms["transfer"]["bal"].value;
  var taxcode = document.forms["transfer"]["taxcode"].value;
  var taccode = document.forms["transfer"]["taccode"].value;
  var amounti = parseInt(amount,10);
  var descrip = document.forms["transfer"]["descrip"].value;
  
  if(amounti > balance){
    swal('Transfer Failed','Amount is greater than your current balance','error');
     return false;
  }if(tac!==taccode){
  swal('Invalid Tac Code','please contact the bank support if you didnt receive any Tac code on account activation','error');
     return false;
  }if(tax!==taxcode){
    swal('Invalid Tax Code','please contact the bank support if you didnt receive any Tax code on account activation','error');
     return false;
  }if (bname == "" || bnacct == "" ||bbank==""||bswift==""||iban==""||baddr==""||bemail==""||amount==""||descrip=="") {
    swal('Transfer Not Processed','All transfer details are expected to be filled','error');
    return false;
    }




}
</script>
     
     <div class="row animate" data-anim-type="fadeInUp" data-anim-delay="100">
     <?php
                  $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                   if(strpos($url, 'transferrequest=success') == true){
                       echo "<p class='alert alert-danger' style='color:red;font-weight:13px;margin-left:13px'>Your Transfer Request has Been Received and is being Processed</p>";
                   }   
       ?>
    

<form method=post action="scripts/confirm.php" onsubmit="return validateForm()" name="transfer">

<br>
<table cellspacing=0 cellpadding=2 border=0 class="tab">



 <div class="col-md-12">
                <div class="inp-group">
                    <i class="pe-7s-user"></i> 
                    <label for="username">Beneficiary Name</label>
                    <input type="text" name="bname" value='' placeholder="Enter your Beneficiary Name"> 
                </div>
            </div>
            
            <input type="hidden" name="bal" value='<?php echo $acctbal?>' placeholder="Enter your Beneficiary Name">
            <input type="hidden" name="taccode" value='<?php echo $tac?>' placeholder="Enter your Beneficiary Name">
            <input type="hidden" name="taxcode" value='<?php echo $tax?>' placeholder="Enter your Beneficiary Name">

             <div class="col-md-12">
                <div class="inp-group">
                    <i class="pe-7s-pin"></i> 
                    <label for="username">Beneficiary Account Number</label>
                    <input type="text" name="bnacct"  placeholder="Enter Beneficiary Number"> 
                </div>
            </div>

            <div class="col-md-12">
                <div class="inp-group">
                    <i class="pe-7s-culture"></i> 
                    <label for="username">Beneficiary Bank</label>
                    <input type="text" name="bbank"  placeholder="Enter Beneficiary Bank"> 
                </div>
            </div>


            <div class="col-md-12">
                <div class="inp-group">
                    <i class="pe-7s-link"></i> 
                    <label for="username">Tax Code</label>
                    <input type="text" name="tax"  placeholder="Enter Account Tax Code"> 
                </div>
            </div>

            <div class="col-md-12">
                <div class="inp-group">
                    <i class="pe-7s-server"></i> 
                    <label for="username">Tac Code</label>
                    <input type="text" name="tac"  placeholder="Enter Account Tac code"> 
                </div>
            </div>
            

            <div class="col-md-12">
                <div class="inp-group">
                    <i class="pe-7s-home"></i> 
                    <label for="username">Beneficiary Resident Address</label>
                    <input type="text" name="baddr"  placeholder="Enter Beneficiary Resident Address"> 
                </div>
            </div>
           
            <div class="col-md-12">
                <div class="inp-group">
                    <i class="pe-7s-mail-open-file"></i> 
                    <label for="username">Beneficiary Email Address</label>
                    <input type="text" name="bemail"  placeholder="Enter Beneficiary Email Address"> 
                </div>
            </div>

            <div class="col-md-12">
                <div class="inp-group">
                    <i class="pe-7s-cash"></i> 
                    <label for="username">Amount</label>
                    <input type="text" name=amount  placeholder="Enter Amount"> 
                </div>
            </div>

            <div class="col-md-12">
                <div class="inp-group">
                    <i class="pe-7s-help1"></i> 
                    <label for="username">Purpose of Transfer</label>
                    <input type="text" name="descrip"  placeholder="Enter Purpose of Transfer"> 
                </div>
            </div>

            


<br>
             <button type="submit" name="transfer" class="btn btn-info btn-info" style="margin-left:15px;margin-top:10px; background:  color:white;">PROCEED    </button>
</table>

<br><br>
</form>


  
      
      
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