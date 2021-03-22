<?php
  $name = $_get['name'];
  $visitor_email = $_get['email'];
  $message = $_get['message'];
  
  
  $email_from = '180104052@aust.edu';
  
  $email_subject = "New Form Submission";
  
  $email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
				"User Message: $message.\n";
				
  $to = "jesminakter2802@gmail.com";
  $headers  = "From: $email_from\r\n";
  $headers .="Reply-To: $visitor_email\r\n";
  mail($to,$email_subject,$email_body,$headers);
  header("Location: contact us.html");
  
?>  