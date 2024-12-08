<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/thank_you.css">
    <title>Thank You</title>
</head>
<body>
    
<div class="thank-you-container">
        <h1>Thank You for Your Submission!</h1>
        <p>Your information has been submitted successfully. We will contact you soon.</p>
        <a href="index.php">Go Back to Home</a>
    </div>

    <div class="form-container">
        <h1>If you want to adopt an animal, you can submit another form to give us more information</h1>
        <form method="POST" action="thank_you1.php" class="dynamic-form">
            <label for="animal-name">What's the name of the animal you chose from our shelter?</label>
            <input type="text" id="animal-name" name="animal_name" placeholder="Animal's Name" required>

            <label for="owned-pet">Have you ever owned a pet?</label>
            <input type="text" id="owned-pet" name="owned_pet" placeholder="Yes or No" required>

            <label for="motivation">What's the main motivation for you to adopt an animal from our shelter?</label>
            <textarea id="motivation" name="motivation" placeholder="Your answer..." required></textarea>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>