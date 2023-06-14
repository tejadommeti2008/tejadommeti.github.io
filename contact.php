<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $mobileNumber = $_POST['mobileNumber'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Create the email message
    $emailMessage = "Name: $fullName\n";
    $emailMessage .= "Email: $email\n";
    $emailMessage .= "Mobile Number: $mobileNumber\n";
    $emailMessage .= "Subject: $subject\n";
    $emailMessage .= "Message: $message\n";

    // Set the recipient email address
    $to = 'tejad020080@gmail.com'; // Replace with your desired email address

    // Set the email headers
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $emailMessage, $headers)) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        // Error sending email
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
