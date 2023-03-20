<?php

if(isset($_POST['submit'])){
  $mailto = "anidaso.farms21@gmail.com";
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $body = $_POST['message'];


  //echo $body, $email, $subject, $email;

  $message = "Client Name: " . $name . "\n" 
  . "with email: ". $email. "\n\n" 
  . "Client Message: ". "\n" . $body;

  /*$message1 = "Dear ". $name. "\n" . "Thank you for contacting us! We will get back to you soon";*/

  $headers = "From: " . $email;
  $headers2 = "From:" . $mailto;

  $res = mail($mailto, $subject, $message, $headers);

  //var_dump($res);

  if($res){
    $_SESSION['success'] = "Your Message was sent Successfully";
     header('Location: ../contact.php');
  }else{
    $_SESSION['error'] = "Your Message was sent Successfully";
    return header('Location: ../contact.php');
  }
}

?>