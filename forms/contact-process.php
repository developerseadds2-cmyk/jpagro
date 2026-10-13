<?php
require_once __DIR__ . '/../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . page_url('contact'));
    exit;
}

if (!verify_csrf($_POST['csrf_token'] ?? '')) {
    $_SESSION['form_status'] = 'Your session has expired. Please try the form again.';
    header('Location: ' . page_url('contact'));
    exit;
}

$name = trim((string) ($_POST['name'] ?? ''));
$phone = trim((string) ($_POST['phone'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$company = trim((string) ($_POST['company'] ?? ''));
$requirement = trim((string) ($_POST['requirement'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));

if ($name === '' || $phone === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['form_status'] = 'Please complete the required fields with a valid email address.';
    header('Location: ' . page_url('contact'));
    exit;
}

$subject = 'Website enquiry - ' . $requirement;
$body = "Name: {$name}\nPhone: {$phone}\nEmail: {$email}\nCompany: {$company}\nRequirement: {$requirement}\n\nMessage:\n{$message}";
$headers = [
    'From: ' . CONTACT_EMAIL,
    'Reply-To: ' . $email,
    'Content-Type: text/plain; charset=UTF-8'
];

$sent = mail(CONTACT_EMAIL, $subject, $body, implode("\r\n", $headers));
$_SESSION['form_status'] = $sent
    ? 'Thank you. Your enquiry has been received and our team will be in touch.'
    : 'Your details are valid, but the server could not send the email. Please contact us directly by phone or WhatsApp.';
header('Location: ' . page_url('contact'));
exit;
