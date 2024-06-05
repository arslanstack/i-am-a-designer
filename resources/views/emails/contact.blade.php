<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Request from I Am A Designer</title>
</head>

<body>
    <div style="background-color: #f4f4f4; padding: 20px;">
        <div style="background-color: #fff; padding: 20px; border-radius: 10px;">
            <div style="text-align: center;">
                <img src="{{url('/clientSideAssets/images/logo.png')}}" alt="" />
            </div>
            <h2 style="text-align: center;">New Contact Request</h2>
            <p style="text-align: center;">A new contact request has been submitted by a user. The details are as follows:</p>
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Name</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $data['name'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Email</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $data['email'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Subject</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $data['subject'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Message</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $data['message'] }}</td>
                </tr>
        </div>
    </div>
</body>

</html>