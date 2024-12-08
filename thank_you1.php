<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $animal_name = htmlspecialchars($_POST['animal_name']);
    $owned_pet = htmlspecialchars($_POST['owned_pet']);
    $motivation = htmlspecialchars($_POST['motivation']);

    // Save data to the text file
    $data = "Animal Name: $animal_name\nOwned a Pet Before: $owned_pet\nMotivation: $motivation\n--------------------\n";
    $file = 'submissions.txt';
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Display confirmation message with a "Go Home" button
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='assets/css/thank_you1.css'>
        <title>Thank You</title>
        </head>
        <body>
        <div class='confirmation'>
            <h1>Thank you for submitting your adoption details!</h1>
            <p>We appreciate your interest in adopting an animal from our shelter.</p>
            <a href='index.php' class='home-btn'>Go Home</a>
        </div>
        </body>
        </html>";
}
?>



        
        

       