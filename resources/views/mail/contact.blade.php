<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Us Message</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f6f6f6; margin: 0; padding: 20px;">
    <table style="width: 100%; max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 8px; padding: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <tr>
            <td style="text-align: center; padding-bottom: 20px;">
                <h2 style="margin: 0; color: #333;">New Contact Us Message</h2>
            </td>
        </tr>
        <tr>
            <td>
                <p><strong>Name:</strong> {{ $contactMessage->name }}</p>
                <p><strong>Email:</strong> {{ $contactMessage->email }}</p>
                <p><strong>Subject:</strong> {{ $contactMessage->subject }}</p>
                <p><strong>Message:</strong></p>
                <p style="white-space: pre-line;">{{ $contactMessage->message }}</p>
            </td>
        </tr>
        <tr>
            <td style="padding-top: 20px; text-align: center; font-size: 12px; color: #888;">
                This message was sent from your website's contact form.
            </td>
        </tr>
    </table>
</body>
</html>
