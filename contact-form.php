<?php 
// 


if(isset($_POST['submit']))
{
    $to = "ajaykumar786025@gmail.com"; // this is your Email address
    $fname = $_POST['Name'];
    $lname = $_POST['lname'];
    $from = $_POST['Email']; // this is the sender's Email address
    $mobile = $_POST['Phone'];
    $url = $_POST['url'];
    $questions = $_POST['questions'];
    $subject = "Contact Form - Enquiry";
    $message = "Email: " .$from."<br>"."First Name: " .$fname. "<br>"."Last Name: " .$lname. "<br>" ."url: " .$url."<br>" . "Phone: " .$mobile. "<br>" . "questions: " .$questions;
    $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
  $headers .= "From:" .$from. "\r\n" .
  "Reply-To: bajajitsolution24@gmail.com" . "\r\n" .
  "X-Mailer: PHP/" . phpversion();
    $success = mail($to,$subject,$message,$headers);
     if( $success == true )  
   {
      echo '<script>alert("Email has been sent successfully. we will contact you shortly.");</script>';
   }
   else
   {
	    echo '<script>alert("Message could not be sent....");</script>';
      
   }
   
    }
    echo '<script>window.location="https://bajajitsolution.com/training/sanjay/Google-Athlete/"</script>';
    
?>