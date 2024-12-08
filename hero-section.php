<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>

<?php

include_once 'components.php';

herosection (); 




?>

<script>

// Scroll to the top of the page on refresh
window.onload = function () {
    window.scrollTo(0, 0);
};

// Button functionality to navigate to #about-us
document.getElementById('goToAbout').addEventListener('click', function () {
    window.location.href = '#about-us';
});

</script>
    
</body>
</html>