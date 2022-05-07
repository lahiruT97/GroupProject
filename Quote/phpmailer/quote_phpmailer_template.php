<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>QUOTE - Request a quote for every type of companies</title>

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="../css/custom.css" rel="stylesheet">
    
    <script type="text/javascript">
    function delayedRedirect(){
        window.location = "../index.html"
    }
    </script>

</head>
<body onLoad="setTimeout('delayedRedirect()', 8000)" style="background-color:#fff;">
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';

$mail = new PHPMailer(true);

try {

    //Recipients - main edits
    $mail->setFrom('info@quote.com', 'Message from QUOTE');                    // Email Address and Name FROM
    $mail->addAddress('jhon@quote.com', 'Jhon Doe');                           // Email Address and Name TO - Name is optional
    $mail->addReplyTo('noreply@quote.com', 'Message from QUOTE');              // Email Address and Name NOREPLY
    $mail->isHTML(true);                                                       
    $mail->Subject = 'Message from QUOTE';                                     // Email Subject

    //The email body message
    $message = "<strong>Details</strong><br />";
    $message .= "1) What is your budget: " . $_POST['question_1'] . "<br />";
    $message .= "<br />2) What your poject need:<br />";
        foreach($_POST['question_2'] as $value) 
            { 
            $message .=   "- " .  trim(stripslashes($value)) . "<br />";
            };
    $message .= "Additional info: " . $_POST['addtional_info'] . "<br />";
    $message .= "<br />3) Answers to the following questions:";
    $message .= "<br />If you already have an hosting plan, please define: " . $_POST['select_1'];
    $message .= "<br />If you need an hosting plan, please define which one: " . $_POST['select_2'];
    $message .= "<br />If you need a newsletter campaign, please define the provider you prefer: " . $_POST['select_3'];
    $message .= "<br /><br /><strong>User personal details</strong>";
    $message .= "<br />Company name: " . $_POST['company_name'];
    $message .= "<br />Name: " . $_POST['firstname'];
    $message .= "<br />Last Name: " . $_POST['lastname'];
    $message .= "<br />Email: " . $_POST['email'];
    $message .= "<br />Telephone " . $_POST['telephone'];
    $message .= "<br />Country: " . $_POST['country'];
    $message .= "<br />Terms and conditions accepted: " . $_POST['terms'];

    // Get the email's html content
    $email_html = file_get_contents('template-email.html');

    // Setup html content
    $body = str_replace(array('message'),array($message),$email_html);
    $mail->MsgHTML($body);

    $mail->send();

    // Confirmation/autoreplay email send to who fill the form
    $mail->ClearAddresses();
    $mail->addAddress($_POST['email']); // Email address entered on form
    $mail->isHTML(true);
    $mail->Subject    = 'Confirmation'; // Custom subject
    
    // Get the email's html content
    $email_html_confirm = file_get_contents('confirmation.html');

    // Setup html content
    $body = str_replace(array('message'),array($message),$email_html_confirm);
    $mail->MsgHTML($body);

    $mail->Send();

    echo '<div id="success">
            <div class="icon icon--order-success svg">
                 <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                  <g fill="none" stroke="#8EC343" stroke-width="2">
                     <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                     <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                  </g>
                 </svg>
             </div>
            <h4><span>Request successfully sent!</span>Thank you for your time</h4>
            <small>You will be redirect back in 5 seconds.</small>
        </div>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    
?>
<!-- END SEND MAIL SCRIPT -->   

</body>
</html>