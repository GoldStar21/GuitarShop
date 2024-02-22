<!DOCTYPE html>
<html lang="en">

  <head>
   <title>Guitar Shop</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="/css/indexpage.css">
  </head>
 <body>


  <!-- Navigation bar -->
  <nav class="navbar">
    <a href="#" class="logo">Guitar Shop</a>
    <div class="nav-links">
      <ul>
        <li class="active"><a href="#">HOME</a></li>
        <li><a href="#categories-section">SHOP</a></li>
        <li><a href="#about-section">ABOUT US</a></li>
        <li><a href="#">Login</a></li>
      </ul>
    </div>
    <img src="/images/menu.png" alt="menu" class="menu-hamburger">
  </nav>

  <!-- Header -->
  <header class="header"></header>


  <!-- Section No.1 -->
 <section id="intro-section" class="intro-section">
    <div class="intro-heading">
      <h2 class="intro">"For those about to ROCK, we salute you."</h2>
    </div>
    <div class="intro-container">
        <div class="intro-paragraph">
          <p> In our store, you can find a perfect guitar for your needs. Equipped with most famous and quality brands on the market we contribute to your dream of becoming a ROCK STAR.</p>
          <p> Take a look and try to find something for yourself. Feel free to ask questions, we are here to help.</p>
        </div>
    </div>
 </section>


  <!-- Section No.2 -->
 <section id="categories-section" class="categories-section">
    <div class="categories-heading">
      <h3 class="categories"> - CATEGORIES - </h3>
    </div>
    <div class="categories-container">
      <img src="/images/accoustic.jpg" alt="Accoustic guitar image">
      <img src="/images/electric.jpg" alt="Electric guitar image">
      <img src="/images/ukulele.jpg" alt="Ukulele guitar image">
    </div>
 </section>


  <!-- Section No.3-->
 <section id="about-section" class="about-section">
   <div class="about-heading">
     <h3 class="abouth"> - ABOUT US - </h3>
   </div>

   <div class="about">
      <div class="icon-box">
        <i class="fa-solid fa-shop"></i>
      </div>

     <div class="text-box">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
     </div>
   </div>

   <div class="about-coins">
     <div class="icon-box">
        <i class="fa-solid fa-coins"></i>
     </div>
     <div class="text-box-coins">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
     </div>
   </div>

   <div class="about-phone">
     <div class="icon-box">
       <i class="fa-solid fa-phone-volume"></i>
     </div>
     <div class="text-box-phone">
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
     </div>
   </div>
 </section>


 
 <footer class="footer">
   <p>&copy; 2024 Guitar Shop - Filip Buzuk</p>
 </footer>



 

 <!-- JS kod prebaciti u poseban fajl i uključiti, ali to može kasnije. -->
 <script>
  
  const menuHamburger = document.querySelector(".menu-hamburger")
  const navLinks = document.querySelector(".nav-links")

  menuHamburger.addEventListener('click',()=>{
  navLinks.classList.toggle('mobile-menu')
  })
 </script>


 </body>
</html>