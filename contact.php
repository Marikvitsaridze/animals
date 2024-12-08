<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/contact.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php  
    include_once 'components.php';
    

    maindogpicture ("CONTACTS", "Thank you for the company it was a pleasure to meet you!");
    ?>

    <!-- DYNAMIMC FORM -->

    <div class="formandlogodiv">

    <form method="POST" action="contact.php" class="dynamic-form">
        <label for="phone-number">Enter your phone number</label>
        <input type="tel" id="phone-number" name="phone" placeholder="Number" required>

        <label for="email">You can also give us your email to receive news</label>
        <input type="email" id="email" name="email" placeholder="E-mail" required>

        <button type="submit" class="submit-btn">SEND</button>

    </form>

    <a href="index.php">
    <img src="assets/images/logo1.png" alt="logo">
    </a>





    </div>

    

    

        <?php
ob_start(); // Start output buffering

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);

    // Save data to the text file
    $data = "Phone Number: $phone\nEmail: $email\n--------------------\n";
    $file = 'submissions.txt';
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Redirect to the Thank You page
    header("Location: thank_you.php");
    exit(); // Stop script execution
}

ob_end_flush(); // Send output buffer (if needed)
?>

<?php


footer (); 

?>


</body>
</html>