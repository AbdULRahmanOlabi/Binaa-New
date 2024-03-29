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
  $emailheader .= "Content-Type: text/html; charset=utf-8\r\n";
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
      }
      .content {
        direction: rtl;
        text-align: right;
        font-family: Arial, sans-serif;
        line-height: 1.6;
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
      <h2 style="text-align:right;">:تفاصيل الرسالة</h2>
      <div class="content">
        <p><strong>الاسم:</strong> ' . $name . '</p>
        <p><strong>البريد الالكتروني:</strong> ' . $email . '</p>
        <p><strong>الموضوع:</strong> ' . $subject . '</p>
        <div class="message">
          <p><strong>الرسالة:</strong></p>
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
    alert("تم إرسال البريد الإلكتروني بنجاح");
    window.location.replace("Home");
    </script>';
  } else {
    echo '<script>
    alert("عذرا، حدث خطأ أثناء إرسال رسالتك. الرجاء معاودة المحاولة في وقت لاحق.");
    window.location.replace("Home");
    </script>';
  }
?>
