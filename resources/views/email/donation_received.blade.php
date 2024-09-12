<!DOCTYPE html>
<html>
<head>
    <title>Donation Acknowledgment</title>
</head>
<body>
    <h1>Thank You for Your Generous Donation!</h1>
    <p>Dear {{ $donation['first_name'] }} {{ $donation['last_name'] }},</p>
    <p>On behalf of Al-Mudassar Trust, we would like to express our sincere gratitude for your recent donation of ${{ $donation['amount'] }}.</p>
    <p>Your support plays a crucial role in helping us achieve our mission and make a difference in the community. We truly appreciate your generosity and commitment to our cause.</p>
    <p>Thank you once again for your valuable contribution.</p>
    <p>Best regards,</p>
    <p>The Team at Al-Mudassar Trust</p>
</body>
</html>
