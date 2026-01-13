<?php
// Simple contact form processor
// This is a basic implementation - in production, use proper validation and email libraries

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    // Basic validation
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        header('Location: contact.php?status=error&message=All fields are required');
        exit;
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: contact.php?status=error&message=Invalid email address');
        exit;
    }

    // Email to send to
    $to = 'support@gorabrothers.com';
    $email_subject = 'New Contact Form Submission: ' . $subject;
    
    // Email body
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n\n";
    $email_body .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email (in production, use proper email library)
    // mail($to, $email_subject, $email_body, $headers);

    // For now, just log the message or store it
    // In production, store in database or send via email service

    // Redirect with success message
    header('Location: contact.php?status=success');
    exit;
} else {
    // Redirect if accessed directly
    header('Location: contact.php');
    exit;
}
?>
