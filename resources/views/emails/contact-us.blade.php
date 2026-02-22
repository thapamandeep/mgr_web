<!DOCTYPE html>
<html>
<head>
    <title>Contact Message</title>
</head>
<body style="font-family:Arial;background:#f4f4f4;padding:30px;">

    <div style="
        max-width:500px;
        margin:auto;
        background:#fff;
        padding:25px;
        border-radius:10px;
    ">

        <h2 style="color:#28a745;">New member message</h2>

        <p><strong>Name:</strong> {{ $contact['name'] }}</p>
        <p><strong>Email:</strong> {{ $contact['email'] }}</p>
        <p><strong>Email:</strong> {{ $contact['message'] }}</p>

      

        <div style="
            background:#f7f7f7;
            padding:15px;
            border-radius:8px;
        ">
            {{ $data['message'] }}
        </div>

    </div>

</body>
</html>
