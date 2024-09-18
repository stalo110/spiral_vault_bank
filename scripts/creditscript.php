<?php

include 'db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

if (isset($_POST['cred'])) {

    $acctna = mysqli_real_escape_string($conn, $_POST['acctname']);
    $acctnumb = mysqli_real_escape_string($conn, $_POST['acctnumb']);
    $amoun = mysqli_real_escape_string($conn, $_POST['amoun']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $acctbal = mysqli_real_escape_string($conn, $_POST['acctbal']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);

    $totalbal = $acctbal + $amoun;
    $date = date('Y-m-d H:i:s a');
    $decrip = "our BANK";

    // Use a prepared statement to update the user's balance
    $stmt = $conn->prepare("UPDATE users SET acctbal=? WHERE username=?");
    $stmt->bind_param("ds", $totalbal, $uid);

    if ($stmt->execute()) {

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
            $mail->Subject = 'CREDIT ALERT. Your Account was Successfully credited';

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
                        <img src='https://thespiralvault.com/logo.png' alt='Logo'>
                        <h2>Dear $acctna,</h2>
                        <p>We are pleased to inform you that your account has been successfully credited.</p>
                        <p>Below are the details:</p>

                        <table style='padding:8px;line-height: 30px;margin-left: 0px;'>
                            <tr><td><strong>Credit/Debit:</strong></td><td>Credit</td></tr>
                            <tr><td><strong>Account Name:</strong></td><td>$acctna</td></tr>
                            <tr><td><strong>Account Number:</strong></td><td>$acctnumb</td></tr>
                            <tr><td><strong>Date/Time:</strong></td><td>$date</td></tr>
                            <tr><td><strong>Description:</strong></td><td>$decrip</td></tr>
                            <tr><td><strong>Amount:</strong></td><td>$ $amoun</td></tr>
                            <tr><td><strong>Balance:</strong></td><td>$ $totalbal</td></tr>
                            <tr><td><strong>Available Balance:</strong></td><td>$ $totalbal</td></tr>
                        </table>

                        <p>We look forward to serving you and ensuring you have the best experience with us.</p>
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

        header("Location: ../op.php?credit=success");
        exit();

    } else {
        header("Location: ../admin.php?error");
        exit();
    }
}
