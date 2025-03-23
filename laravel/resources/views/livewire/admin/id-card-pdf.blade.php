<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        .id-card { border: 2px solid #000; padding: 20px; width: 300px; margin: auto; }
    </style>
</head>
<body>
    <div class="id-card">
        <h2>Student ID Card</h2>
        <p><strong>Name:</strong> {{ $student->name }}</p>
        <p><strong>Registration No:</strong> {{ $student->registration_no }}</p>
        <p><strong>Department:</strong> {{ $student->department }}</p>
        <p><strong>DOB:</strong> {{ $student->dob }}</p>
        <p><strong>Phone:</strong> {{ $student->phone_no }}</p>
    </div>
</body>
</html>
