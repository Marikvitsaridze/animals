<?php
include_once 'components.php'; // Use include_once to avoid multiple declarations
include_once 'data.php'; // Shared data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/styles.css?v=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
    

            <?php
        include_once 'header.php';
        include_once 'hero-section.php';
        echo '<hr class="hr" id="about-us">';
        include_once 'about.php';
        echo '<hr class="hr" id="our-animals">';
        include_once 'animalspage.php';
        echo '<hr class="hr" id="our-store">';
        include_once 'foodpage.php';
        echo '<hr class="hr" id="contact">';
        include_once 'contact.php'; ?>

    


    
    

   
</body>
</html>


