# NET-3010-Project

NOTE FROM KASRA ABOUT Contact Form:

If you get an error while submitting the Contact Us form do the following.

Here are the steps to configure XAMPP with Gmail's SMTP server:

1. Open the php.ini file located in the php folder inside your XAMPP installation directory (e.g., C:\xampp\php\php.ini).

2. Find the [mail function] section and update the following settings:

makefile Copy code SMTP = smtp.gmail.com smtp_port = 587 sendmail_from = your-email@gmail.com Replace your-email@gmail.com with your actual Gmail email address.

3. Next, open the sendmail.ini file located in the sendmail folder inside your XAMPP installation directory (e.g., C:\xampp\sendmail\sendmail.ini).

4. Find the [sendmail] section and update the following settings:

java Copy code smtp_server = smtp.gmail.com smtp_port = 587 error_logfile = error.log debug_logfile = debug.log auth_username = your-email@gmail.com auth_password = your-email-password force_sender = your-email@gmail.com Replace your-email@gmail.com with your actual Gmail email address and your-email-password with your Gmail password.

5. Save the changes to both files and restart your XAMPP server.
