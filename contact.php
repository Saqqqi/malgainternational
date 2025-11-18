<?php
declare(strict_types=1);

// Start output buffering
if (!headers_sent() && ob_get_level() == 0) {
    ob_start();
}

// Start session if not already started and headers not sent
if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
    @session_start();
}

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$emailConfig = require __DIR__ . '/config/email_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $product = trim($_POST['product_interest'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $errors = array_filter([
        empty($name)   ? 'Please enter your name' : null,
        (!filter_var($email, FILTER_VALIDATE_EMAIL)) ? 'Please enter a valid email address' : null,
        empty($product) ? 'Please select a product interest' : null
    ]);

    if (!$errors) {
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host       = $emailConfig['smtp']['host'];
            $mail->SMTPAuth   = $emailConfig['smtp']['smtp_auth'];
            $mail->Username   = $emailConfig['smtp']['username'];
            $mail->Password   = $emailConfig['smtp']['password'];
            $mail->SMTPSecure = $emailConfig['smtp']['smtp_secure'];
            $mail->Port       = $emailConfig['smtp']['port'];

            $mail->setFrom($emailConfig['smtp']['from_email'], $emailConfig['smtp']['from_name']);
            $mail->addAddress('saqlainsqqi@gmail.com');
            $mail->addReplyTo($email, $name);

            $mail->isHTML(true);
            $mail->Subject = "New Contact Form Submission - {$product}";
            $mail->Body = '
            <html>
            <head>
              <style>
                body { font-family: Arial, sans-serif; background: #f9f9f9; color: #333; }
                .container { max-width: 600px; margin: 20px auto; background: #fff; 
                             border: 1px solid #ddd; border-radius: 8px; overflow: hidden; }
                .header { background: #ff6b6b; color: #fff; padding: 20px; text-align: center; }
                .content { padding: 20px; }
                .content h2 { margin-top: 0; color: #444; }
                .content p { margin: 8px 0; font-size: 14px; }
                .content strong { color: #222; }
                .footer { background: #f1f1f1; text-align: center; padding: 15px; font-size: 12px; color: #777; }
              </style>
            </head>
            <body>
              <div class="container">
                <div class="header">
                  <h1>📩 New Contact Form Submission</h1>
                </div>
                <div class="content">
                  <h2>Contact Details</h2>
                  <p><strong>Name:</strong> ' . htmlspecialchars($name) . '</p>
                  <p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>
                  <p><strong>Product Interest:</strong> ' . htmlspecialchars($product) . '</p>
                  <h2>Message</h2>
                  <p>' . nl2br(htmlspecialchars($message)) . '</p>
                </div>
                <div class="footer">
                  <p>This message was sent from your website contact form.</p>
                </div>
              </div>
            </body>
            </html>';

            $mail->send();
            echo json_encode(['success' => true, 'message' => 'Thank you! We will get back to you soon.']);
        } catch (Exception) {
            echo json_encode(['success' => false, 'message' => 'Message could not be sent. Please try again later.']);
        }
    } else {
        echo json_encode(['success' => false, 'errors' => array_values($errors)]);
    }
    exit;
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Malga International - Premium Himalayan Pink Salt Products</title>

    <!-- CSS Files -->
    <link rel="shortcut icon" href="assets/img/icons.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="contact-section-2 fix section-padding section-bg" id="contact">
    <div class="container">
        <div class="contact-wrapper-2">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="section-title style-2">
                            <span>Premium Himalayan Pink Salt</span>
                            <h2>Let's Work Together</h2>
                        </div>
                        <p class="mt-4 mt-md-0">
                            Malga Inc. is dedicated to producing the safest, highest quality gourmet Himalayan Pink Salt,<br>
                            sourced from the renowned Khewra Salt Mine in Pakistan's Salt Range.
                        </p>

                        <div class="contact-info-area">
                            <div class="contact-info-items mb-4">
                                <div class="icon"><i class="far fa-phone"></i></div>
                                <div class="content">
                                    <p>Call For Inquiry</p>
                                    <h3><a href="tel:+15166974241">(516) 697 4241</a></h3>
                                </div>
                            </div>
                            <div class="contact-info-items mb-4">
                                <div class="icon"><i class="fal fa-envelope"></i></div>
                                <div class="content">
                                    <p>Send Us Email</p>
                                    <h3><a href="mailto:kamran.ansari@malgainternational.com">kamran.ansari@malgainternational.com</a></h3>
                                </div>
                            </div>
                        </div>

                        <?php if (isset($_SESSION['success'])): ?>
                            <div class="alert alert-success mt-3"><?php echo htmlspecialchars($_SESSION['success']); unset($_SESSION['success']); ?></div>
                        <?php endif; ?>

                        <?php if (!empty($errors)): ?>
                            <div class="alert alert-danger mt-3">
                                <ul class="mb-0">
                                    <?php foreach ($errors as $error): ?>
                                        <li><?php echo htmlspecialchars($error); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="contact-box">
                        <div class="contact-title">
                            <h3>Need Premium Salt?</h3>
                            <p>We're ready to supply your Himalayan salt needs, let's work together</p>
                        </div>
                        <div class="contact-form-items">
                            <form id="contact-form" method="POST">
                                <div id="form-messages" class="mt-3" style="display: none;"></div>
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="text" name="name" id="name" placeholder="Name" required>
                                            <div class="icon"><i class="far fa-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="email" name="email" id="email" placeholder="Email" required>
                                            <div class="icon"><i class="far fa-envelope"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <select class="nice-select" name="product_interest" id="product_interest" required>
                                                <option value="" disabled selected>Select Product Interest</option>
                                                <option value="Bulk Himalayan Salt">Bulk Himalayan Salt</option>
                                                <option value="Retail Salt Products">Retail Salt Products</option>
                                                <option value="Animal Salt Licks">Animal Salt Licks</option>
                                                <option value="Custom Salt Solutions">Custom Salt Solutions</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <textarea name="message" id="message" placeholder="Tell us about your salt requirements" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                    <button type="submit" class="theme-btn theme-btn-2" id="submit-btn">
                                        <span class="btn-text">Request Quote <i class="fas fa-chevron-right"></i></span>
                                        <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JS Files -->
<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>

<script>
$(function () {
    const form = $('#contact-form');
    const submitBtn = $('#submit-btn');
    const btnText = submitBtn.find('.btn-text');
    const btnSpinner = submitBtn.find('.spinner-border');
    const formMessages = $('#form-messages');

    $('select.nice-select').niceSelect();

    form.on('submit', function (e) {
        e.preventDefault();

        submitBtn.prop('disabled', true);
        btnText.text('Sending...');
        btnSpinner.removeClass('d-none');
        formMessages.hide().removeClass('alert-success alert-danger').empty();

        $.ajax({
            type: 'POST',
            url: 'contact.php',
            data: form.serialize(),
            dataType: 'json'
        })
        .done(function (response) {
            if (response.success) {
                formMessages
                    .html(`<div class="alert alert-success">${response.message}</div>`)
                    .fadeIn();
                form.trigger('reset');
                setTimeout(() => formMessages.fadeOut(), 3000);
            } else {
                const errors = response.errors?.map(err => `<li>${err}</li>`).join('') 
                             || `<li>${response.message}</li>`;
                formMessages
                    .html(`<div class="alert alert-danger"><ul>${errors}</ul></div>`)
                    .fadeIn();
            }
        })
        .fail(() => {
            formMessages
                .html('<div class="alert alert-danger">An error occurred. Please try again later.</div>')
                .fadeIn();
        })
        .always(() => {
            submitBtn.prop('disabled', false);
            btnText.text('Request Quote');
            btnSpinner.addClass('d-none');
            $('html, body').animate({ scrollTop: formMessages.offset().top - 100 }, 500);
        });
    });
});
</script>

<style>
.nice-select {
    width: 100%;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px 15px;
}
.nice-select:after { border-color: #999; right: 15px; }
.nice-select .list { width: 100%; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
.nice-select.error { border-color: #e74c3c; }
#form-messages .alert { margin-bottom: 0; }
#form-loader { margin-top: 10px; color: #666; }
.alert { transition: opacity 0.5s ease-out; }
</style>
</body>
</html>