<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject =$_POST['subject'];
$message = $_POST['message'];

$email_from ='info@dklegendspro.com';

$email_sudject= 'New Form submission';

$email_body ="User Name: $name.\n".
              "User Email: $visitor_email.\n".
               "Subject: $subject.\n". 
                "Useer Message: $message .\n";

$to ='dhipandhanush57@gmail.com';

$headers ="From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_sudject,$email_body,$headers);

headers("Location: contact.html");

?>