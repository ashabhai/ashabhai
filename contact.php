<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Your Website Title</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<header>
    <h1>Your Website</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="products.php">Products & Services</a></li>
            <li><a href="contact.php" class="active">Contact Us</a></li>
        </ul>
    </nav>
</header>

<main>
    <section>
        <h2>Contact Us</h2>
        <form method="post" action="send_email.php">
            <label for="name">Your Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Your Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
    </section>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Your Website. All rights reserved.</p>
</footer>

</body>
</html>
