<?php 
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Construct email headers
  $emailheader = "From: " . $name . " <" . $email . ">\r\n";
  $emailheader .= "Reply-To: " . $email . "\r\n";
  $emailheader .= "MIME-Version: 1.0\r\n";
  $emailheader .= "Content-Type: text/html; charset=utf-8\r\n"; // Change text/plain to text/html
  $emailheader .= "X-Mailer: PHP/" . phpversion();

  // Recipient email address
  $recipient = "abd.alrahman.olabi@gmail.com";  //Company Email (Recipient)

  // Construct email body
  $body = '
  <html>
  <head>
    <style>
      .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        text-align: left;
      }
      .content {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        text-align: left;
      }
      .message {
        padding: 10px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>Message Details:</h2>
      <div class="content">
        <p><strong>Name:</strong> ' . $name . '</p>
        <p><strong>Email:</strong> ' . $email . '</p>
        <p><strong>Subject:</strong> ' . $subject . '</p>
        <div class="message">
          <p><strong>Message:</strong></p>
          <p>' . $message . '</p>
        </div>
      </div>
    </div>
  </body>
  </html>
  ';


  // Email subject
  $email_subject = "Binaa Virtual School International";

  // Send email and handle success or failure
  if (mail($recipient, $email_subject, $body, $emailheader)) {
    echo '<script>
    alert("Your Message Has Been Successfully Sent.");
    window.location.replace("Home");
    </script>';
  } else {
    echo '<script>
    alert("Sorry, There Was an Error While Sending Your Message. Please Try Again Later.");
    window.location.replace("Home");
    </script>';
  }
?>
