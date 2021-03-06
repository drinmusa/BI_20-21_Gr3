<!DOCTYPE html>
<html lang="en" manifest="demo.appcache">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Imaginative | TRAVEL</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/travel.css"/>

    <!-- INTERNAL CSS -->
    <style>      
      .modal { 
        position: fixed;
        z-index: 100;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1rem;
        background: rgba(0,0,0,0.8);
        cursor: pointer;
        visibility: hidden;
        opacity: 0;
        transition: all 0.35s ease-in;
      }
      .modal.is-visible {
        visibility: visible;
        opacity: 1;
      }
      .modal-dialog {
        position: relative;
        max-width: 800px;
        max-height: 80vh;
        border-radius: 20px;
        background: white;
        overflow: auto;
        cursor: pointer;
      }
      
      .modal-header,
      .modal-footer {
        border-bottom: 1px solid rgba(0, 0, 0, .15);
      }
      
      .modal-header {
        padding: 20px;
      }

      .modal-header .modal-title {
        margin: 0;
        color: #000000;
      }

      .close-modal {
        position: absolute;
        right: 20px;
        top: 20px;
        padding: 7.59px 10px;
        border-radius: 50px;
        border: none;
      }
      
      .modal-header .modal-close {
        font-size: 1.5rem;
      }
      
      .modal p + p {
        margin-top: 1rem;
      }
    </style>

  </head>
  <body>
    <div class="social-top" id="social-top">
      <div class="social-top-content">
        <div class="social-icons">
          <a href="#" class="social-icons-btn"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-icons-btn"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-icons-btn"><i class="fab fa-pinterest"></i></a>
          <a href="#" class="social-icons-btn"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social-icons-btn"><i class="fas fa-rss-square"></i></a>
        </div>
        <div class="social-links">
          <a href="user.php">Sign Up |</a>
          <a href="user.php">Login |</a>
          <a href="#">RSS Feeds |</a>
          <a href="#">Archived News</a>
        </div>
      </div>
      <div class="social-btn">
        <span id="social-btn-expand"><i class="fas fa-minus" id="social-icon"></i></span>
      </div>
    </div>

    <header class="main-header">
      <div class="container-fluid">
        <div class="header-top">
          <div class="header-logo">
            <img src="images/logo.png" alt="Logo" />
          </div>
          <div class="header-search">
            <input type="text" class="search-input" name="" id="searchBox" placeholder="Search Our Website..."/>
            <input type="submit" class="search-btn" value="SUBMIT" />
          </div>
        </div>

        <nav class="navbar">
          <ul class="nav-menu">
            <li class="nav-item">
              <a href="index.php" class="nav-link">HOME</a>
            </li>

            <li class="nav-item">
              <a href="about.php" class="nav-link">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a href="offers.php" class="nav-link">OFFERS</a>
            </li>
            <li class="nav-item">
              <a href="travel.php" class="nav-link"> TRAVEL </a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">CONTACT</a>
            </li>
          </ul>
        </nav>

        <span class="header-space"></span>
      </div>
    </header>

    <main>
      <section class="main-slider">
        <div class="container">          
          <div class="slider-container w3-content w3-display-container">
            <div class="slider-display-container mySlides">
              <img src="images/travel_tour_img/travel-img-01.jpg" class="" alt="">
              <div class="slider-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                <h1 class="slider-title">POPULAR TOUR TYPES</h1>
                <p class="slider-desc">Enjoy all kind of travel with us.</p>
              </div>
            </div>

            <div class="slider-display-container mySlides">
              <img src="images/travel_tour_img/travel-img-02.jpg" class="" alt="">
              <div class="slider-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                <h1 class="slider-title">POPULAR TOUR TYPES</h1>
                <p class="slider-desc">Enjoy all kind of travel with us.</p>
              </div>
            </div>

            <div class="slider-display-container mySlides">
              <img src="images/travel_tour_img/travel-img-03.jpg" class="" alt="">
              <div class="slider-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                <h1 class="slider-title">POPULAR TOUR TYPES</h1>
                <p class="slider-desc">Enjoy all kind of travel with us.</p>
              </div>
            </div>

            <div class="w3-container w3-large w3-text-white slider-display-bottommiddle" style="width:100%">
              <span class="slider-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
              <span class="slider-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
              <span class="slider-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
            </div>

                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
        </div>
      </section>

      <section>
        <div class="container">
          <div class="">
            <?xml version="1.0" encoding="utf-8"?>
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 1110 200" style="enable-background:new 0 0 1110 200;" xml:space="preserve">
              <path class="st1" id="st1" style="fill: none; stroke: #000000; stroke-width: 1; stroke-miterlimit: 10;" d="M66.79,157.54c-0.18,0-0.35-0.09-0.44-0.26c-0.13-0.24-0.04-0.55,0.2-0.68c0.02-0.01,1.86-1.02,5.36-2.73
                c0.25-0.12,0.55-0.02,0.67,0.23c0.12,0.25,0.02,0.55-0.23,0.67c-3.48,1.7-5.31,2.7-5.32,2.71
                C66.95,157.52,66.87,157.54,66.79,157.54z
                M83.13,149.71c-0.19,0-0.38-0.11-0.46-0.3c-0.11-0.25,0-0.55,0.25-0.66c3.56-1.58,7.32-3.18,11.18-4.76
                c0.25-0.1,0.55,0.02,0.65,0.27c0.1,0.26-0.02,0.55-0.27,0.65c-3.85,1.58-7.6,3.17-11.15,4.75
                C83.27,149.7,83.2,149.71,83.13,149.71z M715.43,140.6C715.43,140.6,715.42,140.6,715.43,140.6c-4.31-0.04-8.33-0.08-12.1-0.14
                c-0.28,0-0.5-0.23-0.49-0.51c0-0.27,0.23-0.49,0.5-0.49c0,0,0,0,0.01,0c3.77,0.06,7.79,0.1,12.09,0.14c0.28,0,0.5,0.23,0.5,0.5
                C715.93,140.38,715.7,140.6,715.43,140.6z M727.56,140.59c-0.27,0-0.49-0.22-0.5-0.49c0-0.28,0.21-0.5,0.49-0.51
                c3.91-0.08,7.99-0.24,12.11-0.48c0.26-0.02,0.51,0.19,0.53,0.47c0.02,0.28-0.19,0.51-0.47,0.53
                C735.58,140.35,731.49,140.51,727.56,140.59C727.57,140.59,727.56,140.59,727.56,140.59z M105.59,140.5
                c-0.2,0-0.39-0.12-0.47-0.32c-0.1-0.26,0.03-0.55,0.29-0.64c3.73-1.42,7.57-2.83,11.4-4.2c0.26-0.1,0.55,0.04,0.64,0.3
                c0.09,0.26-0.04,0.55-0.3,0.64c-3.83,1.36-7.65,2.77-11.38,4.19C105.71,140.49,105.65,140.5,105.59,140.5z M691.25,140.23
                c0,0-0.01,0-0.01,0c-4.41-0.11-8.36-0.24-12.08-0.4c-0.28-0.01-0.49-0.25-0.48-0.52c0.01-0.28,0.2-0.49,0.52-0.48
                c3.71,0.16,7.66,0.29,12.06,0.4c0.28,0.01,0.49,0.24,0.49,0.51C691.75,140.02,691.52,140.23,691.25,140.23z M751.79,139.21
                c-0.25,0-0.47-0.2-0.5-0.46c-0.02-0.27,0.18-0.52,0.45-0.54c3.92-0.35,7.98-0.78,12.06-1.27c0.27-0.04,0.52,0.16,0.56,0.44
                c0.03,0.27-0.16,0.52-0.44,0.56c-4.09,0.49-8.16,0.92-12.09,1.27C751.83,139.21,751.81,139.21,751.79,139.21z M667.13,139.17
                c-0.01,0-0.02,0-0.04,0c-4.24-0.3-8.18-0.67-12.04-1.11c-0.27-0.03-0.47-0.28-0.44-0.55c0.03-0.27,0.29-0.47,0.55-0.44
                c3.84,0.44,7.76,0.8,11.99,1.1c0.28,0.02,0.48,0.26,0.46,0.53C667.61,138.96,667.39,139.17,667.13,139.17z M643.17,136.39
                c-0.03,0-0.05,0-0.08-0.01c-3.47-0.56-7.13-1.21-11.89-2.12c-0.27-0.05-0.45-0.31-0.4-0.58c0.05-0.27,0.31-0.45,0.58-0.4
                c4.75,0.9,8.4,1.55,11.86,2.11c0.27,0.04,0.46,0.3,0.41,0.57C643.63,136.22,643.42,136.39,643.17,136.39z M775.91,136.35
                c-0.24,0-0.46-0.18-0.49-0.43c-0.04-0.27,0.15-0.53,0.42-0.57c3.91-0.56,7.94-1.19,11.99-1.86c0.27-0.05,0.53,0.14,0.58,0.41
                c0.04,0.27-0.14,0.53-0.41,0.58c-4.06,0.67-8.1,1.3-12.01,1.87C775.96,136.35,775.93,136.35,775.91,136.35z M799.86,132.38
                c-0.24,0-0.45-0.17-0.49-0.41c-0.05-0.27,0.13-0.53,0.4-0.58c3.91-0.73,7.91-1.51,11.89-2.33c0.27-0.05,0.54,0.12,0.59,0.39
                c0.05,0.27-0.12,0.54-0.39,0.59c-3.99,0.82-8,1.6-11.91,2.33C799.92,132.37,799.89,132.38,799.86,132.38z M128.45,132.37
                c-0.21,0-0.4-0.13-0.47-0.34c-0.09-0.26,0.06-0.54,0.32-0.63c3.78-1.25,7.67-2.5,11.56-3.71c0.27-0.08,0.54,0.07,0.63,0.33
                s-0.07,0.54-0.33,0.62c-3.88,1.2-7.77,2.45-11.55,3.7C128.56,132.36,128.5,132.37,128.45,132.37z M619.45,131.98
                c-0.03,0-0.06,0-0.1-0.01c-3.62-0.71-7.54-1.47-11.85-2.3c-0.27-0.05-0.45-0.31-0.4-0.58s0.32-0.45,0.58-0.4
                c4.31,0.82,8.23,1.59,11.86,2.3c0.27,0.05,0.45,0.32,0.39,0.59C619.89,131.82,619.68,131.98,619.45,131.98z M823.64,127.52
                c-0.23,0-0.44-0.16-0.49-0.39c-0.06-0.27,0.11-0.54,0.38-0.6c3.88-0.86,7.86-1.77,11.84-2.71c0.27-0.07,0.54,0.1,0.6,0.37
                c0.06,0.27-0.1,0.54-0.37,0.6c-3.99,0.94-7.98,1.86-11.86,2.72C823.71,127.51,823.68,127.52,823.64,127.52z M595.72,127.46
                c-0.03,0-0.06,0-0.09-0.01c-3.7-0.68-7.65-1.39-11.89-2.14c-0.27-0.05-0.45-0.31-0.41-0.58c0.05-0.27,0.31-0.46,0.58-0.41
                c4.25,0.75,8.2,1.46,11.9,2.14c0.27,0.05,0.45,0.31,0.4,0.58C596.17,127.29,595.96,127.46,595.72,127.46z M151.63,125.19
                c-0.22,0-0.42-0.14-0.48-0.36c-0.08-0.27,0.08-0.54,0.34-0.62c3.87-1.12,7.81-2.21,11.7-3.25c0.27-0.07,0.54,0.09,0.61,0.35
                c0.07,0.27-0.09,0.54-0.35,0.61c-3.89,1.04-7.82,2.13-11.68,3.25C151.72,125.18,151.68,125.19,151.63,125.19z M571.91,123.25
                c-0.03,0-0.06,0-0.08-0.01c-3.77-0.64-7.74-1.3-11.93-1.99c-0.27-0.04-0.46-0.3-0.41-0.57c0.04-0.27,0.3-0.46,0.57-0.41
                c4.2,0.69,8.17,1.35,11.94,1.99c0.27,0.05,0.46,0.3,0.41,0.58C572.36,123.08,572.15,123.25,571.91,123.25z M847.29,121.93
                c-0.22,0-0.43-0.15-0.49-0.38c-0.07-0.27,0.1-0.54,0.36-0.61c3.83-0.96,7.78-1.98,11.75-3.03c0.27-0.07,0.54,0.09,0.61,0.36
                c0.07,0.27-0.09,0.54-0.36,0.61c-3.98,1.05-7.94,2.07-11.76,3.03C847.37,121.92,847.33,121.93,847.29,121.93z M548.02,119.35
                c-0.03,0-0.05,0-0.08-0.01c-3.82-0.6-7.8-1.22-11.96-1.86c-0.27-0.04-0.46-0.3-0.42-0.57c0.04-0.27,0.29-0.46,0.57-0.42
                c4.16,0.64,8.14,1.26,11.96,1.86c0.27,0.04,0.46,0.3,0.42,0.57C548.48,119.17,548.26,119.35,548.02,119.35z M175.07,118.91
                c-0.22,0-0.43-0.15-0.48-0.38c-0.07-0.27,0.1-0.54,0.36-0.61c3.87-0.96,7.84-1.91,11.81-2.82c0.27-0.06,0.54,0.11,0.6,0.38
                c0.06,0.27-0.11,0.54-0.38,0.6c-3.96,0.91-7.93,1.85-11.79,2.81C175.15,118.9,175.11,118.91,175.07,118.91z M870.77,115.73
                c-0.22,0-0.42-0.15-0.48-0.37c-0.07-0.27,0.08-0.54,0.35-0.62c3.93-1.09,7.86-2.2,11.68-3.3c0.26-0.08,0.54,0.08,0.62,0.34
                c0.08,0.26-0.08,0.54-0.34,0.62c-3.83,1.11-7.76,2.22-11.69,3.31C870.86,115.72,870.81,115.73,870.77,115.73z M524.09,115.68
                c-0.02,0-0.05,0-0.07-0.01c-3.85-0.57-7.85-1.16-11.98-1.76c-0.27-0.04-0.46-0.29-0.42-0.57c0.04-0.27,0.29-0.46,0.57-0.42
                c4.14,0.6,8.13,1.19,11.98,1.76c0.27,0.04,0.46,0.29,0.42,0.57C524.54,115.5,524.33,115.68,524.09,115.68z M198.72,113.49
                c-0.23,0-0.44-0.16-0.49-0.4c-0.06-0.27,0.12-0.54,0.39-0.59c3.92-0.82,7.93-1.63,11.9-2.39c0.27-0.05,0.53,0.12,0.59,0.4
                c0.05,0.27-0.13,0.53-0.4,0.59c-3.97,0.76-7.97,1.57-11.89,2.39C198.79,113.49,198.76,113.49,198.72,113.49z M500.11,112.2
                c-0.02,0-0.05,0-0.07,0c-3.88-0.55-7.88-1.11-12-1.68c-0.27-0.04-0.46-0.29-0.43-0.56c0.04-0.27,0.29-0.46,0.56-0.43
                c4.12,0.57,8.12,1.13,12,1.68c0.27,0.04,0.46,0.29,0.42,0.57C500.57,112.02,500.36,112.2,500.11,112.2z M894.11,109
                c-0.21,0-0.41-0.14-0.48-0.36c-0.08-0.26,0.07-0.54,0.33-0.62c3.94-1.18,7.81-2.37,11.61-3.55c0.27-0.08,0.54,0.07,0.63,0.33
                c0.08,0.26-0.07,0.54-0.33,0.63c-3.8,1.18-7.68,2.37-11.62,3.55C894.2,108.99,894.15,109,894.11,109z M222.55,108.92
                c-0.24,0-0.45-0.17-0.49-0.41c-0.05-0.27,0.13-0.53,0.41-0.58c3.96-0.69,7.99-1.35,11.98-1.98c0.28-0.04,0.53,0.14,0.57,0.42
                s-0.14,0.53-0.42,0.57c-3.98,0.62-8.01,1.29-11.96,1.97C222.61,108.91,222.58,108.92,222.55,108.92z M476.11,108.86
                c-0.02,0-0.04,0-0.07,0c-3.9-0.53-7.9-1.07-12.01-1.62c-0.27-0.04-0.47-0.29-0.43-0.56s0.29-0.46,0.56-0.43
                c4.11,0.55,8.11,1.09,12.01,1.62c0.27,0.04,0.47,0.29,0.43,0.56C476.57,108.68,476.36,108.86,476.11,108.86z M452.09,105.65
                c-0.02,0-0.04,0-0.07,0l-7.13-0.93c-1.64-0.21-3.27-0.42-4.89-0.62c-0.27-0.03-0.47-0.28-0.44-0.56
                c0.03-0.27,0.29-0.47,0.56-0.43c1.63,0.2,3.26,0.41,4.9,0.62l7.13,0.93c0.27,0.04,0.47,0.29,0.43,0.56
                C452.55,105.47,452.33,105.65,452.09,105.65z M246.52,105.17c-0.25,0-0.46-0.18-0.49-0.43c-0.04-0.27,0.15-0.53,0.43-0.56
                c4.01-0.56,8.06-1.08,12.04-1.56c0.28-0.04,0.52,0.16,0.56,0.44c0.03,0.27-0.16,0.52-0.44,0.56c-3.97,0.48-8.02,1.01-12.02,1.56
                C246.57,105.17,246.55,105.17,246.52,105.17z M428.01,102.71c-0.02,0-0.04,0-0.05,0c-4.03-0.43-8.09-0.84-12.06-1.2
                c-0.27-0.03-0.48-0.27-0.45-0.54c0.03-0.27,0.27-0.48,0.54-0.45c3.98,0.37,8.04,0.77,12.08,1.21c0.27,0.03,0.47,0.28,0.44,0.55
                C428.48,102.52,428.26,102.71,428.01,102.71z M270.61,102.25c-0.25,0-0.47-0.19-0.5-0.45c-0.03-0.27,0.17-0.52,0.45-0.55
                c3.99-0.42,8.05-0.81,12.08-1.16c0.28-0.02,0.52,0.18,0.54,0.45c0.02,0.27-0.18,0.52-0.45,0.54c-4.03,0.35-8.09,0.74-12.07,1.16
                C270.65,102.25,270.63,102.25,270.61,102.25z M917.3,101.79c-0.21,0-0.41-0.13-0.48-0.35c-0.08-0.26,0.06-0.54,0.32-0.63
                c3.96-1.27,7.81-2.53,11.54-3.77c0.26-0.09,0.55,0.06,0.63,0.32c0.09,0.26-0.05,0.55-0.32,0.63c-3.73,1.24-7.59,2.5-11.55,3.77
                C917.4,101.78,917.35,101.79,917.3,101.79z M403.86,100.49c-0.01,0-0.03,0-0.04,0c-4-0.3-8.07-0.58-12.09-0.82
                c-0.28-0.02-0.49-0.25-0.47-0.53c0.02-0.28,0.26-0.48,0.53-0.47c4.03,0.24,8.1,0.52,12.11,0.82c0.27,0.02,0.48,0.26,0.46,0.54
                C404.33,100.29,404.11,100.49,403.86,100.49z M294.78,100.14c-0.26,0-0.48-0.2-0.5-0.46c-0.02-0.28,0.19-0.51,0.46-0.53
                c4.02-0.28,8.1-0.54,12.12-0.75c0.28-0.02,0.51,0.2,0.53,0.47c0.01,0.28-0.2,0.51-0.47,0.53c-4.01,0.22-8.08,0.47-12.1,0.75
                C294.81,100.14,294.79,100.14,294.78,100.14z M379.64,99.04c-0.01,0-0.02,0-0.02,0c-4.02-0.18-8.1-0.32-12.11-0.43
                c-0.28-0.01-0.49-0.24-0.49-0.51c0.01-0.28,0.27-0.49,0.51-0.49c4.02,0.11,8.1,0.26,12.13,0.44c0.28,0.01,0.49,0.25,0.48,0.52
                C380.13,98.83,379.91,99.04,379.64,99.04z M319.01,98.83c-0.27,0-0.49-0.21-0.5-0.48c-0.01-0.28,0.2-0.51,0.48-0.52
                c4.03-0.15,8.11-0.27,12.13-0.35c0.29,0,0.5,0.21,0.51,0.49s-0.21,0.5-0.49,0.51c-4.02,0.08-8.1,0.2-12.12,0.35
                C319.02,98.83,319.01,98.83,319.01,98.83z M355.39,98.36C355.39,98.36,355.39,98.36,355.39,98.36
                c-4.08-0.05-8.12-0.06-12.12-0.04c0,0,0,0,0,0c-0.28,0-0.5-0.22-0.5-0.5c0-0.28,0.22-0.5,0.5-0.5c4.01-0.02,8.05,0,12.13,0.04
                c0.28,0,0.5,0.23,0.49,0.51C355.89,98.14,355.66,98.36,355.39,98.36z M940.36,94.14c-0.21,0-0.4-0.13-0.47-0.34
                c-0.09-0.26,0.05-0.55,0.31-0.63c4.01-1.37,7.84-2.7,11.47-3.98c0.26-0.09,0.55,0.05,0.64,0.31s-0.04,0.55-0.31,0.64
                c-3.64,1.28-7.47,2.61-11.48,3.98C940.47,94.13,940.41,94.14,940.36,94.14z M963.28,86.07c-0.2,0-0.4-0.13-0.47-0.33
                c-0.09-0.26,0.04-0.55,0.3-0.64c4.21-1.52,8.02-2.93,11.4-4.2c0.26-0.1,0.55,0.03,0.64,0.29s-0.04,0.55-0.29,0.64
                c-3.38,1.26-7.2,2.67-11.41,4.2C963.39,86.06,963.33,86.07,963.28,86.07z
                M986.56,77.35c-0.2,0-0.39-0.12-0.47-0.32c-0.1-0.26,0.03-0.55,0.28-0.65c3.62-1.41,5.57-2.2,5.57-2.2
                c0.25-0.1,0.55,0.02,0.65,0.28c0.1,0.26-0.02,0.55-0.28,0.65c0,0-1.96,0.79-5.58,2.2C986.68,77.34,986.62,77.35,986.56,77.35z"/>
              <path class="st0" id="st0" style="fill: none; stroke: #000000; stroke-width: 1" d="M1042.24,46.72c-0.08-0.04-2.03-1.01-4.24-0.38c-2.01,0.57-6.17,2.7-6.34,2.79
                c-0.29,0.15-0.56,0.26-0.69,0.31c-0.17-0.04-0.54-0.15-0.8-0.26l-13.35-5.83c-0.29-0.13-0.86-0.35-1.17-0.39
                c-0.53-0.07-1.49,0.52-1.6,0.58l-0.21,0.13c-0.29,0.18-0.8,0.52-0.98,0.81c-0.11,0.17-0.43,0.69,0.69,1.8c0,0,8.07,7.96,8.1,7.99
                c-0.04,0.03-4.46,2.32-4.46,2.32c-0.29,0.15-0.57,0.27-0.7,0.32c-0.17-0.03-0.55-0.14-0.82-0.24l-4.62-1.89
                c-0.03-0.01-0.8-0.32-1.2-0.35c-0.53-0.04-1.24,0.49-1.25,0.5c-0.2,0.16-0.46,0.42-0.58,0.67c-0.22,0.44,0.01,1.03,0.69,1.76
                c1.84,1.98,4.54,4.92,4.88,5.41c0.2,0.56,1.06,4.46,1.62,7.11c0.04,0.21,0.2,0.9,0.42,1.2c0.44,0.6,1.47,0.3,1.51,0.29
                c0.25-0.08,0.58-0.23,0.77-0.36c0.45-0.31,0.71-1.36,0.76-1.56l1.12-4.87c0.07-0.32,0.16-0.6,0.21-0.73
                c0.14-0.11,0.46-0.33,0.73-0.47c0,0,4.42-2.29,4.46-2.31c0.01,0.05,1.88,11.22,1.88,11.22c0.06,0.34,0.18,0.94,0.37,1.22
                c0.31,0.44,0.96,0.46,1.93,0.04l0.23-0.1c0.15-0.06,0.36-0.16,0.56-0.27c0.2-0.11,0.4-0.22,0.52-0.32
                c0.41-0.34,0.65-1.44,0.67-1.57l2.92-14.27c0.06-0.31,0.15-0.6,0.19-0.74c0.13-0.11,0.45-0.33,0.71-0.46
                c0.18-0.09,4.31-2.27,5.94-3.58c1.79-1.45,2.12-3.6,2.13-3.69C1043.3,47.84,1042.89,47.05,1042.24,46.72z
                M1004.58,59.4l-3.41,1.77c-0.73,0.38-1.01,1.28-0.62,2.01c0.38,0.73,1.28,1.02,2.01,0.65l3.41-1.77
                c0.73-0.38,1.01-1.28,0.62-2.01C1006.2,59.31,1005.3,59.02,1004.58,59.4z
                M1009.96,69.76l-3.41,1.77c-0.73,0.38-1.01,1.28-0.62,2.01c0.38,0.73,1.28,1.02,2.01,0.65l3.41-1.77
                c0.73-0.38,1.01-1.28,0.62-2.01C1011.58,69.67,1010.68,69.38,1009.96,69.76z
                M1007.27,64.58l-7.43,3.86c-0.73,0.38-1.01,1.28-0.62,2.01c0.38,0.73,1.28,1.02,2.01,0.65l7.43-3.86
                c0.73-0.38,1.01-1.28,0.62-2.01C1008.89,64.49,1007.99,64.2,1007.27,64.58z"/>
            </svg>
          </div>
        </div>
      </section>

      <section class="search-travel" >
        <div class="search-travel-container">
          <form method="POST" action="book.php"  name="booktravel"> 
            <div class="search-white-box">
              <div class="whereTo-box">
                <span style="background-color: #F1EAE9; padding: 20px 10px;"><i class="fas fa-map-marker-alt"></i></span>
                <input type="text" value="" name="fullname" placeholder="Full Name" style="cursor: pointer; width: 100%; background-color: #F1EAE9; border-style: none; outline: none; position:relative; padding: 10px;"/>
              </div>
							<div class="whereTo-box">
                <span style="background-color: #F1EAE9; padding: 20px 10px;"><i class="fas fa-map-marker-alt"></i></span>
                <input type="text" value=""  name="phone" placeholder="Phone" style="cursor: pointer; width: 100%; background-color: #F1EAE9; border-style: none; outline: none; position:relative; padding: 10px;"/>
              </div>
                  <div class="month-box">
                    <span style="background-color: #F1EAE9; padding: 20px 10px;"><i class="fas fa-calendar"></i></span>

                    <select class="month" name="month" style="cursor: pointer; width: 100%; background-color: #F1EAE9; border-style: none; outline: none; position:relative; padding:10px 15px; color: gray;">
                      <option value="">Month</option>
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December</option>
                    </select>
                  </div>
              <div class="travel-type-box">
                <span style="background-color: #F1EAE9; padding: 20px 10px;"><i class="fas fa-thumbtack"></i></span>
                <select class="type" name="destination"  style="cursor: pointer; width: 100%; background-color: #F1EAE9; border-style: none; outline: none; position:relative; padding:10px 15px; color: gray;">
                  <option value="">Destination</option>
                  <option value="Antalya">Antalya</option>
                  <option value="Dubai">Dubai</option>
                  <option value="Maldive">Maldive</option>
                  <option value="Zimbabwe">Zimbabwe</option>
                  <option value="Cappadocia">Cappadocia</option>
                  <option value="Milano">Milano</option>
                  <option value="Mykonos">Mykonos>
                  <option value="sainttropez">Saint Tropez</option>
                  <option value="spiritual-voyage">Monaco</option>
                  
                </select> 
              </div>  
                  <div class="box-submit">
									<input type="submit" value="Book Now" class="btn" style=" font-size: 14px;
  line-height: 49px;
  height: 62px; border-width: 0;
  padding-left: 49px;
  padding-right: 49px;
  margin-left: 20px;background:#97455f;cursor: pointer; width: 100%; color:#fff; outline: none; padding:10px 15px;">
                     
                  </div>
             </div>  
           </form>
        </div>
  </section>

  <section class="choice">
    <div class="container">
      <div class="choice-container" style="margin: 90px 0; display: flex; justify-content: space-between;">
        <div class="choice-tour-item-inner">
              <div class="choice-tour-item-image">
                <img src="images/travel_tour_img/wedding-img.jpg" alt=""/>
              </div>
            

            <div class="choice-tour-item-inner-tittle">
              <h4>DESTINATION WEDDING</h4>
              <span class="choice-tours-item-discount-price">$345</span>
            </div>
            
            <div class="choice-tour-item-rate">
              <p class="choice-tour-item-rate-paragraph">8.0 Superb</p>
            </div> 

            <div class="choice-tour-item-paragraph">
              <p class="choice-tour-item-paragraph-p">Every romantic event and getaway we help plan is tailored to each of our couples' visions.</p>
            </div>

            <div class="choice-tour-item-inner-block">
              <i class="far fa-clock"></i>
              <span class="choice-tour-info-label">10 Days</span>
              <i class="fas fa-user"></i>
              <span class="choice-tour-info-label">12+</span>
              <i class="fas fa-map-marker-alt"></i>
              <span class="choice-tour-info-label">Cypro</span>
            </div>
        </div>

        <div class="choice-tour-item-inner">
                <div class="choice-tour-item-image">
                  <img src="images/travel_tour_img/south-africa.jpg" alt=""/>
                </div>

              <div class="choice-tour-item-inner-tittle">
                <h4>SOUTH AMERICA ICONS</h4>
                <span class="choice-tours-item-discount-price">$675</span>
              </div> 
                  
              <div class="choice-tour-item-rate">
                <p class="choice-tour-item-rate-paragraph">7.7 Superb</p>
              </div> 

              <div class="choice-tour-item-paragraph">
                <p class="choice-tour-item-paragraph-p">Bear witness to South America's iconic cities and unlock a diverse continent steeped</p>
              </div>

              <div class="choice-tour-item-inner-block">
                <i class="far fa-clock"></i>
                <span class="choice-tour-info-label">10 Days</span>
                <i class="fas fa-user"></i>
                <span class="choice-tour-info-label">12+</span>
                <i class="fas fa-map-marker-alt"></i>
                <span class="choice-tour-info-label">Peru</span>
              </div>
        </div>

        <div class="choice-tour-item-inner">
                <div class="choice-tour-item-image">
                  <img src="images/travel_tour_img/cuban-city.jpg" alt=""/>
                </div>
              
              <div class="choice-tour-item-inner-tittle">
                <h4>CUBA ADVENTURE</h4>
                <span class="choice-tours-item-discount-price" style="padding-left: 60px;">$630</span>
              </div> 
                    
              <div class="choice-tour-item-rate">
                <p class="choice-tour-item-rate-paragraph">8.0 Superb</p>
              </div> 
                          
              <div class="choice-tour-item-paragraph">
                <p class="choice-tour-item-paragraph-p">Join a small group tour of Cuba, arrange a private tour, or take a short break in Havana.</p>
              </div>

              <div class="choice-tour-item-inner-block">
                <i class="far fa-clock"></i>
                <span class="choice-tour-info-label">10 Days</span>
                <i class="fas fa-user"></i>
                <span class="choice-tour-info-label">12+</span>
                <i class="fas fa-map-marker-alt"></i>
                <span class="choice-tour-info-label">Cuba</span>
              </div>
        </div>
      </div>
     </div>       
  </section>
  
  <section class="presentation">
      <div class="container">
        <h1 class="presentation-category">Beaches <a class="link" data-open="modal-results"><i class="fas fa-info-circle"></i></a></h1>
            <div class="presentation-container g-scrolling-carousel"> 
              <div class="presentation-container-swipe items items-1">
                <a class="link" data-open="modal-maldives" onclick="clickCounter()">
                      <div class="presentation-destination-item">
                          <div class="presentation-image">
                              <img src="images/travel_tour_img/maldives.jpg" alt="photo of canada" width="100%" height="100%">
                          </div>
                          <div class="presentation-title">
                            <h4 class="presentation-container-item-title">Maldives</h4>
                          </div>
                      </div>   
                  </a> 

                  <a class="link" data-open="modal-newzeland" onclick="clickCounter()">
                    <div class="presentation-destination-item">
                        <div class="presentation-image">
                          <img src="images/travel_tour_img/new-zeland.jpg" alt="photo of canada" width="100%" height="100%">
                        </div>
                        <div class="presentation-title">
                          <h4 class="presentation-container-item-title">New Zeland</h4>
                        </div>
                    </div>
                  </a>
                
                  <a class="link" data-open="modal-positano" onclick="clickCounter()">
                    <div class="presentation-destination-item">
                        <div class="presentation-image">
                          <img src="images/travel_tour_img/positano.jpg" alt="photo of canada" width="100%" height="100%">
                        </div>
                        <div class="presentation-title">
                          <h4 class="presentation-container-item-title">Positano</h4>
                        </div>
                    </div>
                  </a>
            
                  <a class="link" data-open="modal-arecaceae" onclick="clickCounter()">
                    <div class="presentation-destination-item">
                        <div class="presentation-image">
                          <img src="images/travel_tour_img/Arecaceae.jpg" alt="photo of canada" width="100%" height="100%">
                        </div>
                        <div class="presentation-title">
                          <h4 class="presentation-container-item-title">Arecaceae</h4>
                        </div>
                    </div>
                  </a>
                
                  <a class="link" data-open="modal-island" onclick="clickCounter()">
                    <div class="presentation-destination-item">
                        <div class="presentation-image">
                          <img src="images/travel_tour_img/island.jpg" alt="photo of canada" width="100%" height="100%">
                        </div>
                        <div class="presentation-title">
                          <h4 class="presentation-container-item-title">Island</h4>
                        </div>
                    </div>
                  </a>
      
                  <a class="link" data-open="modal-cuba" onclick="clickCounter()">
                    <div class="presentation-destination-item">
                        <div class="presentation-image">
                          <img src="images/travel_tour_img/cuba-item.jpg" alt="photo of canada" width="100%" height="100%">
                        </div>
                        <div class="presentation-title">
                          <h4 class="presentation-container-item-title">Cuba</h4>
                        </div>
                    </div>
                  </a>

                  <a class="link" data-open="modal-mexiko" onclick="clickCounter()">
                    <div class="presentation-destination-item">
                        <div class="presentation-image">
                          <img src="images/travel_tour_img/mexiko.jpg" alt="photo of canada" width="100%" height="100%">
                        </div>
                        <div class="presentation-title">
                          <h4 class="presentation-container-item-title">Mexiko</h4>
                        </div>
                    </div>
                  </a>

                  <a class="link" data-open="modal-shoreline" onclick="clickCounter()">
                    <div class="presentation-destination-item">
                        <div class="presentation-image">
                          <img src="images/travel_tour_img/shoreline.jpg" alt="photo of canada" width="100%" height="100%">
                        </div>
                        <div class="presentation-title">
                          <h4 class="presentation-container-item-title">Shoreline</h4>
                        </div>
                    </div>
                  </a>

                  <a class="link" data-open="modal-malaysia" onclick="clickCounter()">
                    <div class="presentation-destination-item">
                        <div class="presentation-image">
                          <img src="images/travel_tour_img/malaysia.jpg" alt="photo of canada" width="100%" height="100%">
                        </div>
                        <div class="presentation-title">
                          <h4 class="presentation-container-item-title">Malaysia</h4>
                        </div>
                    </div>
                  </a>

                  <a class="link" data-open="modal-kouroutas" onclick="clickCounter()">
                    <div class="presentation-destination-item">
                        <div class="presentation-image">
                          <img src="images/travel_tour_img/kouroutas.jpg" alt="photo of canada" width="100%" height="100%">
                        </div>
                        <div class="presentation-title">
                          <h4 class="presentation-container-item-title">Kouroutas</h4>
                        </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
        </div> 
     
      <div class="container">
        <h1 class="presentation-category">Adventure World</h1>
          <div class="presentation-container g-scrolling-carousel"> 
            <div class="presentation-container-swipe items items-2">
              
              <a class="link" data-open="modal-gudvangen" onclick="clickCounter()">
                    <div class="presentation-destination-item">
                        <div class="presentation-image">
                            <img src="images/travel_tour_img/gudvangen.jpg" alt="photo of canada" width="100%" height="100%">
                        </div>
                        <div class="presentation-title">
                          <h4 class="presentation-container-item-title">Gudvangen</h4>
                        </div>
                    </div>   
                </a>           
            
                <a class="link" data-open="modal-lumajang" onclick="clickCounter()">
                  <div class="presentation-destination-item">
                      <div class="presentation-image">
                        <img src="images/travel_tour_img/lumajang-regency.jpg" alt="photo of canada" width="100%" height="100%">
                      </div>
                      <div class="presentation-title">
                        <h4 class="presentation-container-item-title">Lumajang</h4>
                      </div>
                  </div>
                </a>
              
                <a class="link" data-open="modal-zirkel" onclick="clickCounter()">
                  <div class="presentation-destination-item">
                      <div class="presentation-image">
                        <img src="images/travel_tour_img/mount-zirkel.jpg" alt="photo of canada" width="100%" height="100%">
                      </div>
                      <div class="presentation-title">
                        <h4 class="presentation-container-item-title">Zirkel</h4>
                      </div>
                  </div>
                </a>
          
                <a class="link" data-open="modal-oljatovalley" onclick="clickCounter()">
                  <div class="presentation-destination-item">
                      <div class="presentation-image">
                        <img src="images/travel_tour_img/oljato-monument Valley.jpg" alt="photo of canada" width="100%" height="100%">
                      </div>
                      <div class="presentation-title">
                        <h4 class="presentation-container-item-title">Oljato Valley</h4>
                      </div>
                  </div>
                </a>
              
                <a class="link" data-open="modal-annecy" onclick="clickCounter()">
                  <div class="presentation-destination-item">
                      <div class="presentation-image">
                        <img src="images/travel_tour_img/annecy.jpg" alt="photo of canada" width="100%" height="100%">
                      </div>
                      <div class="presentation-title">
                        <h4 class="presentation-container-item-title">Annecy</h4>
                      </div>
                  </div>
                </a>
    
                <a class="link" data-open="modal-sahara" onclick="clickCounter()">
                  <div class="presentation-destination-item">
                      <div class="presentation-image">
                        <img src="images/travel_tour_img/sahara.jpg" alt="photo of canada" width="100%" height="100%">
                      </div>
                      <div class="presentation-title">
                        <h4 class="presentation-container-item-title">Sahara</h4>
                      </div>
                  </div>
                </a>

                <a class="link" data-open="modal-brasov" onclick="clickCounter()">
                  <div class="presentation-destination-item">
                      <div class="presentation-image">
                        <img src="images/travel_tour_img/brasov.jpg" alt="photo of canada" width="100%" height="100%">
                      </div>
                      <div class="presentation-title">
                        <h4 class="presentation-container-item-title">Brasov</h4>
                      </div>
                  </div>
                </a>

                <a class="link" data-open="modal-grindewald" onclick="clickCounter()">
                  <div class="presentation-destination-item">
                      <div class="presentation-image">
                        <img src="images/travel_tour_img/grindewald.jpg" alt="photo of canada" width="100%" height="100%">
                      </div>
                      <div class="presentation-title">
                        <h4 class="presentation-container-item-title">Grindewald</h4>
                      </div>
                  </div>
                </a>

                <a class="link" data-open="modal-lofoten" onclick="clickCounter()">
                  <div class="presentation-destination-item">
                      <div class="presentation-image">
                        <img src="images/travel_tour_img/lofoten.jpg" alt="photo of canada" width="100%" height="100%">
                      </div>
                      <div class="presentation-title">
                        <h4 class="presentation-container-item-title">Lofoten</h4>
                      </div>
                  </div>
                </a>

                <a class="link" data-open="modal-crestedbutte" onclick="clickCounter()">
                  <div class="presentation-destination-item">
                      <div class="presentation-image">
                        <img src="images/travel_tour_img/crested-butte.jpg" alt="photo of canada" width="100%" height="100%">
                      </div>
                      <div class="presentation-title">
                        <h4 class="presentation-container-item-title">Crested-Butte</h4>
                      </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
      </div>  


    <div class="container">
      <h1 class="presentation-category">City Sightseeing</h1>
        <div class="presentation-container g-scrolling-carousel"> 
          <div class="presentation-container-swipe items items-3">
           
            <a class="link" data-open="modal-terrasa" onclick="clickCounter()">
                  <div class="presentation-destination-item">
                      <div class="presentation-image">
                          <img src="images/travel_tour_img/terrazza.jpg" alt="photo of canada" width="100%" height="100%">
                      </div>
                      <div class="presentation-title">
                        <h4 class="presentation-container-item-title">Terrazza del Pincio</h4>
                      </div>
                  </div>   
              </a>           
          
              <a class="link" data-open="modal-melboune" onclick="clickCounter()">
                <div class="presentation-destination-item">
                    <div class="presentation-image">
                      <img src="images/travel_tour_img/melbourne.jpg" alt="photo of canada" width="100%" height="100%">
                    </div>
                    <div class="presentation-title">
                      <h4 class="presentation-container-item-title">Melboune</h4>
                    </div>
                </div>
              </a>
            
              <a class="link" data-open="modal-paris" onclick="clickCounter()">
                <div class="presentation-destination-item">
                    <div class="presentation-image">
                      <img src="images/travel_tour_img/paris.jpg" alt="photo of canada" width="100%" height="100%">
                    </div>
                    <div class="presentation-title">
                      <h4 class="presentation-container-item-title">Paris</h4>
                    </div>
                </div>
              </a>
        
              <a class="link" data-open="modal-london" onclick="clickCounter()">
                <div class="presentation-destination-item">
                    <div class="presentation-image">
                      <img src="images/travel_tour_img/london.jpg" alt="photo of canada" width="100%" height="100%">
                    </div>
                    <div class="presentation-title">
                      <h4 class="presentation-container-item-title">London</h4>
                    </div>
                </div>
              </a>
            
              <a class="link" data-open="modal-sanfrancisko" onclick="clickCounter()">
                <div class="presentation-destination-item">
                    <div class="presentation-image">
                      <img src="images/travel_tour_img/san-francisko.jpg" alt="photo of canada" width="100%" height="100%">
                    </div>
                    <div class="presentation-title">
                      <h4 class="presentation-container-item-title">San Francisko</h4>
                    </div>
                </div>
              </a>

              <a class="link" data-open="modal-stockholm" onclick="clickCounter()">
                <div class="presentation-destination-item">
                    <div class="presentation-image">
                      <img src="images/travel_tour_img/stockholm.jpg" alt="photo of canada" width="100%" height="100%">
                    </div>
                    <div class="presentation-title">
                      <h4 class="presentation-container-item-title">Stockholm</h4>
                    </div>
                </div>
              </a>

              <a class="link" data-open="modal-venecie" onclick="clickCounter()">
                <div class="presentation-destination-item">
                    <div class="presentation-image">
                      <img src="images/travel_tour_img/venecie.jpg" alt="photo of canada" width="100%" height="100%">
                    </div>
                    <div class="presentation-title">
                      <h4 class="presentation-container-item-title">Venecie</h4>
                    </div>
                </div>
              </a>

              <a class="link" data-open="modal-fukuoka" onclick="clickCounter()">
                <div class="presentation-destination-item">
                    <div class="presentation-image">
                      <img src="images/travel_tour_img/fukuoka.jpg" alt="photo of canada" width="100%" height="100%">
                    </div>
                    <div class="presentation-title">
                      <h4 class="presentation-container-item-title">Fukuoka</h4>
                    </div>
                </div>
              </a>

              <a class="link" data-open="modal-rome" onclick="clickCounter()">
                <div class="presentation-destination-item">
                    <div class="presentation-image">
                      <img src="images/travel_tour_img/rome.jpg" alt="photo of canada" width="100%" height="100%">
                    </div>
                    <div class="presentation-title">
                      <h4 class="presentation-container-item-title">Rome</h4>
                    </div>
                </div>
              </a>

              <a class="link" data-open="modal-prague" onclick="clickCounter()">
                <div class="presentation-destination-item">
                    <div class="presentation-image">
                      <img src="images/travel_tour_img/prague.jpg" alt="photo of canada" width="100%" height="100%">
                    </div>
                    <div class="presentation-title">
                      <h4 class="presentation-container-item-title">Prague</h4>
                    </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div> 
  </section>



  <!-- Modal Results -->
  <div class="modal" id="modal-results">
    <div class="modal-dialog">
      <section class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Info</h4>
          <button class="close-modal" aria-label="close modal" data-close>
            ???  
          </button>
        </div>
        <p class="modal-presentation-description">
          <span id="result"></span></p>
      </section>
    </div>
  </div>

  <script>
    function clickCounter() {
      if (typeof(Storage) !== "undefined") {
        if (sessionStorage.clickcount) {
          sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
        } else {
          sessionStorage.clickcount = 1;
        }
        document.getElementById("result").innerHTML = "You have opened the modal " + sessionStorage.clickcount + " time(s) in this session.";
      } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
      }
    }
  </script>




  <!-- Modal Maldives -->
  <div class="modal" id="modal-maldives">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/maldives.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Maldives, officially the Republic of Maldives, is a small archipelagic state in South Asia, situated in the Arabian Sea of the Indian Ocean. It lies southwest of Sri Lanka and India, about 700 kilometres from the Asian continent's mainland.</p>
      </section>
    </div>
  </div>

  <!-- Modal New Zeland -->
  <div class="modal" id="modal-newzeland">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/new-zeland.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">New Zealand is an island country in the southwestern Pacific Ocean. It consists of two main landmasses???the North Island and the South Island ???and more than 700 smaller islands, covering a total area of 268,021 square kilometres.</p>
      </section>
    </div>
  </div>

  <!-- Modal Positano -->
  <div class="modal" id="modal-positano">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/positano.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Positano is a cliffside village on southern Italy's Amalfi Coast. It's a well-known holiday destination with a pebble beachfront and steep, narrow streets lined with boutiques and cafes. Its Chiesa di Santa Maria Assunta features a majolica-tiled dome and a 13th-century Byzantine icon of the Virgin Mary. The Sentiero degli Dei hiking trail links Positano to other coastal towns.</p>
      </section>
    </div>
  </div>

   <!-- Modal Arecaceae -->
   <div class="modal" id="modal-arecaceae">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/Arecaceae.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">The Arecaceae are a botanical family of perennial flowering plants in the monocot order Arecales. Their growth form can be climbers, shrubs, tree-like and stemless plants, all commonly known as palms. Those having a tree-like form are called palm trees.</p>
      </section>
    </div>
  </div>

   <!-- Modal Island -->
   <div class="modal" id="modal-island">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/island.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">An island or isle is any piece of subcontinental land that is surrounded by water. Very small islands such as emergent land features on atolls can be called islets, skerries, cays or keys. An island in a river or a lake island may be called an eyot or ait, and a small island off the coast may be called a holm.</p>
      </section>
    </div>
  </div>

     <!-- Modal Cuba -->
     <div class="modal" id="modal-cuba">
      <div class="modal-dialog">
        <section class="modal-content">
          <button class="close-modal" aria-label="close modal" data-close>
            ???  
          </button>
  
          <div class="modal-presentation-image">
            <img src="images/travel_tour_img/cuba-item.jpg" alt="photo of canada" width="100%" height="100%">
          </div>
  
          <p class="modal-presentation-description">Cuba, officially the Republic of Cuba is a country comprising the island of Cuba, as well as Isla de la Juventud and several minor archipelagos. Cuba is located in the northern Caribbean where the Caribbean Sea, Gulf of Mexico and Atlantic Ocean meet.</p>
        </section>
      </div>
    </div>

       <!-- Modal Mexiko -->
   <div class="modal" id="modal-mexiko">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/mexiko.jpg" alt="photo of mexiko" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Mexico, officially the United Mexican States, is a country in the southern portion of North America. It is bordered to the north by the United States; to the south and west by the Pacific Ocean; to the southeast by Guatemala, Belize, and the Caribbean Sea; and to the east by the Gulf of Mexico.</p>
      </section>
    </div>
  </div>

     <!-- Modal Shoreline -->
     <div class="modal" id="modal-shoreline">
      <div class="modal-dialog">
        <section class="modal-content">
          <button class="close-modal" aria-label="close modal" data-close>
            ???  
          </button>
  
          <div class="modal-presentation-image">
            <img src="images/travel_tour_img/shoreline.jpg" alt="photo of canada" width="100%" height="100%">
          </div>
  
          <p class="modal-presentation-description">Shoreline is a city in King County, Washington, United States. It is located between the city limits of Seattle and the Snohomish County border, approximately 9 miles north of Downtown Seattle.</p>
        </section>
      </div>
    </div>

       <!-- Modal Malaysia -->
   <div class="modal" id="modal-malaysia">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/malaysia.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Malaysia is a Southeast Asian country occupying parts of the Malay Peninsula and the island of Borneo. It's known for its beaches, rainforests and mix of Malay, Chinese, Indian and European cultural influences. The capital, Kuala Lumpur, is home to colonial buildings, busy shopping districts such as Bukit Bintang and skyscrapers such as the iconic, 451m-tall Petronas Twin Towers.</p>
      </section>
    </div>
  </div>

     <!-- Modal Kouroutas -->
     <div class="modal" id="modal-kouroutas">
      <div class="modal-dialog">
        <section class="modal-content">
          <button class="close-modal" aria-label="close modal" data-close>
            ???  
          </button>
  
          <div class="modal-presentation-image">
            <img src="images/travel_tour_img/kouroutas.jpg" alt="photo of canada" width="100%" height="100%">
          </div>
  
          <p class="modal-presentation-description">Kourouta Beach: Just another beach.... - See 160 traveller reviews, 126 candid photos, and great deals for Amaliada, Greece, at Tripadvisor.</p>
        </section>
      </div>
    </div>

    <!-- Second Corusel-->

    <!-- Modal Gudvangen -->
  <div class="modal" id="modal-gudvangen">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/gudvangen.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Gudvangen is a village in Aurland Municipality in Vestland county, Norway. It is a popular tourist destination and is located at the end of the N??r??yfjord where the N??r??ydalselvi river empties into the fjord. The European route E16 highway passes by the village.</p>
      </section>
    </div>
  </div>

  <!-- Modal Lumajang -->
  <div class="modal" id="modal-lumajang">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/lumajang-regency.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Lumajang Regency is a Regency located in the East Java province of Indonesia. It covers an area of 1,790.90 sq. km, and had a population of 1,006,458 at the 2010 Census; the latest official estimate is 1,034,730. It shares its borders with Jember Regency, Probolinggo Regency, and Malang Regency.</p>
      </section>
    </div>
  </div>

  <!-- Modal Zirkel -->
  <div class="modal" id="modal-zirkel">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/mount-zirkel.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Mount Zirkel is the highest summit of the Park Range of the Rocky Mountains of North America. The prominent 12,185-foot peak is located in the Mount Zirkel Wilderness of Routt National Forest.</p>
      </section>
    </div>
  </div>

  <!-- Modal Oljato Valley -->
  <div class="modal" id="modal-oljatovalley">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/oljato-monument Valley.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">A valley is an elongated low area often running between hills or mountains which will typically contain a river or stream running from one end to the other. Most valleys are formed by erosion of the land surface by rivers or streams over a very long period of time.</p>
      </section>
    </div>
  </div>

  <!-- Modal Annecy -->
  <div class="modal" id="modal-annecy">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/annecy.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Annecy is an alpine town in southeastern France, where Lake Annecy feeds into the Thiou River. It???s known for its Vieille Ville (old town), with cobbled streets, winding canals and pastel-colored houses. Overlooking the city, the medieval Ch??teau d???Annecy, once home to the Counts of Geneva, contains a museum with regional artifacts such as Alpine furniture and religious art, plus a natural history exhibit.</p>
      </section>
    </div>
  </div>

  <!-- Modal Sahara -->
  <div class="modal" id="modal-sahara">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/sahara.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">The Sahara is a desert on the African continent. With an area of 9,200,000 square kilometres (3,600,000 sq mi), it is the largest hot desert in the world.</p>
      </section>
    </div>
  </div>

  <!-- Modal Brasov -->
  <div class="modal" id="modal-brasov">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/brasov.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Bra??ov is a city in the Transylvania region of Romania, ringed by the Carpathian Mountains. It's known for its medieval Saxon walls and bastions, the towering Gothic-style Black Church and lively cafes. Pia??a Sfatului (Council Square) in the cobbled old town is surrounded by colorful baroque buildings and is home to the Casa Sfatului, a former town hall turned local history museum.</p>
      </section>
    </div>
  </div>

  <!-- Modal Grindewald -->
  <div class="modal" id="modal-grindewald">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/grindewald.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Grindelwald, a village in Switzerland???s Bernese Alps, is a popular gateway for the Jungfrau Region, with skiing in winter and hiking in summer. It's also a base for mountain-climbing ascents up the iconic north face of Eiger Mountain. Gletscherschlucht, a glacial gorge just outside Grindelwald, features paths with interpretive signage, waterfalls and striated limestone walls.</p>
      </section>
    </div>
  </div>

  <!-- Modal Lofoten -->
  <div class="modal" id="modal-lofoten">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/lofoten.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Lofoten is an archipelago in Norway. Its known for its dramatic scenery, with peaks like the Svolv??rgeita pinnacle jutting up into the sky. Himmeltindan Mountain sits on Vestv??g??ya Island. The nearby Lofotr Viking Museum features a Viking longhouse reconstruction. Cycle routes cover the islands, passing through fishing villages like Henningsv??r, which has colorful buildings lining its waterways.</p>
      </section>
    </div>
  </div>

  <!-- Modal Crested-Butte -->
  <div class="modal" id="modal-crestedbutte">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/crested-butte.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Crested Butte is a town in the Rocky Mountains of Colorado. Downhill ski and mountain-bike trails crisscross the slopes of Crested Butte Mountain Resort. There are Nordic ski routes around town. The West Elk Loop Scenic and Historic Byway takes in wilderness areas like Kebler Pass, to the west, known for colorful Quaking aspen trees in fall. Shops and restaurants in wooden buildings line downtown???s Elk Avenue.</p>
      </section>
    </div>
  </div>

  <!--Third Corosuel-->

   <!-- Modal Terrasa -->
   <div class="modal" id="modal-terrasa">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/terrazza.jpg" alt="photo of terrazza" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Terrassa, is a city in the east central region of Catalonia, in the province of Barcelona, comarca of Vall??s Occidental, of which it is the cocapital along with Sabadell.</p>
      </section>
    </div>
  </div>

   <!-- Modal Melboune -->
   <div class="modal" id="modal-melboune">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/melbourne.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Maldives, officially the Republic of Maldives, is a small archipelagic state in South Asia, situated in the Arabian Sea of the Indian Ocean. It lies southwest of Sri Lanka and India, about 700 kilometres from the Asian continent's mainland.</p>
      </section>
    </div>
  </div>

   <!-- Modal Paris -->
   <div class="modal" id="modal-paris">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/paris.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Paris, France's capital, is a major European city and a global center for art, fashion, gastronomy and culture. Its 19th-century cityscape is crisscrossed by wide boulevards and the River Seine. Beyond such landmarks as the Eiffel Tower and the 12th-century, Gothic Notre-Dame cathedral, the city is known for its cafe culture and designer boutiques along the Rue du Faubourg Saint-Honor??.</p>
      </section>
    </div>
  </div>

   <!-- Modal London -->
   <div class="modal" id="modal-london">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/london.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">London, the capital of England and the United Kingdom, is a 21st-century city with history stretching back to Roman times. At its centre stand the imposing Houses of Parliament, the iconic ???Big Ben??? clock tower and Westminster Abbey, site of British monarch coronations. Across the Thames River, the London Eye observation wheel provides panoramic views of the South Bank cultural complex, and the entire city.</p>
      </section>
    </div>
  </div>

   <!-- Modal San Francisko -->
   <div class="modal" id="modal-sanfrancisko">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/san-francisko.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">San Francisco, officially the City and County of San Francisco, is a cultural, commercial, and financial center of Northern California. San Francisco is the 16th most populous city in the United States, and the fourth most populous in California, with 881,549 residents as of 2019. </p>
      </section>
    </div>
  </div>

   <!-- Modal Stockholm -->
   <div class="modal" id="modal-stockholm">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/stockholm.jpg" alt="photo of canada" width="100%" height="100%">
        </div>
        Stockholm, the capital of Sweden, encompasses 14 islands and more than 50 bridges on an extensive Baltic Sea archipelago. The cobblestone streets and ochre-colored buildings of Gamla Stan (the old town) are home to the 13th-century Storkyrkan Cathedral, the Kungliga Slottet Royal Palace and the Nobel Museum, which focuses on the Nobel Prize. Ferries and sightseeing boats shuttle passengers between the islands. </p>
      </section>
    </div>
  </div>

   <!-- Modal Venecie -->
   <div class="modal" id="modal-venecie">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/venecie.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Venice, the capital of northern Italy???s Veneto region, is built on more than 100 small islands in a lagoon in the Adriatic Sea. It has no roads, just canals ??? including the Grand Canal thoroughfare ??? lined with Renaissance and Gothic palaces. The central square, Piazza San Marco, contains St. Mark???s Basilica, which is tiled with Byzantine mosaics, and the Campanile bell tower offering views of the city???s red roofs.</p>
      </section>
    </div>
  </div>

  

   <!-- Modal Fukuoka -->
   <div class="modal" id="modal-fukuoka">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/fukuoka.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Fukuoka, capital of Fukuoka Prefecture, sits on the northern shore of Japan???s Kyushu Island. It???s known for ancient temples, beaches and modern shopping malls, including Canal City. Maizuru Park contains ruins of 17th-century Fukuoka Castle. The central Hakata district contains T??ch??-ji Temple, home to a 10m wooden Buddha and the Hakata Machiya Folk Museum, with displays on daily life in the Meiji and Taish?? eras.</p>
      </section>
    </div>
  </div>

   <!-- Modal Rome -->
   <div class="modal" id="modal-rome">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/rome.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Rome is the capital city and a special comune of Italy, as well as the capital of the Lazio region. The city has been a major human settlement for almost three millennia. With 2,860,009 residents in 1,285 km??, it is also the country's most populated comune.</p>
      </section>
    </div>
  </div>

   <!-- Modal Prague -->
   <div class="modal" id="modal-prague">
    <div class="modal-dialog">
      <section class="modal-content">
        <button class="close-modal" aria-label="close modal" data-close>
          ???  
        </button>

        <div class="modal-presentation-image">
          <img src="images/travel_tour_img/prague.jpg" alt="photo of canada" width="100%" height="100%">
        </div>

        <p class="modal-presentation-description">Prague, capital city of the Czech Republic, is bisected by the Vltava River. Nicknamed ???the City of a Hundred Spires,??? it's known for its Old Town Square, the heart of its historic core, with colorful baroque buildings, Gothic churches and the medieval Astronomical Clock, which gives an animated hourly show. Completed in 1402, pedestrian Charles Bridge is lined with statues of Catholic saints.</p>
      </section>
    </div>
  </div>

  <section class="video">
    <div class="container">
      <video poster="images\travel_tour_img/video-travel.jpg" controls style="width: 100%;">
        <source src="images/video/video.mp4" type="video/mp4">
        <source src="mov_bbb.ogg" type="video/ogg">
      </video>
    </div>
  </section>

  <section class="popular-tour-types">
      <div class="container">
          <div class="container-title" style="margin: 90px 0;">
              <h2 style=" padding-top: 
                          100px;font-size: 30px;color:
                          #313131; font-family: montserrat,sans-serif;font-size:
                          30px;line-height: 36px;
                          font-style: normal;
                          font-weight: 600;
                          letter-spacing:
                          1.8px;text-transform: 
                          uppercase;"
                          >POPULAR TOUR TYPES
              </h2>
              <p style="  color: #949090;
                          font-family: montserrat,sans-serif;
                          font-size: 17px;
                          line-height: 32px;
                          font-style: normal;
                          font-weight: 500;
                          letter-spacing: 0;
                          text-transform: none;">
                          Enjoy all kind of travel with us.
                </p>
           </div> 
      </div>
  </section>
</main>

    <footer class="main-footer">
      <div class="container">
        Copyright &copy; 2020 - All rights reserved - Imaginative
      </div>
    </footer>
</body>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- SOCIAL TOP BUTTON HIDE/SHOW -->
  <script type="text/javascript">
    $(document).ready(function () {
        $("#social-btn-expand").click(function () {
            if($("#social-top").hasClass("showhide"))
            {
              $("#social-top").removeClass("showhide");
              $("#social-icon").removeClass("fa-plus");
              $("#social-top-content").toggle();
            } else {
              $("#social-top").addClass("showhide");
              $("#social-icon").addClass("fa-plus");
              $("#social-top-content").toggle();
            }
        });
    });
  </script>


  <!-- SLIDER -->
  <script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentDiv(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " w3-white";
    }
  </script>
    
  <!-- SLIDER AUTO-CHANGE -->
  <script>
    var slideIndexe = 0;
    showDives();
    
    function showDives() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var y = document.getElementsByClassName("demo");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      slideIndexe++;
      if (slideIndexe > x.length) {slideIndexe = 1}    
      for (i = 0; i < y.length; i++) {
        y[i].className = y[i].className.replace(" w3-white", "");
      }
      x[slideIndexe-1].style.display = "block";  
      y[slideIndexe-1].className += "  w3-white";
      setTimeout(showDives, 4000); // Change image every 4 seconds
    }
  </script>
   
  <!-- CAROUSEL --> 
  <script>
      jQuery(function ($) {
        $.fn.gScrollingCarousel = function (amount) {
            var supportsTouch = false;
            if (!supportsTouch){
                element = $(this);
                amount = amount || element.children(":first").outerWidth(true);
                var x,left,down,newX,oldX,maxScrollLeft,am,amX,amL,leftElem,rightElem,currx,items,element,elements;
                leftElem = $('<span />').addClass('jc-left').html('<svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg>');
                rightElem = $('<span />').addClass('jc-right').html('<svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path></svg>');
                element.parent().append(leftElem).append(rightElem);
                rightElem.bind("click", function(e){
                  leftElem.fadeIn(200);
                  items = $(this).siblings(".items");
                  currx = items.scrollLeft();
                  amX = parseInt($(this).parent().width() / amount); // cantidad de elementos x viewport
                  am = (amX * amount) - amount;
                  maxScrollLeft = items.get(0).scrollWidth - items.get(0).clientWidth;
                  //if(currx+am >= maxScrollLeft) $(this).fadeOut(200);
                  items.animate( { scrollLeft: '+='+am }, 200);
                });
                leftElem.bind("click", function(e){
                  rightElem.fadeIn(200);
                  items = $(this).siblings(".items");
                  currx = items.scrollLeft();
                  amX = parseInt($(this).parent().width() / amount); // cantidad de elementos x viewport
                  am = (amX * amount) - amount;
                  //if(currx-am <= 0) $(this).fadeOut(200);
                  items.animate( { scrollLeft: '-='+am }, 200);
                });
                $(window).on('resize', function(){
                    element.each( function(){
                        elements = $(this);
                        maxScrollLeft = elements.get(0).scrollWidth - elements.get(0).clientWidth;
                        left = elements.scrollLeft();
                        if(maxScrollLeft == left) {
                            rightElem.fadeOut(200);
                        } else {
                            rightElem.fadeIn(200);
                        }
                        if(left == 0) {
                            leftElem.fadeOut(200);
                        } else {
                            leftElem.fadeIn(200);
                        }
                    });
                });
                $(document).on("mouseup mousedown click", ".nonclick a", function(e){  //prevent clicking while moving
                  e.preventDefault();
                });
                $(document).on("mouseup", function(e){ //globally remove nonclicks onmouseup
                    setTimeout(function(){
                        element.removeClass("nonclick");
                        down=false;
                    },1);
                });
            }
        }
    });
   </script>

  <script>
    $(document).ready(function(){
      $(".g-scrolling-carousel .items-1").gScrollingCarousel();
      $(".g-scrolling-carousel .items-2").gScrollingCarousel();
      $(".g-scrolling-carousel .items-3").gScrollingCarousel();
    });
  </script>

  <!-- Change Color Based on Time --> 
  <script>
    function updateBackground() {
    var 
      hr = (new Date()).getHours(),
      body = document.body,
      bstyle = body.style,
      headertopstyle = document.querySelector('.social-top'),
      headerstyle = document.querySelector('.main-header'),
      headerspacestyle = document.querySelector('.header-space'),
      footer = document.querySelector('.main-footer');
      
    if (hr < 10) {
      bstyle.backgroundColor = '#FFFFFF';
      headertopstyle.style.backgroundColor = '#FFFFFF';
      headerstyle.style.backgroundColor = '#EBEBEB';
      headerspacestyle.style.backgroundColor = '#FFFFFF';
      bstyle.color = '#000000';
      document.querySelectorAll("presentation-category").forEach(function(element) { element.style.color = '#313131'; });
      document.querySelectorAll('.social-icons-btn').forEach(function(element) { element.style.backgroundColor = '#D2D2D2'; });
      document.getElementById("st0").style.stroke = '#000000';
      document.getElementById("st1").style.stroke = '#000000';
    } else if (hr > 10 && hr < 19) {
      bstyle.backgroundColor = '#FFFFFF';
      headertopstyle.style.backgroundColor = '#FFFFFF';
      headerstyle.style.backgroundColor = '#EBEBEB';
      headerspacestyle.style.backgroundColor = '#FFFFFF';
      bstyle.color = '#000000';
      document.querySelectorAll("presentation-category").forEach(function(element) { element.style.color = '#313131'; });
      document.querySelectorAll('.social-icons-btn').forEach(function(element) { element.style.backgroundColor = '#D2D2D2'; });
      document.getElementById("st0").style.stroke = '#000000';
      document.getElementById("st1").style.stroke = '#000000';

    } else {
      bstyle.backgroundColor = '#0E0E0E';
      headertopstyle.style.backgroundColor = '#000000';
      headerstyle.style.backgroundColor = '#000000';
      headerspacestyle.style.backgroundColor = '#0E0E0E';
      footer.style.backgroundColor = '#000000';
      bstyle.color = '#FFFFFF';
      document.querySelectorAll(".presentation-category").forEach(function(element) { element.style.color = '#FFFFFF'; });
      document.querySelectorAll('.social-icons-btn').forEach(function(element) { element.style.backgroundColor = '#1A1A1A'; });
      document.getElementById("st0").style.stroke = '#505050';
      document.getElementById("st1").style.stroke = '#505050';
    } 
  }

    setInterval(updateBackground, 1000 * 60);
    updateBackground();
  </script>

  <!-- Modal JS --> 
  <script>
    const openEls = document.querySelectorAll("[data-open]");
    const closeEls = document.querySelectorAll("[data-close]");
    const isVisible = "is-visible";

    for (const el of openEls) {
      el.addEventListener("click", function() {
        const modalId = this.dataset.open;
        document.getElementById(modalId).classList.add(isVisible);
      });
    }

    for (const el of closeEls) {
      el.addEventListener("click", function() {
        this.parentElement.parentElement.parentElement.classList.remove(isVisible);
      });
    }

    document.addEventListener("click", e => {
      if (e.target == document.querySelector(".modal.is-visible")) {
        document.querySelector(".modal.is-visible").classList.remove(isVisible);
      }
    });

    document.addEventListener("keyup", e => {
      // if we press the ESC
      if (e.key == "Escape" && document.querySelector(".modal.is-visible")) {
        document.querySelector(".modal.is-visible").classList.remove(isVisible);
      }
    });
  </script>

  <!-- Add NAV LINK ACTIVE CLASS FOR ACTIVE MENU PAGE -->
  <script>
    $(document).ready(function () {
        var url = window.location.href;
        let me = $('ul.nav-menu li .nav-link');
        $(me).map(function(idx, elem) {
          if(url.includes($(elem).attr("href"))){
            $(elem).addClass("nav-link-active");
          }
        });
      }
    );
  </script>

  <!--Validation Form-->
  <script>
    function validateForm() {
      var x = document.forms["form_search"]["destination"].value;
      if (x == "") {
        alert("Where to?  must be filled out");
        return false;
      }
    }
    </script>
  
</html>
