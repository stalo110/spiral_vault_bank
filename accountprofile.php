<?php
  include "userhead.php";
?>

    
    
<div class="col-md-8">


    
     <div class="row row2 animate" data-anim-type="fadeInUp" data-anim-delay="100">
 
     </div>
    
 
     
     <div class="row animate" data-anim-type="fadeInRight" data-anim-delay="100" style="margin-left:-10px">
      


<form action="scripts/editprofile.php" method=post style="margin-left:11px">


<table cellspacing=0 cellpadding=2 border=0 class="blank">
<!-- <caption style="color:red;margin-left:10px">Make Updates to your Profile</caption> -->
<tr>
 <td>Account Name:</td>
 <td><input type=text name=fullname value='' size=30 class=pp placeholder="<?php echo $acctname;?>"></td>
</tr><tr>

 <td> Email Address:</td>
 <td><input type=text name=fullname value='' size=30 class=pp placeholder="<?php echo $email;?>">
</tr>

<tr>
 <td>Telephone no:</td>
 <td><input type=text name=email value=""  size=30 class=pp placeholder="<?php echo $tel;?>"></td>
</tr><tr>
 <td>Account Type:</td>
 <td><input type=text name=password value="" size=30 class=pp placeholder="<?php echo $accttype;?>"></td>
</tr>
    <tr>
   <td>Date of Birth:</td>
   <td><input type=text name=phone value="" size=30 class=pp placeholder="<?php echo $birth;?>"></td>
  </tr>
  <tr>
   <td>City:</td>
   <td><input type=text name=btcadrr value="" size=30 class=pp placeholder="<?php echo $city;?>"></td>
  </tr>
  <tr>
   <td>Nationality:</td>
   <td><input type=text name=btcadrr value="" size=30 class=pp placeholder="<?php echo $nation;?>"></td>
  </tr>
  <tr>
   <td>Address:</td>
   <td><input type=text name=btcadrr value="" class=pp size=30 placeholder="<?php echo $addr;?>"></td>
  </tr>
 
   <td>Marital Status:</td>
   <td><input type=text name=btcadrr value="" class=pp size=30 placeholder="<?php echo $marital;?>"></td>
  </tr>
  <tr>
   <td>Gender:</td>
   <td><input type=text name=btcadrr value="" class=pp size=30 placeholder="<?php echo $gender;?>"></td>
  </tr>

<tr>
 <td>&nbsp;</td>
 <td>
 
</tr></table>
</form>

      
  
      
      
     </div>
    
    </div>
   </div>
   
   
   

  </div>
</section>




<!-- START FOOTER BOTTOM -->

<?php
  include "foot.php";
?>
   