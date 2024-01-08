<?php
    session_start();

    if(isset($_POST['login'])){

        include 'db.php';

        //get the user data
		$username = mysqli_real_escape_string($conn,$_POST['username']);
        $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
        $pin = mysqli_real_escape_string($conn,$_POST['pin']);
        
        if(empty($username) || empty($pwd) || empty($pin)){

            header("Location:../login.php?mail=loginempty");
            exit();

        }else{

            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = mysqli_query($conn,$sql);
            $result_check = mysqli_num_rows($result);

            if($result_check < 1){
                header("Location:../login.php?mail=invaliduid");
                exit();

            }else{

                while($data=mysqli_fetch_assoc($result)){

                    $pwds = $data['pwd'];
                    $pins = $data['pin'];

                if($pwd != $pwds){

                     header("Location:../login.php?mail=incorrectpwd");
                     exit();

                }else{

                    if($pin != $pins){

                        header("Location:../login.php?mail=incorrectpin");
                         exit();

                    }else{

                        $_SESSION['username'] = $data['username'];
                        $_SESSION['acctbal'] = $data['acctbal'];
                        $_SESSION['email'] = $data['email'];

                        $_SESSION['acctname'] = $data['acctname'];
                        $_SESSION['acctnumber'] = $data['acctnumber'];
                        $_SESSION['accttype'] = $data['accttype'];

                        $_SESSION['last_login_timestamp'] = time(); 
                        // echo  $_SESSION['username'];

                         header("Location:../dash.php?login=userloginwassuccessful");
                         exit();



                    }



                }





                }



            }

        }

    }else{
        header("Location:../login.php?loginerror");
        exit();
    }

    ?>