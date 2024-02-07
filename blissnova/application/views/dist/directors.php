<?php include 'header.php';?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300;1,400;1,600&display=swap" rel="stylesheet">

<style>
    .y-gap-48 > * {
        padding: 50px;
    }
    .header.-dark .header__menu .icon {
    color: var(--font-dark);
 }
 
 .staff-section{
     margin-top:50px !important;
 }
 
 .staff-section span{
     background-color:#063079 !important;
     color:#fff !important;
     font-family: 'Poppins', sans-serif;
     padding:13px 20px !important;
     font-size:30px;
     font-weight:600;
     border-radius:15px;
 }
 .staff-section p{
     font-family: 'Poppins', sans-serif;
     font-size:18px !important;
     margin-top:15px;
 }
 
 @media screen and (max-width:500px){
     .directors-row{
         margin-top:0px !important;
     }
     .founder-details-row{
         margin-bottom:30px !important;
     }
     .founder-img{
         height: 400px !important;
     }
 }
   
</style>



  <!-- page header start -->
      <section class="d-flex align-items-center md:d-block md:h-unset"> <!--h-100vh-->
        <!-- container start -->
        <div data-anim-wrap="" class="container">
          <!-- row start -->
          <div style="margin-bottom:40px !important;" class="row align-items-center md:mt-120 directors-row">
            <div class="col-lg-12 col-md-12">
              <div data-anim-child="slide-up" class="sectionHeading -md">
                <h1 style="margin-top:80px !important;" class="sectionHeading__title text-center">
                 Directors
                </h1>
                <h5 style="color:#E12244;margin-top:40px;">Directors Desk</h5>
              </div>

              <div data-anim-child="slide-up delay-1">
                <p class="text-lg text-black fw-500 mt-32">
                  Welcome to BlissNova, an exceptional journey where endless possibilities
            await. We strongly believe in the power of collective support, unwavering determination, and the exuberant celebration of personal achievements. Our
            mission is to cultivate a vibrant and inclusive community that empowers individuals to pursue and realize their dreams.

                </p>
              </div>

              <div data-anim-child="slide-up delay-2">
                <p class="text-lg leading-5xl mt-24">
                  We understand that true success surpasses conventional boundaries and encompasses accomplishments of all magnitudes. With every step taken, we come together to applaud and ignite a spark of inspiration, propelling us to reach even greater heights.

                </p>
              </div>
              
               <div data-anim-child="slide-up delay-3">
                <p class="text-lg leading-5xl mt-24">
                  BlissNova is not just a platform for recognition; it is a dynamic and thriving
                ecosystem driven by the passion, dedication, and camaraderie of its members.
                Together, we challenge the limits of what is possible, inspiring one another to
                dream bigger, strive higher, and unlock unprecedented levels of personal
                fulfillment.
                </p>
              </div>
              
                <div data-anim-child="slide-up delay-4">
                <p class="text-lg leading-5xl mt-24">
                  Let us unite our forces and unleash the inner magic within us, transforming
                    our aspirations into splendid realities. The world eagerly awaits our collective
                    impact, and with BlissNova, the potential for achievement knows no bounds.
                </p>
              </div>
              
            </div>

          </div>
          <!-- row end -->
          
          <!--Row Starts-->
          <div style="margin-bottom:450px;!important;justify-content:center;" class="row founder-details-row">
              <div style="display:flex;justify-content:center;align-items:center;" class="text-center sectionHeading__title">
                  <h4 style="font-family: 'Russo One', sans-serif;color:#5D61E2;text-align:center;letter-spacing:2px;padding-bottom:15px;margin-top: 40px;margin-bottom: 49px;" class="founder-heading">
                      MEET THE FOUNDERS OF BLISSNOVA
                  </h4>
              </div>
              <div class="col-lg-6">
                  <div class="text-center">
                      <img style="height:500px;" class=" img-responsive founder-img" src="<?=BASEURL?>assets/images/Sam-Titus.png">
                      <div class="staff-section text-center">
                          <span>Sam Titus</span>
                          <p>MANAGING DIRECTOR</p>
                      </div>
                  </div>
              </div>
               <div class="col-lg-6">
                  <div class="text-center">
                       <img style="height:500px;" class=" img-responsive founder-img" src="<?=BASEURL?>assets/images/Arief-Rahiman.png">
                        <div class="staff-section text-center">
                          <span>Arief Rahiman</span>
                          <p>MANAGING DIRECTOR, CEO</p>
                      </div>
                  </div>
              </div>
               
               <div style="margin-top:30px;padding:10px;">
                     <p style="font-family: 'Poppins', sans-serif;font-weight:400;color:#5D61E2;text-align:justify;" class="text-lg leading-5xl mt-24">
                  " <span style="font-weight:500;">Sam Titus</span> and <span style="font-weight:500;">Arief Rahiman K</span> are distinguished founders spearheading BlissNova Private Limited, a progressive enterprise at the forefront of excellence. With a commendable 5-year tenure in the digital marketing and technology realm, Sam Titus showcases an impressive acumen in crafting innovative strategies. Arief Rahiman K, an accomplished MBA graduate, brings an impressive 6-year journey marked by unrivaled achievements in the affiliate marketing and education sectors. Together, their visionary leadership propels BlissNova towards unparalleled success, as they continue to redefine industry standards with unwavering dedication and pioneering endeavors."
                </p>
               </div>
              
          </div>
        </div>
        <!-- container end -->
      </section>
      <!-- page header end -->


   

<?php include 'footer.php';?>
