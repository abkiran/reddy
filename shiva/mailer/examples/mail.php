<?php
if (isset($_POST)) {
    $subject = 'VOLUNTEER APPLICATION';
    $to = "gaya32411@gmail.com";

    $commit = $_POST['commit'];
    $yr = $_POST['yr'];
    $hear = $_POST['hear'];
    $fn = $_POST['fn'];
    $dob = $_POST['day'];
    $ln = $_POST['ln'];
    $gender = $_POST['gender'];
    $addr = $_POST['addr'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $phone = $_POST['phone'];
    $alternum = $_POST['alternum'];
    $mail = $_POST['mail'];
    $emer_contact = $_POST['emer-contact'];
    $eme_num = $_POST['emer-num'];
    $relation = $_POST['relation'];
    $interest = $_POST['interest'];
    $refname1 = $_POST['refname1'];
    $refname2 = $_POST['refname2'];
    $refnum1 = $_POST['refnum1'];
    $refnum2 = $_POST['refnum2'];
    $refrelation1 = $_POST['refrelation1'];
    $refrelation2 = $_POST['refrelation2'];
    $exp = $_POST['exp'];
    $txtarea1 = $_POST['txtarea1'];
    $txtarea2 = $_POST['txtarea2'];
    $txtarea3 = $_POST['txtarea3'];
    $txtarea4 = $_POST['txtarea4'];
//echo $txtarea4;

    $body = <<<EOD
<br><hr><br>
<h3>Basic Information</h3><br>
<b>Do you have at least three hours on Sunday and a minimum of six months you can commit to volunteering in TeensMAD Community Service Projects?</b> : $commit<br>
<b>Are you over 14 years old?</b> : $yr <br>
<b>Where did you hear about the TeensMAD Community Service Program?</b> :$hear <br>
<h3>Personal Information</h3><br>
<b>First Name</b> : $fn <br>
<b>Last Name</b> :$ln <br>
<b>Date of Birth</b> :$dob <br>
<b>Gender</b> : $gender <br>
<b>Address</b> : $addr <br>
<h3>Personal Information</h3><br>
<b>In which region are you interested in volunteering?</b> : $interest <br>
<b>Reference Name </b> :$refname1 <br>
<b>Reference Phone No</b> :$refnum1 <br>
<b>Relationship</b> : $refrelation1 <br>
<b>Do you have previous experience working with children</b> : $exp <br>
<b>Why do you want to work with TeensMAD Community Service Projects</b> :$txtarea1 <br>
<b>What do you hope to gain from your volunteer experience</b> :$txtarea2 <br>
<b>Describe your past volunteer experiences</b> : $txtarea3 <br>
<b>What challenges do you expect to encounter in volunteering for TeensMAD Community Service Projects</b> : $txtarea4<br>
EOD;

//echo $body;
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
    date_default_timezone_set('Etc/UTC');

    require './PHPMailer-master/PHPMailerAutoload.php';

//Create a new PHPMailer instance
    $mail = new PHPMailer();

//Tell PHPMailer to use SMTP
    $mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
    $mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';

//Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
    $mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "gayathri@hexwhale.com";

//Password to use for SMTP authentication
    $mail->Password = "gayathrigayu";

//Set who the message is to be sent from
    $mail->setFrom('gayathri@hexwhale.com', 'gaya');

//Set an alternative reply-to address
    $mail->addReplyTo('gayathri@hexwhale.com', 'gaya');

//Set who the message is to be sent to
    $mail->addAddress('gaya32411@gmail.com', 'John Doe');

//Set the subject line
    $mail->Subject = $subject;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
    $mail->Body = $body;

//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "<script>alert('Thank you for submitting your application to be a Volunteer at TeensMAD Community Service . 
        	We are so excited you are interested in joining our efforts to Make A Difference in the lives others. 
        	We will review your application and provide a response within two business days.'); 
  			window.location='index.html';</script>";
    }
}
?>