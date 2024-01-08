<?php
include 'db.php';
session_start();

if(isset($_POST['transfer'])){
    //get the input from the transfer request form
    $bname= mysqli_real_escape_string($conn,$_POST['bname']);
    $bacct= mysqli_real_escape_string($conn,$_POST['bnacct']);
    $bbank= mysqli_real_escape_string($conn,$_POST['bbank']);
    $bswift= mysqli_real_escape_string($conn,$_POST['bswift']);
    $iban= mysqli_real_escape_string($conn,$_POST['iban']);
    $baddr= mysqli_real_escape_string($conn,$_POST['baddr']);
    $bemail= mysqli_real_escape_string($conn,$_POST['bemail']);
    $amount= mysqli_real_escape_string($conn,$_POST['amount']);
    $descrip= mysqli_real_escape_string($conn,$_POST['descrip']);

    if(empty($bname) || empty($bacct) || empty($bbank) || empty($bswift) || empty($iban) || empty($baddr) || empty($bemail) || empty($amount) || empty($descrip) ){

        header("Location:../transfer.php?mail=empty");
        exit();

    }else{

    
        $_SESSION['bname'] = $bname;
        $_SESSION['bacct'] = $bacct;
        $_SESSION['bbank'] = $bbank;
        $_SESSION['bswift'] = $bswift;
        $_SESSION['iban'] = $iban;
        $_SESSION['baddr'] = $baddr;
        $_SESSION['bemail'] = $bemail;
        $_SESSION['amountt'] = $amount;
        $_SESSION['descrip'] = $descrip;

         header("Location:../process1.php?mail=ben");
         exit();





    }


}else{
    header("Location:../transfer.php?error");
    exit();
}

?>