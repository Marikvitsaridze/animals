<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/animalspage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
    <secton class="section3">

    <!-- Main Dog Picture in Section 3 -->

    <?php
    include_once 'components.php';
    include_once 'data.php';
        
     maindogpicture ("OUR ANIMALS", "And now I will introduce you to our pets");   
       
     ?>
    

    </secton>

    <section class="card-section1">
    <div class="cards1">
        <?php foreach ($cards as $index => $card): ?>
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

    <!-- Pass PHP data to JavaScript -->
    <script>
        const cardData = <?php echo json_encode($cards); ?>;
    </script>

    <script src='script.js'></script> 

    <!-- Popup window -->
    <?php
  
    popup('Adopt me');

    ?>

    <script>
       // POPUP SCRIPT

// Scroll to the top after the page reloads
window.onbeforeunload = function () {
    window.scrollTo(0, 0); };

document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".card1");
  const popupWindow = document.querySelector(".popup-window");
  const overlay = document.querySelector(".overlay");

  const popupTitle = document.getElementById("popup-title");
  const popupDescription1 = document.getElementById("popup-description1");
  const popupDescription2 = document.getElementById("popup-description2");
  const closeButton = document.getElementById("close-btn");

  // Add click event listeners to cards
  cards.forEach((card, index) => {
    card.addEventListener("click", () => {
      const { title, description1, description2 } = cardData[index];

      // Update popup content
      popupTitle.textContent = title;
      popupDescription1.textContent = description1;
      popupDescription2.textContent = description2;

      // Show popup and overlay
      popupWindow.classList.add("active");
      overlay.classList.add("active");
    });
  });

  // Action for "Adopt Me" button
  document.getElementById('adopt-btn').addEventListener('click', function() {
  window.location.href = 'contact.php';
});
  // Close popup on clicking "Go Back" button or overlay
  closeButton.addEventListener("click", closePopup);
  overlay.addEventListener("click", closePopup);

  function closePopup() {
    popupWindow.classList.remove("active");
    overlay.classList.remove("active");
  }
});

   



    </script>




    
</body>
</html>