<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/animalspage.css">
    <link rel="stylesheet" href="asset/css/foodpage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>

<?php

// HEADER

function setheader () {

    echo " <header>
     <nav>
         <ul>
             <li>
                 <a href='index.php'>
                     <img src='assets/images/logo1.png' alt='Logo' class='nav-logo'>
                 </a>
             </li>
             <li><a href='#about-us'>About Us</a></li>
             <li><a href='#our-animals'>Our Animals</a></li>
             <li><a href='#our-store'>Our Store</a></li>
             <li><a href='#contact'>Contact</a></li>
         </ul>
     </nav>
 </header>";
 }


//  HERO-SECTION

function herosection () {

    echo " <section id='hero'>
        <div class='hero-content'>
            <h1>Happiness is closer than you think</h1>
            <button id='goToAbout'>Let’s Go!</button>
        </div>
        <div class='hero-image'>
            <img src='assets/images/dog-image.png' alt='Dog'>
        </div>
    </section>";
    
    }

// ABOUT SECTION 

function aboutus() {
    echo " <section class='about-us'>
       <div class='about-header'>
           <h2>ABOUT US</h2>
       </div>
       <div class='benefits'>
           <div class='benefit' data-link='videopage.php'>
               <div class='circle'>1</div>
               <img src='assets/images/mentally-healthy.png' alt='Mentally Healthy'>
               <h3>MENTALLY HEALTHY</h3>
               <p>For many people, especially those who are lonely, having a pet can be a valuable source of comfort and company...</p>
           </div>
           <div class='benefit' data-link='videopage.php'>
               <div class='circle'>2</div>
               <img src='assets/images/animal-socialization.png' alt='Animal Socialization'>
               <h3>ANIMAL SOCIALIZATION</h3>
               <p>Many pets need to socialize and interact with people and other animals to be happy and healthy...</p>
           </div>
           <div class='benefit' data-link='videopage.php'>
               <div class='circle'>3</div>
               <img src='assets/images/convenience.png' alt='Convenience'>
               <h3>CONVENIENCE</h3>
               <p>You choose your own rental period and schedule, convenient for you...</p>
           </div>
       </div>
   </section>";
}

// Function for Main Dog Picture for 4 pages

function maindogpicture ($h1, $p) {

echo "<div class='maindogpicture3'>
 
 <img src='assets/images/mainelipse.png' class='elipse3' alt='Elipse'>
 <img src='assets/images/maindogpic.png' class='maindogpic3' alt='Dog Picture'>
 <img src='assets/images/rectangle1.png' class='rectangle3' alt='Rectangle'>
 
 
 <h1>
         $h1
 </h1>

  <p>
         $p
 </p>
 

</div>";

}

?>

 <!-- Popup window -->
 <?php

function Popup($button1) {
    echo "<div class='popup-window'>
    <div class='popup-content'>
        <h2 id='popup-title'></h2>
        <p id='popup-description1'></p>
        <p id='popup-description2'></p>
        <div class='popup-buttons'>
            <button id='adopt-btn'> $button1 </button>
            <button id='close-btn'>Go Back</button>
        </div>
    </div>
</div>
<div class='overlay'></div>
</section>";
}

// Footer

function footer () {

    echo "<footer class='footer'>

    <div class='footerdiv'>

    <p>
    st. Industrial, 3, Ivano-Frankivsk, Ivano-Frankivsk region, 76000
    </p>

    <p>Call us: <a href='tel:+1234567890'>+1 (234) 567-890</a></p>

    </div>


    </footer>";

} 

// VIDEOPAGE SECTION

function paws() {

    echo "<div class='paws'>
    <div class='backpaws'>
      <img class ='paw3' src='assets/animations/pawpink2.png' alt='Paw print' />
      <img class ='paw4' src='assets/animations/pawpink2.png' alt='Paw print' />
    </div>
    
      <div class='frontpaws'>
      <img class ='paw1' src='assets/animations/pawpink2.png' alt='Paw print' />
      <img class ='paw2' src='assets/animations/pawpink2.png' alt='Paw print' />
      </div>
      
    </div>";

}

function video () {

    echo " <div class='videodiv'>
    <div class='video1'>
    <video controls width='640'>
    <source src='assets/videos/mainvideo1.mp4' type='video/mp4'>
    </video>
    </div>

    <div class='videodescription'>
        <h1>
            Hercules is the first cat I adopted...
        </h1>

        <p>
            Mariam Adopted Hercules 3 years ago and he made her life better
        </p>
    </div>

    
</div> ";

echo "<div class='videodiv'>

        <div class='videodescription'>
        <h1>
            Pepo is still waiting for her family ...
        </h1>

        <p>
            Pepo, Gocha, Patsuka and other strays are still waiting for the adoption...
        </p>
    </div>
    <div class='video1'>
    <video controls width='640'>
    <source src='assets/videos/video2.mp4' type='video/mp4'>
    </video>
    </div>

    

    
</div> ";
}


function sectionthree () {

    echo '<section class="section3">
    <div class="thirdsection">
        <div class="numberofcats">
            <h1 class="number3"> 50 + </h1>
            <h1 class="bednieripiso">ADOPTED ANIMALS</h1>

        </div>

        <div class="numberofcats">
            <h1 class="number3"> 50 + </h1>
            <h1 class="bednieripiso">HAPPIER FAMILIES</h1>

        </div>
       


    </div>
    </section>';

}
?>

    
</body>
</html>