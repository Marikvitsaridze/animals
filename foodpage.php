<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/animalspage.css">
    <link rel="stylesheet" href="css/foodpage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
<?php
include_once 'components.php';
include_once 'data.php';
    maindogpicture ("OUR STORE", "Here you can choose products for the kennel or for your dog");  
?>

    <!-- CARD SECTION -->

    <section class="card-section1">
    <div class="cards1">
        <?php foreach ($cards2 as $index => $card): ?>
        <div class="card1" data-index="<?php echo $index; ?>">
            <img src="<?php echo $card['image']; ?>" alt="<?php echo $card['title']; ?>">
            <div class="cardinnerdiv1">
                <h2><?php echo $card['title']; ?></h2>
                <p><?php echo $card['description1']; ?></p>
            </div>
            <p><?php echo $card['description2']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- POPUP -->

<?php

Popup('Purchase'); ?>


<!-- JAVASCRIPT -->




</body>
</html>