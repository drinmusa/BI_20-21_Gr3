<!DOCTYPE html>
<html lang="en" manifest="demo.appcache">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
    <title>Imaginative | OFFERS</title>
    <link rel="stylesheet" href="css/offers.css" />
  </head>

  <body>
    <!-- Social icons -->
    <div class="social-top" id="social-top">
      <div class="social-top-content">
        <div class="social-icons">
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-pinterest"></i></a>
          <a href="#"><i class="fab fa-google-plus-g"></i></a>
          <a href="#"><i class="fas fa-rss-square"></i></a>
        </div>
        <div class="social-links">
          <a href="user.php">Sign Up |</a>
          <a href="user.php">Login |</a>
          <a href="#">RSS Feeds |</a>
          <a href="#">Archived News</a>
        </div>
      </div>
      <div class="social-btn">
        <span id="social-btn-expand"
          ><i class="fas fa-minus" id="social-icon"></i
        ></span>
      </div>
    </div>

    <header class="main-header">
      <!-- Navigation menu -->
      <div class="container-fluid">
        <div class="header-top">
          <div class="header-logo">
            <img src="images/logo.png" alt="Logo" />
          </div>
          <div class="header-search">
            <input
              type="text"
              class="search-input"
              name=""
              id="searchBox"
              placeholder="Search Our Website..."
            />
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
      <div class="container">
        <img
          src="images/offers_img/SpecialOffers.jfif"
          alt="SpecialOffers"
          width="100%"
        />
      </div>

      <section>
        <div id="offers-2021" class="container">
          <h1>New Year 2021 Offers</h1>

          <div id="grid-offers">
            <div class="offers">
              <div class="offer-img">
                <img
                  class="offersImg"
                  src="images/offers_img/banff canada.jpg"
                  alt=""
                />
              </div>
              <div class="offer-title">
                <h3>Banff,Canada</h3>
              </div>
            </div>

            <div class="offers">
              <div class="offer-img">
                <img
                  class="offersImg"
                  src="images/offers_img/bavaria,Germany.jpg"
                  alt=""
                />
              </div>
              <div class="offer-title">
                <h3>Bavaria Germany</h3>
              </div>
            </div>

            <div class="offers">
              <div class="offer-img">
                <img
                  class="offersImg"
                  src="images/offers_img/holland-peak-ranch-1574711041.jpg"
                  alt=""
                />
              </div>
              <div class="offer-title">
                <h3>Holland Peak Ranch</h3>
              </div>
            </div>

            <div class="offers">
              <div class="offer-img">
                <img
                  class="offersImg"
                  src="images/offers_img/saariselka, finland.jpg"
                  alt=""
                />
              </div>
              <div class="offer-title">
                <h3>Saariselka, Finland</h3>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="container">
        <div id="offer-message">
          <div id="img">
            <img src="images/offers_img/Offers.png" alt="Foto" width="100%" />
          </div>
          <div id="message">
            <p><strong>New Offers Coming Soon....</strong></p>
          </div>
        </div>
      </div>
    </main>

    <footer class="main-footer">
      <div class="container">
        Copyright &copy; 2020 - All rights reserved - Imaginative
      </div>
    </footer>
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script src="./js/offers.js"></script>
  </body>
</html>
