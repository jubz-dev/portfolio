<?php
session_start();

require_once('../../config.php');
require_once('../mailerClass/PHPMailerAutoload.php');

// Set the response header to JSON
header('Content-Type: application/json');
date_default_timezone_set('Asia/Manila');


// Check if it's a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the raw POST data
    $input = json_decode(file_get_contents('php://input'), true);

    // Validate the input data
    $csrfToken = $input['csrfToken'] ?? null;

    // Check if CSRF token is valid
    if (!isset($csrfToken) || $csrfToken !== $_SESSION['csrfToken']) {
        echo json_encode([
            'status' => 'failed',
            'message' => 'CSRF token validation failed.'
        ]);
        exit;
    }

    // Validate the input data
    $name = isset($input['name']) ? trim(htmlspecialchars($input['name'], ENT_QUOTES, 'UTF-8')) : null;
    $email = isset($input['email']) ? filter_var(trim($input['email']), FILTER_SANITIZE_EMAIL) : null;
    $message = isset($input['message']) ? trim(htmlspecialchars($input['message'], ENT_QUOTES, 'UTF-8')) : null;

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            'status' => 'failed',
            'message' => 'Invalid email address!'
        ]);
        exit;
    }

    // Prevent Email Header Injection
    $email = str_replace(["\r", "\n"], '', $email);
    $name = str_replace(["\r", "\n"], '', $name);

    if (!$name || !$email || !$message) {
        // Send an error response if any of the required fields are missing
        echo json_encode([
            'status' => 'failed',
            'message' => 'All fields are required!'
        ]);
        exit;
    }
    
    // Email Sending
    $mail = new PHPMailer;

    try {
        // SMTP settings

        $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
        );

            //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;

        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';

        //Set the hostname of the mail server
        $mail->Host = $_ENV['MAIL_HOST'];

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = $_ENV['MAIL_PORT'];

        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = $_ENV['MAIL_ENCRYPTION'];

        //Whether to use SMTP authentication
        $mail->SMTPAuth = $_ENV['MAIL_AUTH'] === 'true';

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = $_ENV['MAIL_USERNAME'];

        //Password to use for SMTP authentication
        $mail->Password = $_ENV['MAIL_PASSWORD'];

        //Set who the message is to be sent from
        $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);

        //Set an alternative reply-to address
        // $mail->addReplyTo('replyto@example.com', 'First Last');

        //Set who the message is to be sent to
        $mail->addAddress($_ENV['MAIL_TO_ADDRESS'], $name);

        //Set the subject line
        $mail->Subject = 'New Message (rjmsalamida site) - From ' . $name;

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

        $mail->Body = "<b>Message Info</b><br>Full Name: ".$name."<br> Email : ".$email." <br> Message:<br> ".$message;

        //Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';
        $mail->isHTML(true);
        //Attach an image file
        //$mail->addAttachment('images/phpmailer_mini.png');

        // Send the email
        if ($mail->send()) {
            // Return success response
            echo json_encode([
                'status' => 'success',
                'message' => 'Your message has been sent successfully!'
            ]);
        } else {
            // Return failure response if the email wasn't sent
            echo json_encode([
                'status' => 'failed',
                'message' => 'Failed to send your message. Please try again later.'
            ]);
        }

        // End of Email Sending
    } catch (Exception $e) {
        // Catch any errors and return a failure response
        echo json_encode([
            'status' => 'failed',
            'message' => 'Mailer Error: ' . $mail->ErrorInfo
        ]);
    }
    
}

?>