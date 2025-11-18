<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="output-box">
    <h2>Application Submitted Successfully 🎉</h2>

    <div class="info"><strong>Full Name:</strong> <?php echo $_POST['fullname']; ?></div>
    <div class="info"><strong>Email:</strong> <?php echo $_POST['email']; ?></div>
    <div class="info"><strong>Phone:</strong> <?php echo $_POST['phone']; ?></div>
    <div class="info"><strong>Date of Birth:</strong> <?php echo $_POST['dob']; ?></div>
    <div class="info"><strong>Gender:</strong> <?php echo $_POST['gender']; ?></div>
    <div class="info"><strong>Course:</strong> <?php echo $_POST['course']; ?></div>
    <div class="info"><strong>Address:</strong> <?php echo $_POST['address']; ?></div>

</div>

</body>
</html>