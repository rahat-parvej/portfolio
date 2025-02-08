<?php
header('Content-Type: application/json');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_var(test_input($_POST['email']), FILTER_SANITIZE_EMAIL);
    $name = test_input($_POST['name']);
    $subject = test_input($_POST['subject']);
    $message = test_input($_POST['message']);

    // Validate inputs
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid or missing email address.']);
        exit;
    }
    if (empty($name)) {
        echo json_encode(['status' => 'error', 'message' => 'Name is required.']);
        exit;
    }
    if (empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Message is required.']);
        exit;
    }

    // Include PHPMailer
    require '../phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'mail.raurco.com';
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = 'portfolio_contact_me@raurco.com';
    $mail->Password = 'GrFu*.}luojW';

    $mail->setFrom('portfolio_contact_me@raurco.com', 'Portfolio');
    $mail->addAddress('rahatparvej2@gmail.com');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = $subject ?: 'No Subject';
    $mail->Body = "<p><strong>Name:</strong> {$name}</p>
                   <p><strong>Email:</strong> {$email}</p>
                   <p><strong>Message:</strong><br>" . nl2br($message) . "</p>";

    if ($mail->send()) {
        echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
