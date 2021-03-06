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
    <link rel="stylesheet" href="./css/index.css" />
    <title>Imaginative | HOME</title>
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
      <!-- Slide show  -->
      <section id="slide-show">
        <div class="container">
          <div class="slide-container">
            <div class="content">
              <div class="images">
                <img
                  class="slide-image"
                  src="./images/home_img/slideshow-img/slide1.jpg"
                />
                <img
                  class="slide-image"
                  src="./images/home_img/slideshow-img/slide2.jpg"
                />
                <img
                  class="slide-image"
                  src="./images/home_img/slideshow-img/slide3.jpg"
                />
                <img
                  class="slide-image"
                  src="./images/home_img/slideshow-img/slide4.jpg"
                />
                <img
                  class="slide-image"
                  src="./images/home_img/slideshow-img/slide5.jpg"
                />
              </div>
              <div class="btm-slides">
                <span onclick="btm_slide(1)"></span>
                <span onclick="btm_slide(2)"></span>
                <span onclick="btm_slide(3)"></span>
                <span onclick="btm_slide(4)"></span>
                <span onclick="btm_slide(5)"></span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Review from Clients Start-->
      <section>
        <div class="container" id="clientsReviews">
          <div class="title">
            <h2 id="reviews"><span>Reviews</span></h2>
          </div>
          <div class="row">
            <div class="review">
              <div class="reviewer-profile">
                <img
                  class="user"
                  src="./images/home_img/clients-img/client1.png"
                  height="64"
                  width="64"
                  alt="img"
                />
              </div>
              <div class="review-content">
                <p class="reviewer-name">Malcolm Newton</p>

                <p class="review-text">
                  The trip was amazing, my sister and I had an unparalleled
                  experience in Italy.
                </p>
              </div>
            </div>
            <div class="review">
              <div class="reviewer-profile">
                <img
                  class="user"
                  src="./images/home_img/clients-img/client2.png"
                  height="64"
                  width="64"
                  alt="img"
                />
              </div>
              <div class="review-content">
                <p class="reviewer-name">Leona Stone</p>

                <p class="review-text">
                  This was a trip of a lifetime. We had a wonderful time for 6
                  weeks in New Zealand and Australia.
                </p>
              </div>
            </div>
            <div class="review">
              <div class="reviewer-profile">
                <img
                  class="user"
                  src="./images/home_img/clients-img/client3.png"
                  height="64"
                  width="64"
                  alt="img"
                />
              </div>
              <div class="review-content">
                <p class="reviewer-name">Stacey Floyd</p>

                <p class="review-text">
                  Our travel planner was so helpful in planning our family's
                  trip to Belize for Spring Break 2020
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="review">
              <div class="reviewer-profile">
                <img
                  class="user"
                  src="./images/home_img/clients-img/client4.png"
                  height="64"
                  width="64"
                  alt="img"
                />
              </div>
              <div class="review-content">
                <p class="reviewer-name">Craig Ford</p>

                <p class="review-text">
                  Our travel planner and his staff carefully planned a trip for
                  us.The very best in my life.
                </p>
              </div>
            </div>
            <div class="review">
              <div class="reviewer-profile">
                <img
                  class="user"
                  src="./images/home_img/clients-img/client5.png"
                  height="64"
                  width="64"
                  alt="img"
                />
              </div>
              <div class="review-content">
                <p class="reviewer-name">Daniel Hill</p>

                <p class="review-text">
                  The trip and this travel company exceded our expectations!!
                  From pick-up to flight out of Serengeti.
                </p>
              </div>
            </div>
            <div class="review">
              <div class="reviewer-profile">
                <img
                  class="user"
                  src="./images/home_img/clients-img/client6.png"
                  height="64"
                  width="64"
                  alt="img"
                />
              </div>
              <div class="review-content">
                <p class="reviewer-name">Stella Brown</p>

                <p class="review-text">
                  My trip planner at this tour agency provided superb service.
                  My trip was an exploration of Australia.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      -->
      <!--Review from Clients End-->
      <!-- Magazine - CEO start -->

      <section>
        <div class="container" id="project">
          <div class="row">
            <div class="col">
              <div class="col-title">
                <h2 class="project-title">
                  <span class="title-space">Magazine Travel</span>
                </h2>
              </div>
              <div class="col-body">
                <div class="content-img">
                  <img
                    src="./images/home_img/magazine-img/magazine.jpg"
                    id="magazine-img"
                    alt="Magazine"
                  />
                </div>
                <div class="content-text">
                  <h3>Travel Magazine</h3>
                  <p>
                    Our company was chosen as the best company for 2020 by
                    Travel magazine and was featured on their front page as
                    people's choice. It was great being able to fulfill people's
                    needs during pandemic.
                  </p>
                  <a href="#" id="read-more">Read More &raquo;</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="col-title">
                <h2 class="project-title">
                  <span class="title-space">Project Imaginative </span>
                </h2>
              </div>
              <div class="column">
                <div class="content-top">
                  <i class="fas fa-quote-left"></i>
                  <p>
                    Tommy Tanker - CEO <br />
                    <span class="purple color">View this project &raquo;</span>
                  </p>
                </div>
                <div class="content-body">
                  <p class="project-desc">
                    Imaginative started as a small travel agency and here we are
                    today.But starting next year we are planning in expanding
                    our business in catering and other catering related services
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Magazine - CEO End-->
      <section>
        <!--Banner section start-->
        <div class="container">
          <div class="row">
            <div id="banner">
              <div id="banner-text">
                <h2>Got a question for us ?</h2>
                <p>
                  Contact us at any time for anything regarding traveling,
                  tours,guides etc.
                </p>
              </div>
              <div id="banner-button">
                <button id="contact-button">CONTACT US TODAY</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Banner section end-->
    </main>
    <aside>
      <!-- Blog posts, company details, contact form Start-->
      <div id="lastSection">
        <div id="blogPosts">
          <div id="posts">
            <h3 class="blog-title">Latest From The Blog</h3>
            <div class="post" id="post1">
              <div class="post-image">
                <img
                  src="./images/home_img/posts-img/post1.jpg"
                  width="95"
                  height="95"
                  alt="Post Image"
                />
              </div>
              <div class="post-content">
                <p class="post-title">Traveling during COVID - 19</p>
                <p class="post-content">
                  Traveling during pandemic times is hard that's why we keep you
                  up to date with the newest regulations, keep checking our blog
                  posts.
                </p>
              </div>
            </div>
            <div class="post" id="post2">
              <div class="post-image">
                <img
                  src="./images/home_img/posts-img/post2.jpg"
                  width="95"
                  height="95"
                  alt="Post Image"
                />
              </div>
              <div class="post-content">
                <p class="post-title">
                  Tips for safe traveling during COVID - 19
                </p>
                <p class="post-body">
                  Maintain a distance of 2 meters between you and others as much
                  as possible, use hand sanitizer or wash your hands.Wear a face
                  mask.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div id="companyDetails">
          <h3 class="details-title">Company details</h3>
          <div id="info">
            <p>Imaginative</p>
            <p>Rruga Nena Tereze 12</p>
            <p>Prishtine</p>
            <p>10000</p>
          </div>
          <div id="contact">
            <p>Tel: 00383 - 45 123 123</p>
            <p>Fax: 012365422</p>
            <p>Email:<span class="color">contact@imaginative.com</span></p>
          </div>
          <div id="schedule">
            <p class="schedule-title"><strong>Office Hours</strong></p>
            <p>Monday - Friday: 08:00 - 17:30</p>
            <p>Saturday: 08:00 - 13:00</p>
          </div>
        </div>
        <div id="contactForm">
          <form action="./mail.php" method="post" id="firstForm">
            <h3 class="contact-form-title">Contact Us</h3>
            <input type="text" name="name" id="name" placeholder="Name" />
            <input type="email" name="email" id="email" placeholder="Email" />
            <textarea
              name="message"
              id="message"
              cols="30"
              rows="8"
              placeholder="Message"
            ></textarea>

            <button id="sendMessage">Submit</button>
          </form>
        </div>
      </div>
    </aside>

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
    <script src="./js/index.js"></script>
  </body>
</html>
