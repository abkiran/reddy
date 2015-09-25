<?php
include_once('mailer/PHPMailerAutoload.php');
echo "gfbfd";
//Contact form 

if (isset($_POST['cont_send'])) {

    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $phone = ($_POST['phone']);
    $address = ($_POST['address']);
    $msg = ($_POST['message']);
    $msg = nl2br($msg);

    $body = "<table>"
            . "<tr><td>Name: </td><td>$name</td></tr>"
            . "<tr><td>Phone: </td><td>$phone</td></tr>"
            . "<tr><td>Email: </td><td>$email</td></tr>"
            . "<tr><td>Address: </td><td>$address</td></tr>"
            . "<tr><td>Message: </td><td>$msg</td></tr>"
            . "</table>";
 $to="kirancse123@gmail.com";
    //$to = get_option('admin_email'); 
        $mail = new PHPMailer();
//$mail->setFrom('anas@hexwhale.com', 'Anas');
    $mail->Host = "localhost";
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->FromName = "Quick contact from venuscounty.co.in";
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
    $mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "kirancse123@gmail.com";

//Password to use for SMTP authentication
    $mail->Password = "soft3_kk";
         $mail->IsHTML(true);
        $mail->Subject = "Contact us";
        $mail->addAddress($to);
        //$mail->AddBcc($to);
        $mail->Body = $body;
        if (!$mail->send()) {

        echo "Mailer Error: " . $mail->ErrorInfo;

        } else {
        }
        header("location: http://venuscounty.co.in");
}