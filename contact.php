<?php
/**
 * QuickPOS Contact Form Handler
 * 
 * This script processes the contact form submission.
 * It validates the input fields and redirects to a thank-you page.
 */

// Check if form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // Get form data
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Validate empty fields
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required.";
    }
    
    // If there are validation errors, redirect back with error
    if (!empty($errors)) {
        // Store errors in session (optional)
        session_start();
        $_SESSION['contact_errors'] = $errors;
        $_SESSION['form_data'] = [
            'name'    => $name,
            'email'   => $email,
            'message' => $message
        ];
        header("Location: index.php#contact");
        exit;
    }
    
    // Simulate success response
    // In a real application, you would send an email or save to database here
    
    // Redirect to thank-you page
    header("Location: thank-you.html");
    exit;
    
} else {
    // If someone tries to access this page directly (not via POST), redirect to home
    header("Location: index.php");
    exit;
}
?>
