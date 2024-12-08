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

aboutus ();



?>

<script>
    document.querySelectorAll('.benefit').forEach(card => {
    card.addEventListener('click', function () {
        const link = this.getAttribute('data-link');
        window.location.href = link;
    });
});
</script>
    
</body>
</html>