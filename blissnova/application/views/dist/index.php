
<?php include 'header.php';?>
<style>
    .sectionHeading.-md .sectionHeading__title.being {
  
    font-size: 2.5rem;
}
.mt-3 {
    margin-top: 50px;
}
.mt-3{
  position: relative;
  padding: 20px 50px;
  display: block;
  text-decoration: none;
  text-transform: uppercase;
  width: 200px;
  overflow: hidden;
  border-radius: 40px;
}

.mt-3 span {
  position: relative;
  color: #fff;
  fot-size: 20px;
  font-family: Arial;
  letter-spacing: 8px;
  z-index: 1;
}

.mt-3 .liquid {
    position: absolute;
    top: -80px;
    left: 0;
    width: 200px;
    height: 200px;
    background: #ff002e;
    box-shadow: inset 0 0 50px rgba(0, 0, 0, .5);
    transition: .5s;
}

.mt-3 .liquid::after,
.mt-3 .liquid::before {
  content: '';
  width: 200%;
  height: 200%;
  position: absolute;
  top: 0;
  left: 50%;
  transform: translate(-50%, -75%);
  background: #000;
}

.mt-3 .liquid::before {
  
  border-radius: 45%;
  background: rgba(20, 20, 20, 1);
  animation: animate 5s linear infinite;
}

.mt-3.liquid::after {
  
  border-radius: 40%;
  background: rgba(20, 20, 20, .5);
  animation: animate 10s linear infinite;
}

.mt-3:hover .liquid{
  top: -120px;
}

@keyframes animate {
  0% {
    transform: translate(-50%, -75%) rotate(0deg);
  }
  100% {
    transform: translate(-50%, -75%) rotate(360deg);
  }
}

 .video-container {
        position: relative;
        width: 100vw;
        height: 100vh;
        overflow: hidden;
    }

  .video-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    object-fit: fill;
}
       #left-right-swiper{
        display:none !important;
    }
    
    /*Video CSS*/
    @media screen and (max-width:767px){
        #mobile-screen-video{
            display:block !important;
        }
        #desktop-screen-video{
            display:none !important;
        }
    }
    @media screen and (min-width:768px){
        #mobile-screen-video{
            display:none !important;
        }
        #desktop-screen-video{
            display:block !important;
        }
    }
    
    .projects .award{
        min-height: 194px;
        background-color: black;
        color: white;
        padding: 8px;
        border-radius: 10px;
    }
    
    .bg-image.js-lazy.error{
        background-image:url('<?=BASEURL?>assets/images/success.png') !important;
    }
    
    .blissful.bg-image.js-lazy.error{
        background-image:url('<?=BASEURL?>assets/images/success.png') !important;
    }
    .bg-image.js-lazy.gallery-1.error{
        background-image:url('<?=BASEURL?>assets/images/gallery-1.jpg') !important;
    }
     .bg-image.js-lazy.gallery-2.error{
        background-image:url('<?=BASEURL?>assets/images/gallery-2.jpg') !important;
    }
     .bg-image.js-lazy.gallery-3.error{
        background-image:url('<?=BASEURL?>assets/images/gallery-3.jpg') !important;
    }
     .bg-image.js-lazy.gallery-4.error{
        background-image:url('<?=BASEURL?>assets/images/gallery-4.jpg') !important;
    }
     .bg-image.js-lazy.gallery-5.error{
        background-image:url('<?=BASEURL?>assets/images/gallery-5.jpg') !important;
    }
     .bg-image.js-lazy.gallery-6.error{
        background-image:url('<?=BASEURL?>assets/images/gallery-6.jpg') !important;
    }
     .bg-image.js-lazy.vertical-1.error{
        background-image:url('<?=BASEURL?>assets/images/vertical-1.jpg') !important;
    }
     .bg-image.js-lazy.vertical-2.error{
        background-image:url('<?=BASEURL?>assets/images/vertical-2.jpg') !important;
    }
      .bg-image.js-lazy.horizontal-1.error{
        background-image:url('<?=BASEURL?>assets/images/horizontal-1.jpg') !important;
    }
    .header.-dark .header__logo__light {
    display: none !important;
}
    
</style>


      <!-- section start -->
      <section class="sliderMain -type-1 bg-black js-sliderMain-type-1">
        <!-- swiper-wrapper start -->
        <div class="swiper-wrapper">
            
            <div id="mobile-screen-video" class="video-container">
                <video class="video-background" autoplay loop muted playsinline>
                    <source src="<?=BASEURL?>assets/video/Bliss.mp4" type="video/mp4">
                </video>
                <!-- Your content goes here -->
            </div>
            
             <div id="desktop-screen-video" class="video-container">
                <video class="video-background" autoplay loop muted playsinline>
                    <source src="<?=BASEURL?>assets/video/Bliss-Desk.mp4" type="video/mp4">
                </video>
                <!-- Your content goes here -->
            </div>


        </div>
        <!-- swiper-wrapper end -->

        

        <!-- ui-element start -->
        <div class="ui-element -bottom sm:d-none js-ui">
          <button type="button" class="ui-element__scroll text-white js-ui-scroll-button">
            Scroll down
            <i class="icon" data-feather="arrow-down"></i>
          </button>
        </div>
        <!-- ui-element end -->

        <!-- ui-element start -->
        <div id="left-right-swiper" class="ui-element -bottom-right sm:d-none js-ui js-slider-nav">
          <div class="navButton js-slider-main-nav">
            <button type="button" class="navButton__item button -outline-white js-prev text-white">
              <i class="icon" data-feather="arrow-left"></i>
            </button>

            <button type="button" class="navButton__item button -outline-white js-next text-white ml-20">
              <i class="icon" data-feather="arrow-right"></i>
            </button>
          </div>
        </div>
        <!-- ui-element end -->
      </section>
      <!-- section end -->


      <!-- section start -->
      <section class="layout-pt-xl layout-pb-xl">
        <!-- container start -->
        <div class="container">

          <!-- row start -->
          <div class="row">
            <div class="col-xl-5 col-lg-8 col-md-10">
              <div class="sectionHeading -lg">
                <p class="sectionHeading__subtitle">
                  company
                </p>
                <h2 class="sectionHeading__title">
                  Make it simple but significant
                </h2>
              </div>
            </div>
          </div>
          <!-- row end -->


          <!-- row start -->
          <div class="row x-gap-60 y-gap-48 layout-pt-md">
            <div class="col-lg-6 col-md-6">
              <div class="">
                <h4 class="text-xl fw-600">
                   Mission
                </h4>
                <p class="mt-16">
                 "BlissNova is dedicated to enhancing the quality of life and fostering happiness in the communities we serve globally. Our commitment to Leadership with Trust drives us to create lasting value through unwavering dedication."

                </p>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="">
                <h4 class="text-xl fw-600">
                 Vision
                </h4>
                <p class="mt-16">
                 "To be recognized as a globally esteemed and responsible enterprise, leveraging technology, innovation, and sustainability to drive prosperity, while promoting happiness and progress for all."
                </p>
              </div>
            </div>

            <!--<div class="col-lg-12 col-md-6">-->
            <!--  <div class="">-->
            <!--    <h4 class="text-xl fw-600">-->
            <!--      Exibitions-->
            <!--    </h4>-->
            <!--    <p class="mt-16">-->
            <!--      Seen from a distance, tint, but on coming closer we to myriads of huge lichens found this was due of a deep crimson and orange, and that the natural colours of the rock, vermilion and blue, lemon.-->
            <!--    </p>-->
            <!--  </div>-->
            <!--</div>-->
          </div>
          <!-- row end -->

        </div>
        <!-- container end -->
      </section>
      <!-- section end -->


      <!-- section start -->
      <section>
        <div class="masonry -col-4 js-masonry js-masonry-no-filter">
          <div class="masonry__sizer"></div>

          <div class="masonry__item  -big">
            <div class="portfolioCard -type-2 -hover ratio">
              <div class="portfolioCard__img">
                <div data-anim="img-right cover-dark-1 delay-1" class="portfolioCard__img__inner">
                  <div class="bg-image js-lazy gallery-1" data-bg="<?=BASEURL?>assets/images/gallery-1.jpg"></div>
                </div>
              </div>

              <div class="portfolioCard__content">
                <a href="#" class="portfolioCard__category text-light mb-8">Blissnova</a>
                <h3 class="portfolioCard__title text-2xl fw-600 text-white">Ecommerce</h3>
              </div>

              <a data-barba="" href="portfolio-single-2.html" class="portfolioCard__link"></a>
            </div>
          </div>

          <div class="masonry__item  -wide">
            <div class="portfolioCard -type-2 -hover ratio">
              <div class="portfolioCard__img">
                <div data-anim="img-right cover-dark-1 delay-1" class="portfolioCard__img__inner">
                  <div class="bg-image js-lazy gallery-2" data-bg="<?=BASEURL?>assets/web/img/projects/horizontal/1.jpg"></div>
                </div>
              </div>

              <div class="portfolioCard__content">
                <a href="#" class="portfolioCard__category text-light mb-8">Blissnova</a>
                <h3 class="portfolioCard__title text-2xl fw-600 text-white">Single Platform & User Friendly Interface</h3>
              </div>

              <a data-barba="" href="portfolio-single-1.html" class="portfolioCard__link"></a>
            </div>
          </div>

          <div class="masonry__item  -long">
            <div class="portfolioCard -type-2 -hover ratio">
              <div class="portfolioCard__img">
                <div data-anim="img-right cover-dark-1 delay-1" class="portfolioCard__img__inner">
                  <div class="bg-image js-lazy vertical-1" data-bg="<?=BASEURL?>assets/images/vertical-1.jpg"></div>
                </div>
              </div>

              <div class="portfolioCard__content">
                <a href="#" class="portfolioCard__category text-light mb-8">Blissnova</a>
                <h3 class="portfolioCard__title text-2xl fw-600 text-white">Prime</h3>
              </div>

              <a data-barba="" href="portfolio-single-4.html" class="portfolioCard__link"></a>
            </div>
          </div>

          <div class="masonry__item ">
            <div class="portfolioCard -type-2 -hover ratio">
              <div class="portfolioCard__img">
                <div data-anim="img-right cover-dark-1 delay-1" class="portfolioCard__img__inner">
                  <div class="bg-image js-lazy gallery-3" data-bg="<?=BASEURL?>assets/web/img/projects/square/3.jpg"></div>
                </div>
              </div>

              <div class="portfolioCard__content">
                <a href="#" class="portfolioCard__category text-light mb-8">Blissnova</a>
                <h3 class="portfolioCard__title text-2xl fw-600 text-white">Get Succeeded</h3>
              </div>

              <a data-barba="" href="portfolio-single-3.html" class="portfolioCard__link"></a>
            </div>
          </div>

          <div class="masonry__item  -long">
            <div class="portfolioCard -type-2 -hover ratio">
              <div class="portfolioCard__img">
                <div data-anim="img-right cover-dark-1 delay-1" class="portfolioCard__img__inner">
                  <div class="bg-image js-lazy vertical-2" data-bg="<?=BASEURL?>assets/web/img/projects/vertical/7.jpg"></div>
                </div>
              </div>

              <div class="portfolioCard__content">
                <a href="#" class="portfolioCard__category text-light mb-8">Blissnova</a>
                <h3 class="portfolioCard__title text-2xl fw-600 text-white">Plus</h3>
              </div>

              <a data-barba="" href="portfolio-single-1.html" class="portfolioCard__link"></a>
            </div>
          </div>

          <div class="masonry__item ">
            <div class="portfolioCard -type-2 -hover ratio">
              <div class="portfolioCard__img">
                <div data-anim="img-right cover-dark-1 delay-1" class="portfolioCard__img__inner">
                  <div class="bg-image js-lazy gallery-5" data-bg="<?=BASEURL?>assets/web/img/projects/square/8.jpg"></div>
                </div>
              </div>

              <div class="portfolioCard__content">
                <a href="#" class="portfolioCard__category text-light mb-8">Blissnova</a>
                <h3 class="portfolioCard__title text-2xl fw-600 text-white">Passive Income</h3>
              </div>

              <a data-barba="" href="portfolio-single-2.html" class="portfolioCard__link"></a>
            </div>
          </div>

          <div class="masonry__item ">
            <div class="portfolioCard -type-2 -hover ratio">
              <div class="portfolioCard__img">
                <div data-anim="img-right cover-dark-1 delay-1" class="portfolioCard__img__inner">
                  <div class="bg-image js-lazy gallery-4" data-bg="<?=BASEURL?>assets/web/img/projects/square/16.jpg"></div>
                </div>
              </div>

              <div class="portfolioCard__content">
                <a href="#" class="portfolioCard__category text-light mb-8">Blissnova</a>
                <h3 class="portfolioCard__title text-2xl fw-600 text-white">Business Growth</h3>
              </div>

              <a data-barba="" href="portfolio-single-6.html" class="portfolioCard__link"></a>
            </div>
          </div>

          <div class="masonry__item  -wide">
            <div class="portfolioCard -type-2 -hover ratio">
              <div class="portfolioCard__img">
                <div data-anim="img-right cover-dark-1 delay-1" class="portfolioCard__img__inner">
                  <div class="bg-image js-lazy horizontal-1" data-bg="<?=BASEURL?>assets/web/img/projects/horizontal/9.jpg"></div>
                </div>
              </div>

              <div class="portfolioCard__content">
                <a href="#" class="portfolioCard__category text-light mb-8">Blissnova</a>
                <h3 class="portfolioCard__title text-2xl fw-600 text-white">App</h3>
              </div>

              <a data-barba="" href="portfolio-single-3.html" class="portfolioCard__link"></a>
            </div>
          </div>

          <div class="masonry__item ">
            <div class="portfolioCard -type-2 -hover ratio">
              <div class="portfolioCard__img">
                <div data-anim="img-right cover-dark-1 delay-1" class="portfolioCard__img__inner">
                  <div class="bg-image js-lazy gallery-6" data-bg="<?=BASEURL?>assets/web/img/projects/square/5.jpg"></div>
                </div>
              </div>

              <div class="portfolioCard__content">
                <a href="#" class="portfolioCard__category text-light mb-8">Blissnova</a>
                <h3 class="portfolioCard__title text-2xl fw-600 text-white">Open Community</h3>
              </div>

              <a data-barba="" href="portfolio-single-5.html" class="portfolioCard__link"></a>
            </div>
          </div>

        </div>
      </section>
      <!-- section end -->


      <!-- section start -->
      <section class="layout-pt-lg layout-pb-lg">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row justify-content-between">

            <div class="col-lg-4 col-md-6 col-sm-8">
              <div class="sectionHeading -md">
                <p class="sectionHeading__subtitle">
                  Services
                </p>
                <h3 class="sectionHeading__title being">
                 Being a Part of BN Community
                </h3>
                <p class="mt-20">
                  Moving you every years beast to be made, fowl whales land seasons air set let.
                </p>
                <a href="<?=BASEURL?>dist/services" class="button -md -outline-black text-black mt-32">
                  Expand
                </a>
              </div>
            </div>


            <div class="col-lg-7">
              <!-- row start -->
              <div class="row x-gap-72 y-gap-72 md:mt-48">

                <div class="col-md-6">
                  <div class="ml-minus-4">
                    <div class="d-flex align-items-center">
                      <div class="px-20 py-20 bg-white shadow-light rounded-full">
                        <img src="<?=BASEURL?>assets/images/equal.svg" style="width:30px;">
                      </div>
                    </div>
                  </div>
                  <h3 class="text-2xl fw-500 mt-32">
                    Equal Business Opportunity
                  </h3>
                  <p class="mt-12">
                    People with any education/economic background can take up the business and succeed.
                  </p>
                  <div class="mt-16">
                    <a data-barba="" href="#" class="button -icon text-black">
                      Know More
                      <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>
                    </a>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="ml-minus-4">
                    <div class="d-flex align-items-center">
                      <div class="px-20 py-20 bg-white shadow-light rounded-full">
                         <img src="<?=BASEURL?>assets/images/personal.svg" style="width:30px;">
                      </div>
                    </div>
                  </div>
                  <h3 class="text-2xl fw-500 mt-32">
                    Personal Development
                  </h3>
                  <p class="mt-12">
                    Fosters personal development forgrowth and fulfillment.
                  </p>
                  <div class="mt-16">
                    <a data-barba="" href="#" class="button -icon text-black">
                      Know More
                      <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>
                    </a>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="ml-minus-4">
                    <div class="d-flex align-items-center">
                      <div class="px-20 py-20 bg-white shadow-light rounded-full">
                         <img src="<?=BASEURL?>assets/images/freedom.svg" style="width:30px;">
                      </div>
                    </div>
                  </div>
                  <h3 class="text-2xl fw-500 mt-32">
                    Freedom & Flexibility
                  </h3>
                  <p class="mt-12">
                    Choose when you want to work, how you want to and from where you want to.
                  </p>
                  <div class="mt-16">
                    <a data-barba="" href="#" class="button -icon text-black">
                      Know More
                      <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>
                    </a>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="ml-minus-4">
                    <div class="d-flex align-items-center">
                      <div class="px-20 py-20 bg-white shadow-light rounded-full">
                       <img src="<?=BASEURL?>assets/images/incentive.svg" style="width:30px;">
                      </div>
                    </div>
                  </div>
                  <h3 class="text-2xl fw-500 mt-32">
                    Incentive & Rewards
                  </h3>
                  <p class="mt-12">
                    By enabling community growth, you can recieve incentives and rewards.
                  </p>
                  <div class="mt-16">
                    <a data-barba="" href="#" class="button -icon text-black">
                      Know More
                      <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>
                    </a>
                  </div>
                </div>
                
                <!--  <div class="col-md-6">-->
                <!--  <div class="ml-minus-4">-->
                <!--    <div class="d-flex align-items-center">-->
                <!--      <div class="px-20 py-20 bg-white shadow-light rounded-full">-->
                <!--        <i class="size-sm str-width-md text-accent" data-feather="briefcase"></i>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--  <h3 class="text-2xl fw-500 mt-32">-->
                <!--    Legacy Business-->
                <!--  </h3>-->
                <!--  <p class="mt-12">-->
                <!--    One you can transfer to your next generation.-->
                <!--  </p>-->
                <!--  <div class="mt-16">-->
                <!--    <a data-barba="" href="#" class="button -icon text-black">-->
                <!--      Know More-->
                <!--      <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>-->
                <!--    </a>-->
                <!--  </div>-->
                <!--</div>-->

              </div>
              <!-- row end -->
            </div>

          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </section>
      <!-- section end -->


      <!-- section start -->
      <section class="layout-pt-lg layout-pb-lg bg-dark-1">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div data-anim-wrap="" class="row align-items-center">

            <div class="col-lg-6 z-1">
              <div data-anim-child="img-right cover-dark-2 delay-2">
                <div class="ratio ratio-3:4" data-parallax="0.7">
                  <div data-parallax-target="" class="blissful bg-image js-lazy" data-bg="<?=BASEURL?>assets/web/img/backgrounds/61.jpg"></div>
                </div>
              </div>
            </div>


            <div class="col-lg-5 offset-lg-1 col-md-9 md:mt-48 z-2">
              <div class="sectionHeading -md pt-16">
                <div data-anim-child="slide-up delay-9">
                  <p class="sectionHeading__subtitle -light">
                    Culture
                  </p>
                </div>
                <div data-anim-child="slide-up delay-10">
                  <h2 class="sectionHeading__title text-white mt-40 md:mt-24">
                   Lead a Blissful Life
                  </h2>
                </div>
                <div data-anim-child="slide-up delay-11">
                  <p class="text-light mt-32 md:mt-20">
                   Step into the extraordinary realm of BlissNova, where unbridled joy and boundless bliss reign supreme! Prepare to unleash the full potential of your life as we unveil the exhilarating path to leading a profoundly blissful and joy-infused existence!
                  </p>
                </div>
                <div data-anim-child="slide-up delay-12">
                  <a href="<?=BASEURL?>dist/realm_of_blissnova" class="button -md -outline-white text-white mt-48 md:mt-32">
                   Expand
                  </a>
                </div>
              </div>
            </div>

          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </section>
      <!-- section end -->


      <!-- section start -->
      <section class="layout-pt-lg layout-pb-lg">
        <!-- container start -->
        <div data-anim-wrap="" class="container">
            

          <!-- row start -->
           <div class="col-lg-4 col-md-6 col-sm-8">
              <div class="sectionHeading -md">
                
                <h3 class="sectionHeading__title being">
                 Upcoming Projects
                </h3>
                <p class="mt-20">
                 We're committed to staying flexible, adaptable, and open to new possibilities, 
                  and we're excited to see what the future holds.
                </p>
                 <a class="mt-3" href="<?=BASEURL?>dist/projects">
  <span>Expand</span>
  <div class="liquid"></div>
</a>
              </div>
            </div>
          <!-- row end -->


          <!-- row start -->
          <div class="row x-gap-60 y-gap-60 layout-pt-md">

        
            
            
            
          
            
            


            <div class="col-lg-4 col-sm-6 projects">
              <div data-anim-child="slide-up delay-5" class="">
                <div class="award__content">
                    <div class="ml-minus-4">
                    <div class="d-flex align-items-center">
                      <div class="px-20 py-20 bg-white shadow-light rounded-full">
                        <img src="<?=BASEURL?>assets/images/socialmedia.svg" style="width:30px;">
                      </div>
                    </div>
                  </div>
                 
                  <h3 class="award__title text-2xl text-accent fw-500 mt-16">
                    Social Media Platform 

                  </h3>
                  <p class="award__text mt-8">
                    Enhancing online connections and experiences.

                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 projects">
              <div data-anim-child="slide-up delay-6" class="">
                <div class="award__content">
                    <div class="ml-minus-4">
                    <div class="d-flex align-items-center">
                      <div class="px-20 py-20 bg-white shadow-light rounded-full">
                        <img src="<?=BASEURL?>assets/images/agri.svg" style="width:30px;">
                      </div>
                    </div>
                  </div>
                  
                  <h3 class="award__title text-2xl text-accent fw-500 mt-16">
                  Agricultural Project 

                  </h3>
                  <p class="award__text mt-8">
                    Darkness wherein day behold cattle were creature. After stars dry appear under third.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 projects">
              <div data-anim-child="slide-up delay-7" class="">
                <div class="award__content">
                    <div class="ml-minus-4">
                    <div class="d-flex align-items-center">
                      <div class="px-20 py-20 bg-white shadow-light rounded-full">
                        <img src="<?=BASEURL?>assets/images/industry.svg" style="width:30px;">
                      </div>
                    </div>
                  </div>
                
                  <h3 class="award__title text-2xl text-accent fw-500 mt-16">
                   Industrial Project

                  </h3>
                  <p class="award__text mt-8">
                  Driving innovation and economic growth.

                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 projects">
              <div data-anim-child="slide-up delay-8" class="">
                <div class="award__content">
                    <div class="ml-minus-4">
                    <div class="d-flex align-items-center">
                      <div class="px-20 py-20 bg-white shadow-light rounded-full">
                        <img src="<?=BASEURL?>assets/images/ai.svg" style="width:30px;">
                      </div>
                    </div>
                  </div>
                
                  <h3 class="award__title text-2xl text-accent fw-500 mt-16">
                   AI Projects

                  </h3>
                  <p class="award__text mt-8">
                    Harnessing AI for efficiency and progress.
                  </p>
                </div>
              </div>
            </div>

          </div>
          <!-- row end -->

             


                </div>
        <!-- container end -->
        

      </section>
      <!-- section end -->


      <!-- section start -->
      <!--<div class="sectionVideo h-lg">-->
      <!--  <div data-parallax="0.7" class="h-full">-->
      <!--    <div data-parallax-target="" class="bg-image js-lazy" data-bg="<?=BASEURL?>assets/web/img/backgrounds/10.jpg"></div>-->
      <!--  </div>-->

        <!-- <a href="https://www.youtube.com/watch?v=ANYfx4-jyqY" data-cursor data-gallery="gallery1" class="sectionVideo__btn bg-white text-black js-video-button glightbox"> -->
      <!--  <a href="https://www.youtube.com/watch?v=ANYfx4-jyqY&ab_channel=KAS%3AST-Topic" data-cursor="" data-gallery="gallery1" class="sectionVideo__btn bg-white text-black js-video-button glightbox">-->
      <!--    <span class="sectionVideo__btn__inner">-->
      <!--      <i class="icon str-width-lg" data-feather="arrow-right"></i>-->
      <!--    </span>-->
      <!--  </a>-->
      <!--</div>-->
      <!-- section end -->


      <!-- section start -->
      <!--<section class="layout-pt-lg layout-pb-lg">-->
        <!-- container start -->
      <!--  <div class="container">-->

          <!-- row start -->
      <!--    <div class="row justify-content-between align-items-end">-->
      <!--      <div class="col-md-6">-->
      <!--        <div class="sectionHeading -md">-->
      <!--          <p class="sectionHeading__subtitle">-->
      <!--            our journal-->
      <!--          </p>-->
      <!--          <h2 class="sectionHeading__title">-->
      <!--            Latest News-->
      <!--          </h2>-->
      <!--        </div>-->
      <!--      </div>-->

      <!--      <div class="col-auto">-->
      <!--        <a href="#" class="button -md -outline-black text-black sm:mt-24">-->
      <!--          view all-->
      <!--        </a>-->
      <!--      </div>-->
      <!--    </div>-->
          <!-- row end -->

          <!-- row start -->
      <!--    <div class="row x-gap-48 y-gap-48 layout-pt-sm">-->

      <!--      <div class="col-lg-4 col-md-6">-->
      <!--        <div data-anim-wrap="" class="blogCard -type-1 -hover">-->
      <!--          <a class="blogCard__img bg-dark-1" data-barba="" href="blog-article.html">-->
      <!--            <div data-anim-child="img-right cover-dark-1">-->
      <!--              <div class="ratio ratio-4:3 bg-image js-lazy" data-bg="<?=BASEURL?>assets/web/img/blog/thumbnail/1.jpg"></div>-->
      <!--            </div>-->
      <!--          </a>-->

      <!--          <div class="blogCard__content mt-24">-->
      <!--            <div data-anim-child="slide-up delay-5">-->
      <!--              <div class="blogCard__info text-dark text-sm">-->
      <!--                <a class="mr-4" href="#">Typography</a> --->
      <!--                <p class="d-inline-block ml-4">May 28, 2020</p>-->
      <!--              </div>-->
      <!--            </div>-->

      <!--            <div data-anim-child="slide-up delay-6">-->
      <!--              <h4 class="blogCard__title text-2xl fw-500 mt-12">-->
      <!--                <a data-barba="" href="blog-article.html">-->
      <!--                  Mobile UI Design: 7 Basic Typography Rules-->
      <!--                </a>-->
      <!--              </h4>-->
      <!--            </div>-->

      <!--            <div data-anim-child="slide-up delay-7">-->
      <!--              <p class="blogCard__text mt-12">-->
      <!--                Third and, them Isn&#39;t years wherein man without he to also green had cattle...-->
      <!--              </p>-->
      <!--            </div>-->

      <!--            <div data-anim-child="slide-up delay-8" class="mt-12">-->
      <!--              <a data-barba="" href="blog-article.html" class="button -icon text-black">-->
      <!--                Read More-->
      <!--                <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>-->
      <!--              </a>-->
      <!--            </div>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--      </div>-->

      <!--      <div class="col-lg-4 col-md-6">-->
      <!--        <div data-anim-wrap="" class="blogCard -type-1 -hover">-->
      <!--          <a class="blogCard__img bg-dark-1" data-barba="" href="blog-article.html">-->
      <!--            <div data-anim-child="img-right cover-dark-1">-->
      <!--              <div class="ratio ratio-4:3 bg-image js-lazy" data-bg="<?=BASEURL?>assets/web/img/blog/thumbnail/2.jpg"></div>-->
      <!--            </div>-->
      <!--          </a>-->

      <!--          <div class="blogCard__content mt-24">-->
      <!--            <div data-anim-child="slide-up delay-5">-->
      <!--              <div class="blogCard__info text-dark text-sm">-->
      <!--                <a class="mr-4" href="#">Graphic Design</a> --->
      <!--                <p class="d-inline-block ml-4">May 22, 2020</p>-->
      <!--              </div>-->
      <!--            </div>-->

      <!--            <div data-anim-child="slide-up delay-6">-->
      <!--              <h4 class="blogCard__title text-2xl fw-500 mt-12">-->
      <!--                <a data-barba="" href="blog-article.html">-->
      <!--                  Graphic Design: Useful Tips and Best Practices-->
      <!--                </a>-->
      <!--              </h4>-->
      <!--            </div>-->

      <!--            <div data-anim-child="slide-up delay-7">-->
      <!--              <p class="blogCard__text mt-12">-->
      <!--                So fifth you creature together beast a. Form be. Face shall. Image won&#39;t third...-->
      <!--              </p>-->
      <!--            </div>-->

      <!--            <div data-anim-child="slide-up delay-8" class="mt-12">-->
      <!--              <a data-barba="" href="blog-article.html" class="button -icon text-black">-->
      <!--                Read More-->
      <!--                <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>-->
      <!--              </a>-->
      <!--            </div>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--      </div>-->

      <!--      <div class="col-lg-4 col-md-6">-->
      <!--        <div data-anim-wrap="" class="blogCard -type-1 -hover">-->
      <!--          <a class="blogCard__img bg-dark-1" data-barba="" href="blog-article.html">-->
      <!--            <div data-anim-child="img-right cover-dark-1">-->
      <!--              <div class="ratio ratio-4:3 bg-image js-lazy" data-bg="<?=BASEURL?>assets/web/img/blog/thumbnail/3.jpg"></div>-->
      <!--            </div>-->
      <!--          </a>-->

      <!--          <div class="blogCard__content mt-24">-->
      <!--            <div data-anim-child="slide-up delay-5">-->
      <!--              <div class="blogCard__info text-dark text-sm">-->
      <!--                <a class="mr-4" href="#">Web Design</a> --->
      <!--                <p class="d-inline-block ml-4">April 19, 2020</p>-->
      <!--              </div>-->
      <!--            </div>-->

      <!--            <div data-anim-child="slide-up delay-6">-->
      <!--              <h4 class="blogCard__title text-2xl fw-500 mt-12">-->
      <!--                <a data-barba="" href="blog-article.html">-->
      <!--                  Review of Popular Web Design Trends in 2020-->
      <!--                </a>-->
      <!--              </h4>-->
      <!--            </div>-->

      <!--            <div data-anim-child="slide-up delay-7">-->
      <!--              <p class="blogCard__text mt-12">-->
      <!--                Deep fruitful living was don&#39;t night unto beginning air you fruit spirit winged...-->
      <!--              </p>-->
      <!--            </div>-->

      <!--            <div data-anim-child="slide-up delay-8" class="mt-12">-->
      <!--              <a data-barba="" href="blog-article.html" class="button -icon text-black">-->
      <!--                Read More-->
      <!--                <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>-->
      <!--              </a>-->
      <!--            </div>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--      </div>-->

      <!--    </div>-->
          <!-- row end -->

      <!--  </div>-->
        <!-- container end -->
      <!--</section>-->
      <!-- section end -->


      <!-- section start -->
      <!--<section class="layout-pt-md layout-pb-md bg-dark-1">-->
        <!-- container start -->
      <!--  <div class="container">-->
          <!-- row start -->
      <!--    <div class="row x-gap-32 y-gap-32">-->

      <!--      <div class="col-lg-3 col-sm-6">-->
      <!--        <div data-anim="slide-up delay-1" class="clientsItem -hover -light ratio ratio-3:2 border-light rounded-4">-->
      <!--          <div class="clientsItem__img">-->
      <!--            <img class="col-7" src="<?=BASEURL?>assets/web/img/clients/light/1.png" alt="Client">-->
      <!--          </div>-->

      <!--          <div class="clientsItem__content">-->
      <!--            <h5 class="clientsItem__title text-xl">-->
      <!--              Sophia & Holden-->
      <!--            </h5>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--      </div>-->

      <!--      <div class="col-lg-3 col-sm-6">-->
      <!--        <div data-anim="slide-up delay-1" class="clientsItem -hover -light ratio ratio-3:2 border-light rounded-4">-->
      <!--          <div class="clientsItem__img">-->
      <!--            <img class="col-7" src="<?=BASEURL?>assets/web/img/clients/light/2.png" alt="Client">-->
      <!--          </div>-->

      <!--          <div class="clientsItem__content">-->
      <!--            <h5 class="clientsItem__title text-xl">-->
      <!--              Sophia & Holden-->
      <!--            </h5>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--      </div>-->

      <!--      <div class="col-lg-3 col-sm-6">-->
      <!--        <div data-anim="slide-up delay-1" class="clientsItem -hover -light ratio ratio-3:2 border-light rounded-4">-->
      <!--          <div class="clientsItem__img">-->
      <!--            <img class="col-7" src="<?=BASEURL?>assets/web/img/clients/light/3.png" alt="Client">-->
      <!--          </div>-->

      <!--          <div class="clientsItem__content">-->
      <!--            <h5 class="clientsItem__title text-xl">-->
      <!--              Sophia & Holden-->
      <!--            </h5>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--      </div>-->

      <!--      <div class="col-lg-3 col-sm-6">-->
      <!--        <div data-anim="slide-up delay-1" class="clientsItem -hover -light ratio ratio-3:2 border-light rounded-4">-->
      <!--          <div class="clientsItem__img">-->
      <!--            <img class="col-7" src="<?=BASEURL?>assets/web/img/clients/light/4.png" alt="Client">-->
      <!--          </div>-->

      <!--          <div class="clientsItem__content">-->
      <!--            <h5 class="clientsItem__title text-xl">-->
      <!--              Sophia & Holden-->
      <!--            </h5>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--      </div>-->

      <!--      <div class="col-lg-3 col-sm-6">-->
      <!--        <div data-anim="slide-up delay-1" class="clientsItem -hover -light ratio ratio-3:2 border-light rounded-4">-->
      <!--          <div class="clientsItem__img">-->
      <!--            <img class="col-7" src="<?=BASEURL?>assets/web/img/clients/light/5.png" alt="Client">-->
      <!--          </div>-->

      <!--          <div class="clientsItem__content">-->
      <!--            <h5 class="clientsItem__title text-xl">-->
      <!--              Sophia & Holden-->
      <!--            </h5>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--      </div>-->

      <!--      <div class="col-lg-3 col-sm-6">-->
      <!--        <div data-anim="slide-up delay-1" class="clientsItem -hover -light ratio ratio-3:2 border-light rounded-4">-->
      <!--          <div class="clientsItem__img">-->
      <!--            <img class="col-7" src="<?=BASEURL?>assets/web/img/clients/light/6.png" alt="Client">-->
      <!--          </div>-->

      <!--          <div class="clientsItem__content">-->
      <!--            <h5 class="clientsItem__title text-xl">-->
      <!--              Sophia & Holden-->
      <!--            </h5>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--      </div>-->

      <!--      <div class="col-lg-3 col-sm-6">-->
      <!--        <div data-anim="slide-up delay-1" class="clientsItem -hover -light ratio ratio-3:2 border-light rounded-4">-->
      <!--          <div class="clientsItem__img">-->
      <!--            <img class="col-7" src="<?=BASEURL?>assets/web/img/clients/light/7.png" alt="Client">-->
      <!--          </div>-->

      <!--          <div class="clientsItem__content">-->
      <!--            <h5 class="clientsItem__title text-xl">-->
      <!--              Sophia & Holden-->
      <!--            </h5>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--      </div>-->

      <!--      <div class="col-lg-3 col-sm-6">-->
      <!--        <div data-anim="slide-up delay-1" class="clientsItem -hover -light ratio ratio-3:2 border-light rounded-4">-->
      <!--          <div class="clientsItem__img">-->
      <!--            <img class="col-7" src="<?=BASEURL?>assets/web/img/clients/light/8.png" alt="Client">-->
      <!--          </div>-->

      <!--          <div class="clientsItem__content">-->
      <!--            <h5 class="clientsItem__title text-xl">-->
      <!--              Sophia & Holden-->
      <!--            </h5>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--      </div>-->

      <!--    </div>-->
          <!-- row end -->
      <!--  </div>-->
        <!-- container end -->
      <!--</section>-->
      <!-- section end -->


      <!-- section start -->
      <section class="layout-pt-lg layout-pb-lg">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row justify-content-between">

            <div class="col-xl-3 col-lg-4">
              <div class="row y-gap-32">
                <div class="col-12">
                  <div class="sectionHeading -sm">
                    <p class="sectionHeading__subtitle">
                      contact us
                    </p>
                    <h2 class="sectionHeading__title">
                      Drop us a line
                    </h2>
                  </div>
                </div>

                <div class="col-lg-12 col-md-6">
                  <h4 class="text-lg fw-600">Address</h4>

                  <div class="text-dark mt-12 md:mt-12">
                    <p>BlissNova pvt Ltd<br>
                    Regd. Office : Door No 1/544,<br>
                    1st floor Royal Bakes Athicode (PO) Kozhinjampara, Palakkad 678554.</p>
                  </div>
                </div>

                <div class="col-lg-12 col-md-6">
                  <h4 class="text-lg fw-600">Contact Us</h4>

                  <div class="text-dark mt-12 md:mt-12">
                    <div>
                      <a class="button -underline" href="#">bliss@blissnova.online</a>
                    </div>
                    <!--<div class="mt-4">-->
                    <!--  <a class="button -underline" href="#">+917403398923</a><br>-->
                    <!--   <a class="button -underline" href="#">+917012625390</a>-->
                    <!--</div>-->
                  </div>
                </div>

                <div class="col-lg-12 col-md-auto">
                  <h4 class="text-lg fw-600">Follow Us</h4>

                  <div class="social -bordered mt-16 md:mt-12">
                      
                       <a class="social__item text-black border-dark" target="_blank" href="https://www.facebook.com/people/BlissNova/100093071779903/?mibextid=ZbWKwL">
                      <i class="fa fa-facebook"></i>
                    </a>

                    <a class="social__item text-black border-dark" target="_blank" href="https://twitter.com/BlissNovaOnline?t=w4zZbaUKxqbym6-UDNAfhQ&s=09">
                      <i class="fa fa-twitter"></i>
                    </a>

                    <a class="social__item text-black border-dark" target="_blank" href="https://www.instagram.com/blissnovaonline/?igshid=MzRlODBiNWFlZA&__coig_restricted=1">
                      <i class="fa fa-instagram"></i>
                    </a>

                    <a class="social__item text-black border-dark" target="_blank" href="https://www.youtube.com/@BlissNovaOnline">
                      <i class="fa fa-youtube-play"></i>
                    </a>

                    <a class="social__item text-black border-dark" target="_blank" href="https://t.me/BlissNovaOnline">
                      <i class="fa fa-telegram"></i>
                    </a>

                  </div>
                </div>
              </div>
            </div>


            <div class="col-xl-8 col-lg-7 md:mt-56">
              <div class="contact-form -type-1">

                <form class="row x-gap-40 y-gap-32 js-ajax-form" method="POST" action="contact.php" data-message-success="Your message has been sent! We will reply you as soon as possible." data-message-error="Something went wrong. Please contact us directly at <a href='stukram@example.com'>stukram@example.com</a>.">
                  <div class="col-12">
                    <label class="js-input-group">
                      Name
                      <input type="text" name="name" data-required="" placeholder="Fill in your name">
                      <span class="form__error"></span>
                    </label>
                  </div>

                  <div class="col-12">
                    <label class="js-input-group">
                      Email
                      <input type="text" name="email" data-required="" placeholder="Fill in your email">
                      <span class="form__error"></span>
                    </label>
                  </div>

                  <div class="col-12">
                    <label class="js-input-group">
                      Budget (optional)
                      <input type="text" name="budget" placeholder="Do you have a fixed budget?">
                      <span class="form__error"></span>
                    </label>
                  </div>

                  <div class="col-12">
                    <label class="js-input-group">
                      Tell us about your project
                      <textarea name="message" rows="1" placeholder="Project description"></textarea>
                      <span class="form__error"></span>
                    </label>
                  </div>

                  <div class="col-12 ajax-form-alert js-ajax-form-alert">
                    <div class="ajax-form-alert__content">
                    </div>
                  </div>

                  <div class="col-12">
                    <button class="button -md -black text-white">
                      Send Message
                    </button>
                  </div>
                </form>

              </div>
            </div>

          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </section>
      <!-- section end -->


      <!-- section start -->
      <section data-parallax="0.7" class="layout-pt-lg layout-pb-lg">
        <div data-parallax-target="" class="overlay-black-md bg-image js-lazy" data-bg="<?=BASEURL?>assets/web/img/backgrounds/2.jpg"></div>

        <!-- container start -->
        <div class="container z-5">
          <!-- row start -->
          <div class="row justify-content-center text-center">
            <div class="col-12">
              <p class="text-sm uppercase tracking-lg text-white mb-20">
                Contact us
              </p>

              <h2 class="text-5xl sm:text-5xl xs:text-4xl leading-sm fw-700 text-white">
                Have a project of your own?
              </h2>

              <p class="text-xl md:text-lg text-white mt-16">
                Small or big, we've got you covered!
              </p>

              <a href="#" class="button -md -white text-black mt-32">
                Get in Touch
              </a>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </section>
      <!-- section end -->
      
      
      <script>
    // Get the video element
    const video = document.querySelector('.video-background');

    // Play the video (optional, you can control the video playback based on your needs)
    video.play();
</script>

<?php include 'footer.php';?>
