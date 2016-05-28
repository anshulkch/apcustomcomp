<?php
    
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = 'info@apcustomcomp.com'; 
$subject = $_POST['Website Contact'];
    
$body = "From: $name\n E-Mail: $email\n Message:\n $message";

if ($_POST['submit']) {
    if (mail ($to, $subject, $body)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}

?>