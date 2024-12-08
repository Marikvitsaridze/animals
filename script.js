 // POPUP SCRIPT

// Scroll to the top after the page reloads
// window.onbeforeunload = function () {
//     window.scrollTo(0, 0); };

// document.addEventListener("DOMContentLoaded", () => {
//   const cards = document.querySelectorAll(".card1");
//   const popupWindow = document.querySelector(".popup-window");
//   const overlay = document.querySelector(".overlay");

//   const popupTitle = document.getElementById("popup-title");
//   const popupDescription1 = document.getElementById("popup-description1");
//   const popupDescription2 = document.getElementById("popup-description2");
//   const closeButton = document.getElementById("close-btn");

//   // Add click event listeners to cards
//   cards.forEach((card, index) => {
//     card.addEventListener("click", () => {
//       const { title, description1, description2 } = cardData[index];

//       // Update popup content
//       popupTitle.textContent = title;
//       popupDescription1.textContent = description1;
//       popupDescription2.textContent = description2;

//       // Show popup and overlay
//       popupWindow.classList.add("active");
//       overlay.classList.add("active");
//     });
//   });

//   // Action for "Adopt Me" button
//   document.getElementById('adopt-btn').addEventListener('click', function() {
//   window.location.href = 'contact.php';
// });
//   // Close popup on clicking "Go Back" button or overlay
//   closeButton.addEventListener("click", closePopup);
//   overlay.addEventListener("click", closePopup);

//   function closePopup() {
//     popupWindow.classList.remove("active");
//     overlay.classList.remove("active");
//   }
// });




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
  
    // Define card data in JavaScript
    const cardData = [
        {
            title: "Fancy Feast",
            description1: "35$",
            description2: "Cat food"
        },
        {
            title: "Iams",
            description1: "54$",
            description2: "Cat food"
        },
        {
            title: "Nulo",
            description1: "62$",
            description2: "Cat food"
        },
        {
            title: "Kibbles nBits",
            description1: "28$",
            description2: "Dog food"
        },
        {
            title: "Cesar",
            description1: "46$",
            description2: "Dog food"
        },
        {
            title: "Happy Dog",
            description1: "76$",
            description2: "Dog food"
        },
        {
            title: "Wau Dog",
            description1: "10$",
            description2: "Collar for dog"
        },
        {
            title: "Wau Dog",
            description1: "7$",
            description2: "Collar for cat"
        },
        {
            title: "Toy",
            description1: "3$",
            description2: "For dog and cat"
        }
    ];
  
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
    document.getElementById("adopt-btn").addEventListener("click", function () {
        window.location.href = "contact.php";
    });

    // Close popup on clicking "Go Back" button or overlay
    closeButton.addEventListener("click", closePopup);
    overlay.addEventListener("click", closePopup);
  
    function closePopup() {
        popupWindow.classList.remove("active");
        overlay.classList.remove("active");
    }
});

  



  

