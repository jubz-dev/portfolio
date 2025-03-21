<?php
session_start();

require '../../config.php';

// Prevent direct access without validation
if (!isset($_SESSION['download_allowed']) || $_SESSION['download_allowed'] !== true) {
    http_response_code(403);
    die("Unauthorized access.");
}

// Validate CSRF token
if (!isset($_POST['csrfToken']) || $_POST['csrfToken'] !== $_SESSION['csrfToken']) {
    http_response_code(403);
    die("Invalid CSRF token.");
}

// Unset session flag after download to prevent reuse
unset($_SESSION['download_allowed']);

$file = __DIR__ . '/../documents/Jubail_Salamida.pdf';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Content-Length: ' . filesize($file));
    header('Cache-Control: no-cache, no-store, must-revalidate');
    header('Pragma: no-cache');
    header('Expires: 0');
    
    // Output the file
    readfile($file);
    exit;
} else {
    die("The requested file does not exist.");
}
?>
