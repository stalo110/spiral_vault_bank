<?php

include 'db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

if (isset($_POST['userregister'])) {

    $acctname = mysqli_real_escape_string($conn, $_POST['acctname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $tel = mysqli_real_escape_string($conn, $_POST['tel']);
    $accttype = mysqli_real_escape_string($conn, $_POST['accttype']);
    $birth = mysqli_real_escape_string($conn, $_POST['birth']);
    $addr = mysqli_real_escape_string($conn, $_POST['addr']);
    $nation = mysqli_real_escape_string($conn, $_POST['nation']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $marital = mysqli_real_escape_string($conn, $_POST['marital']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $pin = mysqli_real_escape_string($conn, $_POST['pin']);

    $acctnumber = rand(5000000, 1000000000);
    $tac = rand(1000, 5000);
    $tax = rand(3000, 7000);
    $acct = 0;

    // IMAGE 
    $target = "../upload/" . basename($_FILES['img']['name']);
    $img = $_FILES['img']['name'];

    // Attempt to move the uploaded file
    if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {

        // INSERT INTO DB
        $sql = "INSERT INTO users (acctname,acctnumber,email,tel,accttype,birth,addr,nation,city,states,marital,gender,username,pwd,pin,acctbal,tac,tax,img) 
                VALUES ('$acctname','$acctnumber','$email','$tel','$accttype','$birth','$addr','$nation','$city','$state','$marital','$gender','$username','$pwd','$pin','$acct','$tac','$tax','$img')";

        if (mysqli_query($conn, $sql)) {

            // Send email using PHPMailer
            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host = 'mail.thespiralvault.com'; // Set the SMTP server to send through
                $mail->SMTPAuth = true;
                $mail->Username = 'info@thespiralvault.com'; // SMTP username
                $mail->Password = '@Spiral001'; // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable SSL encryption
                $mail->Port = 465; // TCP port to connect to

                // Recipients
                $mail->setFrom('info@thespiralvault.com', 'Spiral Vault');
                $mail->addAddress($email); // Add recipient email

                // Content
                $mail->isHTML(true); // Enable HTML format for better styling
                $mail->Subject = 'Welcome to The Spiral Vault. Your Account is Successfully Registered';

                $mail->Body = "
                    <html>
                    <head>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                color: #333;
                                line-height: 1.6;
                            }
                            h2 {
                                color: #0044cc;
                            }
                            .content {
                                background-color: #f9f9f9;
                                padding: 20px;
                                border-radius: 5px;
                            }
                            .footer {
                                margin-top: 20px;
                                font-size: 12px;
                                color: #777;
                            }
                        </style>
                    </head>
                    <body>
                        <div class='content'>
                            <h2>Dear $acctname,</h2>
                            <p>
                                We are pleased to inform you that your account has been successfully registered with 
                                <strong>The Spiral Vault</strong>. You can now log in and explore your account using the details provided below:
                            </p>
                            <p>
                                <strong>Username:</strong> $username<br>
                                <strong>Password:</strong> $pwd<br>
                                <strong>PIN:</strong> $pin
                            </p>
                            <p>
                                Please keep your login credentials safe and do not share them with anyone. If you have any issues accessing your account or need assistance, feel free to contact our support team.
                            </p>
                            <p>
                                We look forward to serving you and ensuring you have the best experience with us.
                            </p>
                            <p>Best regards,<br><strong>The Spiral Vault Team</strong></p>
                        </div>
                        <div class='footer'>
                            <p>This is an automated message. Please do not reply to this email. If you need support, contact us at info@thespiralvault.com.</p>
                        </div>
                    </body>
                    </html>
                ";

                $mail->send();
                echo 'Message has been sent';

            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

            header("Location:../login.php?suc");
            exit();

        } else {
            echo "Error inserting into database: " . mysqli_error($conn);
        }

    } else {
        echo "Failed to upload image.";
    }

} else {
    header("Location:../register.php?error");
    exit();
}
