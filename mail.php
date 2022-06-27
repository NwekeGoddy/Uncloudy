<?php
// Saving visitor email to a variable
  $visitor_email = $_POST['email'];


  $email_from = 'nwekechidigodwin460@gmail.com';

  $email_subject = "UNCLOUDY NOTIFICATION";

  $email_body = "You have received a waitlist vsitor email:\n".
                          "Here is the email:\n $visitor_email".

                          
                          $to = "nwekechidigodwin460@gmail.com";

                          $headers = "From: $email_from \r\n";
                        
                          $headers .= "Reply-To: $visitor_email \r\n";
                        
                          mail($to,$email_subject,$email_body,$headers);
// if($_POST["message"]) {


// mail("nwekechidigodwin460@gmail.com", "UNCLOUDY NOTIFICATION",


// $_POST["You have successfully been added to unclougy waitlist"]. "From: chidin@cedarview.ng");


// }


?>