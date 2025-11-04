<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #923CB5 0%, #6C2EB5 100%); color: white; padding: 20px; border-radius: 8px; }
        .content { background: #f9f9f9; padding: 20px; margin: 20px 0; border-radius: 8px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #923CB5; }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h2>New Contact Form Submission</h2>
    </div>

    <div class="content">
        <div class="field">
            <div class="label">Name:</div>
            <div>{{ $name }}</div>
        </div>

        <div class="field">
            <div class="label">Email:</div>
            <div>{{ $email }}</div>
        </div>

        <div class="field">
            <div class="label">Subject:</div>
            <div>{{ $subject }}</div>
        </div>

        <div class="field">
            <div class="label">Message:</div>
            <div>{{ $message }}</div>
        </div>
    </div>
</div>
</body>
</html>
