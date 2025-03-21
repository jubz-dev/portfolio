<?php
session_start();

require '../../config.php';

header('Content-Type: application/json');
date_default_timezone_set('Asia/Manila');

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $csrfToken = $_POST['csrfToken'] ?? null;

    // Check if CSRF token is valid
    if (!isset($csrfToken) || $csrfToken !== $_SESSION['csrfToken']) {
        echo json_encode([
            'status' => 'failed',
            'message' => 'CSRF token validation failed.'
        ]);
        exit;
    }

    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : null;

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            'status' => 'failed',
            'message' => 'Invalid email address!'
        ]);
        exit;
    }

    // Check if email exists
    $stmt = $db->prepare("SELECT click_count FROM download_tracking WHERE email = ?");
    $stmt->execute([$email]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        // Update click count
        $stmt = $db->prepare("UPDATE download_tracking SET click_count = click_count + 1, last_clicked = NOW() WHERE email = ?");
        $stmt->execute([$email]);
    } else {
        // Insert new record
        $stmt = $db->prepare("INSERT INTO download_tracking (email) VALUES (?)");
        $stmt->execute([$email]);
    }

    // Set session flag to allow download
    $_SESSION['download_allowed'] = true;

    echo json_encode(["status" => "success"]);
}
?>