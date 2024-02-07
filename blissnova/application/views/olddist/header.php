<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="../../css2?family=Inter:wght@300;400;500;600;700;800;900&family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?=BASEURL?>assets/web/css/vendors.css">
  <link rel="stylesheet" href="<?=BASEURL?>assets/web/css/main.css">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?=BASEURL?>assets/web/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?=BASEURL?>assets/web/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?=BASEURL?>assets/web/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?=BASEURL?>assets/web/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?=BASEURL?>assets/web/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?=BASEURL?>assets/web/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?=BASEURL?>assets/web/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?=BASEURL?>assets/web/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?=BASEURL?>assets/web/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?=BASEURL?>assets/web/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?=BASEURL?>assets/web/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?=BASEURL?>assets/web/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?=BASEURL?>assets/web/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?=BASEURL?>assets/web/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?=BASEURL?>assets/web/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <title>Blisser</title>
</head>

<body class="preloader-visible" data-barba="wrapper">


  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>

    <div class="preloader__progress">
      <div class="preloader__progress__inner"></div>
      <img src="<?=BASEURL?>assets/web/img/general/loader.svg" alt="preloader image" class="preloader__img">
    </div>
  </div>
  <!-- preloader end -->


  <!-- cursor start -->
  <div class="cursor js-cursor">
    <div class="cursor__wrapper">
      <div class="cursor__follower js-follower"></div>
      <div class="cursor__label js-label"></div>
      <div class="cursor__icon js-icon"></div>
    </div>
  </div>
  <!-- cursor end -->


  <!-- barba container start -->
  <div class="barba-container" data-barba="container">

    <!-- to-top-button start -->
    <div data-cursor="" class="backButton js-backButton">
      <span class="backButton__bg"></span>
      <div class="backButton__icon__wrap">
        <i class="backButton__button js-top-button" data-feather="arrow-up"></i>
      </div>
    </div>
    <!-- to-top-button end -->


    <main class="">


      <!-- header start -->
      <header class="header -dark -sticky-light js-header-light js-header">
        <!-- header__bar start -->
        <div class="header__bar">
          <div class="header__logo js-header-logo">
            <a data-barba="" href="home-1.html">
              <!--<img class="header__logo__light js-lazy" src="#" data-src="<?=BASEURL?>assets/web/img/logo/logo-light.png" alt="Logo">-->
            </a>
            <a data-barba="" href="home-1.html">
              <!--<img class="header__logo__dark js-lazy" src="#" data-src="<?=BASEURL?>assets/web/img/logo/logo-dark.png" alt="Logo">-->
            </a>
          </div>

          <div class="header__menu js-header-menu">
            <button type="button" class="nav-button-open js-nav-open">
              <i class="icon" data-feather="menu"></i>
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
        <!-- header__bar end -->


        <!-- nav start -->
        <nav class="nav js-nav">
          <div class="nav__inner js-nav-inner">
            <div class="nav__bg js-nav-bg"></div>

            <div class="nav__container">
              <div class="nav__header">
                <button type="button" class="nav-button-back js-nav-back">
                  <i class="icon" data-feather="arrow-left-circle"></i>
                </button>

                <button type="button" class="nav-btn-close js-nav-close pointer-events-none">
                  <i class="icon" data-feather="x"></i>
                </button>
              </div>

              <div class="nav__content">
                <div class="nav__content__left">
                  <div class="navList__wrap">
                    <ul class="navList js-navList">
                      <li>
                        <a data-barba="" href="home-1-classic.html">
                          Classic Menu
                        </a>
                      </li>

                      <li class="menu-item-has-children">
                        <a>Main Pages</a>

                        <ul class="subnav-list">
                          <li>
                            <a data-barba="" href="home-1.html">Main Slider</a>
                          </li>
                          <li>
                            <a data-barba="" href="home-2.html">Main Dark</a>
                          </li>
                          <li>
                            <a data-barba="" href="home-3.html">Simple Slider</a>
                          </li>
                          <li>
                            <a data-barba="" href="home-4.html">Bold Light</a>
                          </li>
                          <li>
                            <a data-barba="" href="home-5.html">Static Header Dark</a>
                          </li>
                          <li>
                            <a data-barba="" href="home-6.html">Personal</a>
                          </li>
                          <li>
                            <a data-barba="" href="projectSlider-1.html">Project Slider</a>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item-has-children">
                        <a>Inner Pages</a>

                        <ul class="subnav-list">
                          <li class="menu-item-has-children">
                            <a>About</a>

                            <ul class="subnav-list">
                              <li>
                                <a data-barba="" href="about-1.html">About 1</a>
                              </li>
                              <li>
                                <a data-barba="" href="about-2.html">About 2</a>
                              </li>
                            </ul>
                          </li>

                          <li class="menu-item-has-children">
                            <a>Services</a>

                            <ul class="subnav-list">
                              <li>
                                <a data-barba="" href="services-1.html">Services 1</a>
                              </li>
                              <li>
                                <a data-barba="" href="services-2.html">Services 2</a>
                              </li>
                            </ul>
                          </li>

                          <li class="menu-item-has-children">
                            <a>404</a>

                            <ul class="subnav-list">
                              <li>
                                <a data-barba="" href="404-light.html">404 Light</a>
                              </li>
                              <li>
                                <a data-barba="" href="404-dark.html">404 Dark</a>
                              </li>
                            </ul>
                          </li>

                          <li class="menu-item-has-children">
                            <a>Contact</a>

                            <ul class="subnav-list">
                              <li>
                                <a data-barba="" href="contact-1.html">Contact 1</a>
                              </li>
                              <li>
                                <a data-barba="" href="contact-2.html">Contact 2</a>
                              </li>
                            </ul>
                          </li>

                          <li>
                            <a data-barba="" href="team.html">Team</a>
                          </li>
                          <li>
                            <a data-barba="" href="pricing.html">Pricing Plans</a>
                          </li>
                          <li>
                            <a data-barba="" href="clients.html">Clients</a>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item-has-children">
                        <a>Portfolio</a>

                        <ul class="subnav-list">
                          <li>
                            <a data-barba="" href="vertical-projects.html">Vertical Projects</a>
                          </li>
                          <li>
                            <a data-barba="" href="grid-simple-2-col.html">Simple 2 Columns</a>
                          </li>
                          <li>
                            <a data-barba="" href="grid-masonry-2-col.html">Masonry 2 Columns</a>
                          </li>
                          <li>
                            <a data-barba="" href="grid-masonry-3-col.html">Masonry 3 Columns</a>
                          </li>
                          <li>
                            <a data-barba="" href="grid-masonry-4-col.html">Masonry 4 Columns</a>
                          </li>
                          <li>
                            <a data-barba="" href="grid-fancy-2-col.html">Fancy 2 Columns</a>
                          </li>
                          <li>
                            <a data-barba="" href="grid-fancy-3-col.html">Fancy 3 Columns</a>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item-has-children">
                        <a>Works</a>

                        <ul class="subnav-list">
                          <li>
                            <a data-barba="" href="portfolio-single-1.html">Project 1</a>
                          </li>
                          <li>
                            <a data-barba="" href="portfolio-single-2.html">Project 2</a>
                          </li>
                          <li>
                            <a data-barba="" href="portfolio-single-3.html">Project 3</a>
                          </li>
                          <li>
                            <a data-barba="" href="portfolio-single-4.html">Project 4</a>
                          </li>
                          <li>
                            <a data-barba="" href="portfolio-single-5.html">Project 5</a>
                          </li>
                          <li>
                            <a data-barba="" href="portfolio-single-6.html">Project 6</a>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item-has-children">
                        <a>Blog</a>

                        <ul class="subnav-list">
                          <li>
                            <a data-barba="" href="blog-1.html">Blog List</a>
                          </li>
                          <li>
                            <a data-barba="" href="blog-2.html">Blog 2 cols</a>
                          </li>
                          <li>
                            <a data-barba="" href="blog-fancy-3-col.html">Blog Fancy 3 cols</a>
                          </li>
                          <li>
                            <a data-barba="" href="blog-article.html">Blog List Single</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="nav__content__right">
                  <div class="nav__info">
                    <div class="nav__info__item js-navInfo-item">
                      <h5 class="text-sm tracking-none fw-500">
                        Address
                      </h5>

                      <div class="nav__info__content text-lg text-white mt-16">
                        <p>
                          Studio Stukram 1910 Gateway Road, Portland, Oregon 97230
                        </p>
                      </div>
                    </div>

                    <div class="nav__info__item js-navInfo-item">
                      <h5 class="text-sm tracking-none fw-500">
                        Socials
                      </h5>

                      <div class="nav__info__content text-lg text-white mt-16">
                        <a href="#">Behance</a>
                        <a href="#">Dribbble</a>
                        <a href="#">Facebook</a>
                        <a href="#">Twitter</a>
                      </div>
                    </div>

                    <div class="nav__info__item js-navInfo-item">
                      <h5 class="text-sm tracking-none fw-500">
                        Contact Us
                      </h5>

                      <div class="nav__info__content text-lg text-white mt-16">
                        <a href="#">hello@stukram.com</a>
                        <a href="#">+1 202 555 0171</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <!-- nav end -->
      </header>
      <!-- header end -->