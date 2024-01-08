
<?php

session_start();
include 'db.php';

$uid=  $_SESSION['username'];

if(isset($_POST['process2'])){

    $ta = mysqli_real_escape_string($conn,$_POST['tax']);

    if(empty($ta)){

        header("Location:../process2.php?mail=empty");
        exit();	
    }else{

        $sql = "SELECT * FROM users WHERE username='$uid' AND tax='$ta'";
        $result = mysqli_query($conn,$sql);
        $result_query = mysqli_num_rows($result);

        if($result_query < 1){
            header("Location:../process2.php?mail=wcode");
             exit();	
            

            }else{
                while($data = mysqli_fetch_assoc($result)){

                $tacc = $data['tax'];

                if($ta != $tacc ){

                    
                }else{

                    header("Location:../sent.php?mail=confirm");
                     exit();

                }
            }
            


        }


    }


}else{
    header("Location:../process2.php?error");
    exit();
}







?>




























