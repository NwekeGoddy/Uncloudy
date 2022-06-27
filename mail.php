<?php
// Saving visitor email to a variable
  $visitor_email = $_POST['email'];


  $email_from = 'hello@uncloudy.co';
  $email_subject = "UNCLOUDY NOTIFICATION";
  $email_body = "You have received a waitlist vsitor email:\n".
                          "Here is the email:\n $visitor_email".

    
    $to = "$visitor_email";

    $headers = "From: $email_from";
    
    // $headers .= "Reply-To: $visitor_email \r\n";

    if($visitor_email!=NULL){
        mail($to,$email_subject,$email_body,$headers);
    }
    //redirect
    header("Location:index.html");

?>