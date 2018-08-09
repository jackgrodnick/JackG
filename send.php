<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'jack.grodnick@gmail.com';

    $email_subject = "new email form";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                       "User Message: $message.\n";


    $to = "avinash6252@gmail.com";

    $headers = "From: $email_form \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html")

    
?>
