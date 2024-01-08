<?php


    include 'db.php';
    // function sendsms($recipients, $message_content) {
    //     $username = env('SMS_USERNAME');
    //     $password = env('SMS_PASSWORD');
    //     $message = urlencode($message_content);
    //     $senderid = urlencode('Print Order');//name of the website 
       
    //     $url =
    //    'http://api.smartsmssolutions.com/smsapi.php?username=' . $username .
    //                 '&password='.$password.
    //                  '&sender='.$senderid.
    //                  '&recipient='.$recipients.
    //                    '&message='.$message.'&';
    //     $send = file_get_contents($url);
    // }

    if(isset($_POST['userregister'])){

        $acctname = mysqli_real_escape_string($conn,$_POST['acctname']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $tel = mysqli_real_escape_string($conn,$_POST['tel']);
        $accttype = mysqli_real_escape_string($conn,$_POST['accttype']);
        $birth = mysqli_real_escape_string($conn,$_POST['birth']);
        $addr = mysqli_real_escape_string($conn,$_POST['addr']);
        $nation = mysqli_real_escape_string($conn,$_POST['nation']);
        $city = mysqli_real_escape_string($conn,$_POST['city']);
        $state = mysqli_real_escape_string($conn,$_POST['state']);
        $marital = mysqli_real_escape_string($conn,$_POST['marital']);
        $gender = mysqli_real_escape_string($conn,$_POST['gender']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
        $pin = mysqli_real_escape_string($conn,$_POST['pin']);

        $acctnumber = rand(5000000,1000000000);
        $tac=rand(1000,5000);
        $tax=rand(3000,7000);
        $acct = 0;

        // IMAGE 
        $target = "../upload/".basename($_FILES['img']['name']);
        $img = $_FILES['img']['name'];


        // INSERT INTO DB

        $sql ="INSERT INTO users (acctname,acctnumber,email,tel,accttype,birth,addr,nation,city,states,marital,gender,username,pwd,pin,acctbal,tac,tax,img) VALUES ('$acctname','$acctnumber','$email','$tel','$accttype','$birth','$addr','$nation','$city','$state','$marital','$gender','$username','$pwd','$pin','$acct','$tac','$tax','$img')";

        move_uploaded_file($_FILES['img']['tmp_name'], $target);


         $mailTo = $email;
        $header = "From: info@cadencepartner.com";
        $sub = " Your Account was successfully registered";
        $txt = "Dear ".$acctname."\n\n"."Your account was successfully registered with Spring Bank Plc. These are your login details;"."\n\n"."Username: ".$username."\n\n"."Password: ".$pwd."\n\n"."Pin: ".$pin."\n\n"."Thanks"."\n\n"."From: Spring Bank Plc";

         mail($mailTo,$sub,$txt,$header);

        //  $token = 'nMuMwWTKAL';
        // $mobile = $tel;
        // $msg ="Dear ".$acctname."\n\n"."Your account was successfully registered with HSBC BANK. These are your login details;"."\n\n"."Username: ".$username."\n\n"."Password: ".$pwd."\n\n"."Pin: ".$pin."\n\n"."Thanks"."\n\n"."From: HSBC BANK";
        // $site = 'Howi';
        // $url = "http://api.fast2sms.com/sms.php?token=".$token."&mob=".$mobile."&mess=".$msg."&sender=".$site."&route=0";







        mysqli_query($conn,$sql);
        
        header("Location:../login.php?suc");
         exit();

    }else{
        header("Location:../register.php?error");
        exit();
    }
