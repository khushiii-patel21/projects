<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "contactdb");

if (!$conn) {
    die("Database connection failed");
}

// Form submit logic
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contacts (name, email, message)
            VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Message submitted successfully');</script>";
    } else {
        echo "<script>alert('Error occurred');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Me</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Input Form</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Your Name" required>

        <input type="email" name="email" placeholder="Your Email" required>

        <textarea name="message" placeholder="Your Message" required></textarea>

        <button type="submit" name="submit">Submit</button>
    </form>
</div>

</body>
</html>
