<?php
// ini_set('SMTP','smtp.gmail.com');
// ini_set('smtp_port',587);
// ini_set('safe_mode','OFF');
// ini_set('sendmail_from','dsol07128@gmail.com');
//the subject
$rec = "ravi123dethaliya@outlook.com";
$sub = "Regarding Completion of Sending Mail in PHP";
//the message
$msg = "Hello Sir, My ID is 22MSIT038 and Name is Dhruv Solanki.Email Sent Successfully.";
//recipient email here
// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// $headers .= 'From: Dhruv' . "\r\n";
// $headers .= 'Cc: dsol07128@gmail.com' . "\r\n";
// $headers = 'From: Dhruv' . "\r\n" .
//     'Reply-To: ravi123dethaliya@gmail.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();


// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// // More headers
// $headers .= 'From: <www.ghostrider701@gmail.com>' . "\r\n";
// $headers .= 'Cc: ravi123dethaliya@gmail.com' . "\r\n";

//send email
//$headers = "From: dsol07128@gmail.com";

$count=mail($rec,$sub,$msg);
if($count>0){
    echo"<h1>mail sent successfully.</h1>";
    }
    else
    echo "<h1>Failed</h1>"

?>