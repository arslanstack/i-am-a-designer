<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Please Reset Your Account Password</title>
</head>

<body>
    <!-- Verifiy Email Template -->
    <div style="background-color: #f4f4f4; padding: 20px;">
        <div style="background-color: #fff; padding: 20px; border-radius: 10px;">
            <div style="text-align: center;">
                <img src="{{asset('/clientSideAssets/images/logo.png')}}" alt="" />
            </div>
            <h2 style="text-align: center;">Reset Your Account Password</h2>
            <p style="text-align: center;">Please click the button below to reset your account password.</p>
            <a href="{{ $reset_url }}" style="display: block; width: 100%; padding: 10px; background-color: #007bff; color: #fff; text-align: center; text-decoration: none; border-radius: 5px;">Reset Password</a>
            <p style="text-align: center;">If you did not generate this request, no further action is required.</p>
        </div>
    </div>
</body>

</html>