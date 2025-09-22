<?php

$sections = [
    'home' => 'Home',
    'about' => 'About Us',
    'services' => 'Services',
    'contact' => 'Contact',
];

// Handle form submission for contact
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    // Here, you can process the form data, e.g., send an email or save to a database
    echo "<script>alert('Thank you, $name! Your message has been received.');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneFourth Clone</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav>
        <ul>
            <?php foreach ($sections as $id => $title): ?>
                <li><a href="#<?= $id ?>"><?= $title ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <!-- Sections -->
    <?php foreach ($sections as $id => $title): ?>
        <section id="<?= $id ?>" class="section">
            <div class="content">
                <h2><?= $title ?></h2>
                <?php if ($id === 'contact'): ?>
                    <form method="POST">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="message" placeholder="Your Message" required></textarea>
                        <button type="submit" name="contact">Send Message</button>
                    </form>
                <?php else: ?>
                    <p>Content for <?= $title ?> goes here.</p>
                <?php endif; ?>
            </div>
        </section>
    <?php endforeach; ?>

    <footer>
        <p>&copy; <?= date('Y') ?> OneFourth Clone. All rights reserved.</p>
    </footer>
</body>
</html>
