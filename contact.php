<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Blood Donation</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to external CSS -->
</head>
<body>
    <header>
        <nav>
            <div class="logo">Blood Bank & Donation</div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="donate.php">Become A Donor</a></li>
                <li><a href="need-blood.php">Need Blood</a></li>
                <li><a href="contact.php" class="active">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section class="contact-section">
        <h1>Contact Us</h1>
        <div class="contact-container">
            <form action="contact-handler.php" method="POST">
                <label>Full Name:</label>
                <input type="text" name="name" required>
                
                <label>Phone Number:</label>
                <input type="text" name="phone" required>
                
                <label>Email Address:</label>
                <input type="email" name="email" required>

                <label>Message:</label>
                <textarea name="message" required></textarea>

                <button type="submit">Send Message</button>
            </form>

            <div class="contact-details">
                <h3>Contact Details</h3>
                <p><strong>Addre