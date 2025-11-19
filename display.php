<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Application Submitted</title>

<style>
    body {
        background: #f0f4f8;
        font-family: 'Poppins', sans-serif;
        padding: 30px;
    }

    .output-box {
        max-width: 650px;
        margin: auto;
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 25px rgba(0,0,0,0.2);
        animation: slideIn 1s ease-in-out;
    }

    @keyframes slideIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    h2 {
        text-align: center;
        color: #2d3436;
        margin-bottom: 20px;
    }

    p {
        font-size: 17px;
        border-bottom: 1px solid #ddd;
        padding: 8px 0;
    }

    strong {
        color: #6a11cb;
    }
</style>

</head>
<body>

<div class="output-box">
    <h2>Application Submitted Successfully!</h2>

    <p><strong>Full Name:</strong> <?php echo $_POST['fullname']; ?></p>
    <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
    <p><strong>Mobile:</strong> <?php echo $_POST['mobile']; ?></p>
    <p><strong>Date of Birth:</strong> <?php echo $_POST['dob']; ?></p>
    <p><strong>Course Applied:</strong> <?php echo $_POST['course']; ?></p>
    <p><strong>Address:</strong> <?php echo $_POST['address']; ?></p>

</div>

</body>
</html>
