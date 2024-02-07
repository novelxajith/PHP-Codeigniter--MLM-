<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Blissnova</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?=BASEURL?>assets/img/logo/fav2.svg" />
   
   
   
  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="../../css2?family=Inter:wght@300;400;500;600;700;800;900&family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?=BASEURL?>web/css/vendors.css">
  <link rel="stylesheet" href="<?=BASEURL?>web/css/main.css">

  <!-- Favicon -->
  <!--<link rel="icon" type="image/png" sizes="192x192" href="<?=BASEURL?>assets/img/logo/fav2.svg">-->
  <!--<link rel="apple-touch-icon" sizes="57x57" href="<?=BASEURL?>web/img/favicon/apple-icon-57x57.png">-->
  <!--<link rel="apple-touch-icon" sizes="60x60" href="<?=BASEURL?>web/img/favicon/apple-icon-60x60.png">-->
  <!--<link rel="apple-touch-icon" sizes="72x72" href="<?=BASEURL?>web/img/favicon/apple-icon-72x72.png">-->
  <!--<link rel="apple-touch-icon" sizes="76x76" href="<?=BASEURL?>web/img/favicon/apple-icon-76x76.png">-->
  <!--<link rel="apple-touch-icon" sizes="114x114" href="<?=BASEURL?>web/img/favicon/apple-icon-114x114.png">-->
  <!--<link rel="apple-touch-icon" sizes="120x120" href="<?=BASEURL?>web/img/favicon/apple-icon-120x120.png">-->
  <!--<link rel="apple-touch-icon" sizes="144x144" href="<?=BASEURL?>web/img/favicon/apple-icon-144x144.png">-->
  <!--<link rel="apple-touch-icon" sizes="152x152" href="<?=BASEURL?>web/img/favicon/apple-icon-152x152.png">-->
  <!--<link rel="apple-touch-icon" sizes="180x180" href="<?=BASEURL?>web/img/favicon/apple-icon-180x180.png">-->
  
  <!--<link rel="icon" type="image/png" sizes="32x32" href="<?=BASEURL?>assets/img/logo/fav2.svg">-->
  <!--<link rel="icon" type="image/png" sizes="96x96" href="<?=BASEURL?>assets/img/logo/fav2.svg">-->
  <!--<link rel="icon" type="image/png" sizes="16x16" href="<?=BASEURL?>assets/img/logo/fav2.svg">-->
  <!--<link rel="manifest" href="<?=BASEURL?>web/img/favicon/manifest.json">-->
  <!--<meta name="msapplication-TileColor" content="#ffffff">-->
  <!--<meta name="msapplication-TileImage" content="<?=BASEURL?>web/img/favicon/ms-icon-144x144.png">-->
  <meta name="theme-color" content="#ffffff">


<style>
    .header.-dark .header__logo__light {
    width: 250px;
}
.header.-dark .header__logo__dark {
    width: 250px;
}
</style>


</head>

<body class="preloader-visible" data-barba="wrapper">


  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>

    <div class="preloader__progress">
      <div class="preloader__progress__inner"></div>
      <img src="<?=BASEURL?>web/img/general/loader.svg" alt="preloader image" class="preloader__img">
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
              <img class="header__logo__light js-lazy" src="#" data-src="<?=BASEURL?>web/img/logo/logo-light.png" alt="Logo">
            </a>
            <a data-barba="" href="home-1.html">
              <img class="header__logo__dark js-lazy" src="#" data-src="<?=BASEURL?>web/img/logo/logo-dark.png" alt="Logo">
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
                        <a data-barba="" href="<?=BASEURL?>dist/index">
                          Home
                        </a>
                      </li>

                       <li>
                        <a data-barba="" href="<?=BASEURL?>dist/directors">
                          Directors
                        </a>
                      </li>
                      
                        <li>
                        <a data-barba="" href="<?=BASEURL?>dist/about_us">
                          About Us
                        </a>
                      </li>
                      
                        <li>
                        <a data-barba="" href="<?=BASEURL?>dist/agencies">
                          Agencies
                        </a>
                      </li>
                      
                        <li>
                        <a data-barba="" href="<?=BASEURL?>dist/certificates">
                          Certificates
                        </a>
                      </li>
                      
                        <li>
                        <a data-barba="" href="https://blissnova.online/user/index" target="_blank">
                          Affiliate Login
                        </a>
                      </li>


                      <!--<li class="menu-item-has-children">-->
                      <!--  <a>Blog</a>-->

                      <!--  <ul class="subnav-list">-->
                      <!--    <li>-->
                      <!--      <a data-barba="" href="blog-1.html">Blog List</a>-->
                      <!--    </li>-->
                      <!--    <li>-->
                      <!--      <a data-barba="" href="blog-2.html">Blog 2 cols</a>-->
                      <!--    </li>-->
                      <!--    <li>-->
                      <!--      <a data-barba="" href="blog-fancy-3-col.html">Blog Fancy 3 cols</a>-->
                      <!--    </li>-->
                      <!--    <li>-->
                      <!--      <a data-barba="" href="blog-article.html">Blog List Single</a>-->
                      <!--    </li>-->
                      <!--  </ul>-->
                      <!--</li>-->
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
                          BlissNova pvt Ltd,<br>
                          Regd. Office : Door No 1/544,<br>
                          1st floor Royal Bakes Athicode (PO) Kozhinjampara, Palakkad, 678554.
                        </p>
                      </div>
                    </div>

                    <div class="nav__info__item js-navInfo-item">
                      <h5 class="text-sm tracking-none fw-500">
                        Socials
                      </h5>

                      <div class="nav__info__content text-lg text-white mt-16">
                        <a href="https://www.facebook.com/people/BlissNova/100093071779903/?mibextid=ZbWKwL">Facebbok</a>
                        <a href="https://twitter.com/BlissNovaOnline?t=w4zZbaUKxqbym6-UDNAfhQ&s=09">Twitter</a>
                        <a href="https://www.youtube.com/@BlissNovaOnline">Youtube</a>
                        <a href="https://www.instagram.com/blissnovaonline/?igshid=MzRlODBiNWFlZA">Instagram</a>
                         <a href="https://t.me/BlissNovaOnline">Telegram</a>
                      </div>
                    </div>

                    <div class="nav__info__item js-navInfo-item">
                      <h5 class="text-sm tracking-none fw-500">
                        Contact Us
                      </h5>

                      <div class="nav__info__content text-lg text-white mt-16">
                        <a href="#">bliss@blissnova.online</a>
                        <!--<a href="#">+917403398923</a>-->
                        <!--<a href="#">+917012625390</a>-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>sser
          </div>
        </nav>
        <!-- nav end -->
      </header>
      <!-- header end -->