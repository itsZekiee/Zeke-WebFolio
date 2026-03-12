<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px;">
        <h2 style="color: #6C2EB5;">New Message from Zeke WebFolio</h2>
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Subject:</strong> {{ $subject }}</p>
        <hr style="border: 0; border-top: 1px solid #eee;">
        <p><strong>Message:</strong></p>
        <p style="background-color: #f9f9f9; padding: 15px; border-radius: 5px; border-left: 4px solid #6C2EB5;">
            {!! nl2br(e($message)) !!}
        </p>
        <footer style="margin-top: 20px; font-size: 0.8em; color: #888;">
            Sent from your portfolio website.
        </footer>
    </div>
</body>
</html>
