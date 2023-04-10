<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/99ef503066.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />


</head>

<body>

    <header>
        <nav>
            <?php include "../php/navbar.php" ?>
        </nav>
    </header>

    <div class="contact-form-container">
        <h1>Contact Us</h1>
        <p>Please fill out the form below and we'll get back to you as soon as possible.</p>

        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $to = "kasrabani1380@gmail.com";
            $headers = "From: " . $email . "\r\n";
            $body = "You've received a new message from your website contact form.\n\n" .
                "Name: " . $name . "\n" .
                "Email: " . $email . "\n" .
                "Subject: " . $subject . "\n" .
                "Message:\n" . $message;

            if (mail($to, $subject, $body, $headers)) {
                echo "<p class='contact-form-success'>Your message has been sent. Thank you!</p>";
            } else {
                echo "<p class='contact-form-error'>There was an error sending your message. Please try again later.</p>";
            }
        }
        ?>

        <form action="contact.php" method="POST">
            <div class="contact-form-input-group">
                <label for="name" class="contact-form-label">Name:</label>
                <input type="text" id="name" name="name" class="contact-form-input" required>
            </div>

            <div class="contact-form-input-group">
                <label for="email" class="contact-form-label">Email:</label>
                <input type="email" id="email" name="email" class="contact-form-input" required>
            </div>

            <div class="contact-form-input-group">
                <label for="subject" class="contact-form-label">Subject:</label>
                <input type="text" id="subject" name="subject" class="contact-form-input" required>
            </div>

            <div class="contact-form-input-group">
                <label for="message" class="contact-form-label">Message:</label>
                <textarea id="message" name="message" rows="5" class="contact-form-textarea" required></textarea>
            </div>

            <input type="submit" name="submit" value="Submit" class="contact-form-input">
        </form>
    </div>

    <footer>
        <?php include "../php/footer.php"; ?>
    </footer>

</body>

</html>