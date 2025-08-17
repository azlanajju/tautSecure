<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data from the contact form
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $service = $_POST['service'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        echo '<script>alert("Please fill in all required fields.");</script>';
        echo '<script>window.history.back();</script>';
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Please enter a valid email address.");</script>';
        echo '<script>window.history.back();</script>';
        exit;
    }

    $subject = "New Contact Form Submission from Taut Secure Website";
    $emailMessage = "Dear Team,\n\n";
    $emailMessage .= "A new contact form submission has been received from the Taut Secure website. Here are the details:\n\n";
    $emailMessage .= "Name: $name\n";
    $emailMessage .= "Email: $email\n";
    $emailMessage .= "Phone: " . ($phone ?: 'Not provided') . "\n";
    $emailMessage .= "Service Type: " . ($service ?: 'Not specified') . "\n";
    $emailMessage .= "Message:\n$message\n\n";
    $emailMessage .= "This inquiry was submitted from the website contact form.\n\n";
    $emailMessage .= "Best regards,\n";
    $emailMessage .= "Taut Secure Website";

    $headers = "From: noreply@tautsecure.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    $to = "info@tautsecure.com";

    $mailSuccess = mail($to, $subject, $emailMessage, $headers);

    if ($mailSuccess) {
        echo '<script>alert("Thank you for contacting Taut Secure! We will get back to you within 24 hours.");</script>';
        // echo '<script>
        //         setTimeout(function(){
        //             window.location.href = "index.html#contact";
        //         }, 3000); 
              // </script>';
    } else {
        echo '<script>alert("Error sending email. Please try again later or contact us directly.");</script>';
        echo '<script>window.history.back();</script>';
    }
} else {
    // If accessed directly without POST data, redirect to home page
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Taut Secure</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', Arial, sans-serif;
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }

        .thank-you-container {
            text-align: center;
            z-index: 10;
            position: relative;
        }

        .thank-you-message {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 3rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            margin-bottom: 2rem;
        }

        .thank-you-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #d90429;
            margin-bottom: 1rem;
        }

        .thank-you-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }

        .redirect-info {
            font-size: 1rem;
            opacity: 0.7;
        }

        .home-button {
            display: inline-block;
            background: linear-gradient(135deg, #d90429 0%, #b00020 100%);
            color: white;
            text-decoration: none;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(217, 4, 41, 0.3);
        }

        .home-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(217, 4, 41, 0.4);
        }
    </style>
</head>

<body>
    <div class="thank-you-container">
        <div class="thank-you-message">
            <h1 class="thank-you-title">Thank You!</h1>
            <p class="thank-you-subtitle">Your message has been sent successfully.</p>
            <p class="redirect-info">You will be redirected to the home page in a few seconds...</p>
        </div>

        <a href="index.html" class="home-button">Return to Home</a>
    </div>

    <!-- Animated background -->
    <div class="socket">
        <div class="gel center-gel">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c1 r1">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c2 r1">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c3 r1">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c4 r1">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c5 r1">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c6 r1">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>

        <div class="gel c7 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>

        <div class="gel c8 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c9 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c10 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c11 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c12 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c13 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c14 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c15 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c16 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c17 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c18 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c19 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c20 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c21 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c22 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c23 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c24 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c25 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c26 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c28 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c29 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c30 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c31 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c32 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c33 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c34 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c35 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c36 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c37 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>

    </div>

    <style>
        .socket {
            width: 200px;
            height: 200px;
            position: absolute;
            left: 50%;
            margin-left: -100px;
            top: 50%;
            margin-top: -100px;
            z-index: 1;
        }

        .hex-brick {
            background: #d90429;
            width: 30px;
            height: 17px;
            position: absolute;
            top: 5px;
            animation-name: fade00;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            -webkit-animation-name: fade00;
            -webkit-animation-duration: 2s;
            -webkit-animation-iteration-count: infinite;
        }

        .h2 {
            transform: rotate(60deg);
            -webkit-transform: rotate(60deg);
        }

        .h3 {
            transform: rotate(-60deg);
            -webkit-transform: rotate(-60deg);
        }

        .gel {
            height: 30px;
            width: 30px;
            transition: all .3s;
            -webkit-transition: all .3s;
            position: absolute;
            top: 50%;
            left: 50%;
        }

        .center-gel {
            margin-left: -15px;
            margin-top: -15px;
            animation-name: pulse00;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            -webkit-animation-name: pulse00;
            -webkit-animation-duration: 2s;
            -webkit-animation-iteration-count: infinite;
        }

        .c1 {
            margin-left: -47px;
            margin-top: -15px;
        }

        .c2 {
            margin-left: -31px;
            margin-top: -43px;
        }

        .c3 {
            margin-left: 1px;
            margin-top: -43px;
        }

        .c4 {
            margin-left: 17px;
            margin-top: -15px;
        }

        .c5 {
            margin-left: -31px;
            margin-top: 13px;
        }

        .c6 {
            margin-left: 1px;
            margin-top: 13px;
        }

        .c7 {
            margin-left: -63px;
            margin-top: -43px;
        }

        .c8 {
            margin-left: 33px;
            margin-top: -43px;
        }

        .c9 {
            margin-left: -15px;
            margin-top: 41px;
        }

        .c10 {
            margin-left: -63px;
            margin-top: 13px;
        }

        .c11 {
            margin-left: 33px;
            margin-top: 13px;
        }

        .c12 {
            margin-left: -15px;
            margin-top: -71px;
        }

        .c13 {
            margin-left: -47px;
            margin-top: -71px;
        }

        .c14 {
            margin-left: 17px;
            margin-top: -71px;
        }

        .c15 {
            margin-left: -47px;
            margin-top: 41px;
        }

        .c16 {
            margin-left: 17px;
            margin-top: 41px;
        }

        .c17 {
            margin-left: -79px;
            margin-top: -15px;
        }

        .c18 {
            margin-left: 49px;
            margin-top: -15px;
        }

        .c19 {
            margin-left: -63px;
            margin-top: -99px;
        }

        .c20 {
            margin-left: 33px;
            margin-top: -99px;
        }

        .c21 {
            margin-left: 1px;
            margin-top: -99px;
        }

        .c22 {
            margin-left: -31px;
            margin-top: -99px;
        }

        .c23 {
            margin-left: -63px;
            margin-top: 69px;
        }

        .c24 {
            margin-left: 33px;
            margin-top: 69px;
        }

        .c25 {
            margin-left: 1px;
            margin-top: 69px;
        }

        .c26 {
            margin-left: -31px;
            margin-top: 69px;
        }

        .c27 {
            margin-left: -79px;
            margin-top: -15px;
        }

        .c28 {
            margin-left: -95px;
            margin-top: -43px;
        }

        .c29 {
            margin-left: -95px;
            margin-top: 13px;
        }

        .c30 {
            margin-left: 49px;
            margin-top: 41px;
        }

        .c31 {
            margin-left: -79px;
            margin-top: -71px;
        }

        .c32 {
            margin-left: -111px;
            margin-top: -15px;
        }

        .c33 {
            margin-left: 65px;
            margin-top: -43px;
        }

        .c34 {
            margin-left: 65px;
            margin-top: 13px;
        }

        .c35 {
            margin-left: -79px;
            margin-top: 41px;
        }

        .c36 {
            margin-left: 49px;
            margin-top: -71px;
        }

        .c37 {
            margin-left: 81px;
            margin-top: -15px;
        }

        .r1 {
            animation-name: pulse00;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            animation-delay: .2s;
            -webkit-animation-name: pulse00;
            -webkit-animation-duration: 2s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-delay: .2s;
        }

        .r2 {
            animation-name: pulse00;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            animation-delay: .4s;
            -webkit-animation-name: pulse00;
            -webkit-animation-duration: 2s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-delay: .4s;
        }

        .r3 {
            animation-name: pulse00;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            animation-delay: .6s;
            -webkit-animation-name: pulse00;
            -webkit-animation-duration: 2s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-delay: .6s;
        }

        .r1>.hex-brick {
            animation-name: fade00;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            animation-delay: .2s;
            -webkit-animation-name: fade00;
            -webkit-animation-duration: 2s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-delay: .2s;
        }

        .r2>.hex-brick {
            animation-name: fade00;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            animation-delay: .4s;
            -webkit-animation-name: fade00;
            -webkit-animation-duration: 2s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-delay: .4s;
        }

        .r3>.hex-brick {
            animation-name: fade00;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            animation-delay: .6s;
            -webkit-animation-name: fade00;
            -webkit-animation-duration: 2s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-delay: .6s;
        }

        @keyframes pulse00 {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                -webkit-transform: scale(0.01);
                transform: scale(0.01);
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes fade00 {
            0% {
                background: #d90429;
            }

            50% {
                background: #b00020;
            }

            100% {
                background: #ff6b6b;
            }
        }
    </style>
</body>

</html>