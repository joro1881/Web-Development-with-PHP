<?php
include 'db_info.php';
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $headers = 'From:' . $email . '' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $to = 'george.yankov@wpxhosting.com';
    $subject = 'Fans Contact Form ';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    // Check if name has been entered
    if (!$_POST['name']) {
        $errName = 'Please enter your name';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }
    //Check if message has been entered
    if (!$_POST['message']) {
        $errMessage = 'Please enter your message';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 5) {
        $errHuman = 'Your anti-spam is incorrect';
    }

// If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
        if (true) { //mail ($to, $subject, $message, $headers)

            // to do mysqli_real_escape_string()

            $result = '<div class="alert alert-success">Thank You! I will be in touch</div>';
            $query = "INSERT INTO feedbacks (name,email,subject,message) VALUES ('$name', '$email', '$subject', '$message')";
            //mysqli_query($db_conn, "SELECT * FROM feedbacks");
            //$query = mysqli_query($db_conn, "INSERT INTO feedbacks (name,email,subject,message)		VALUES ($name, $email, $subject, $message)");
            if ($db_conn->query($query) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $query . "<br>" . $db_conn->error;
            }
            $db_conn->close();

        } else {
            $result = '<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
        }
    }
}