<?php 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $emailheader = "Subject: " . $subject;

  $recipient = "abd.alrahman.olabi@gmail.com";  //Company Email (That Will Recive The Mail)

  $body = "From\r\n"."Name: ".$name."\r\n"."Email: ".$email. "\r\n\n". $message;
  
  $email_subject = "Binaa Virtual School International";

  if (mail($recipient, $email_subject, $body, $emailheader)) {
    echo '<script>
    alert("Email Sent Successfully")
    window.location.replace("index.html");
    </script>';
  } else {
    echo '<script>
    alert("Sorry, Failed While Sending Mail!")
    window.location.replace("index.html");
    </script>';  }
?>
