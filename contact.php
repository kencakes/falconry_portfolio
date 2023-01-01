<?php
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "Styles Restaurant Site";
    $email_subject = "New Message From Styles Contact";
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Message: $message.\n";

    $to ="vansaet.kendra@gmail.com"
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html")
?>