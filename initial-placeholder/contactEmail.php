<?php
$to = "amanda@gradea.co";

if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
  $message = <<<END
The contact form on your website has been filled out! Please see the request below:

Name: {$_POST['name']}
Email: {$_POST['email']}
Company: {$_POST['company']}
Phone: {$_POST['phone']}

Message:
----------
{$_POST['message']}
----------
END;
  if (mail($to, "Website Contact Form", $message, "From: {$_POST['email']}"))
    echo "Your message sent successfully! We will respond soon.";
  else
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
}
else
{
  echo "Sorry, you did not enter a valid email address.";
}
