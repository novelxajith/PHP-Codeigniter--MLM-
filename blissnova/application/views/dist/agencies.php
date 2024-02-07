<?php include 'header.php';?>

<style>
    .section-heading {
        margin: 35px 2px;
        font-size: 40px !important;
    }
    .agency-container {
        margin: 10px;
        margin-bottom: 30px;
    }
    .card {
        border: 2px solid #686bcb;
        background-color: var(--bg-light-1);
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-radius: 10px !important;
    }
    .card-header {
        padding-top: 25px !important;
    }
    .card-title {
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: #686bcb;
        color: #fff;
    }
    .card-body {
        padding: 6px;
        padding-top: 15px !important;
    }

    .header.-dark .header__menu .icon {
        color: var(--bg-dark-2);
    }

    @media screen and (max-width: 500px) {
        .agency-container .col-lg-6 {
            margin: 1px !important;
            margin-bottom: 20px !important;
        }
    }
</style>



<style>
    
.video-card {
  position: relative;
  width: 100%;
  height: 60vh!important;
  overflow: hidden;
  
}

.video-card1 {
    position: relative;
    width: 100%;
    height: 109vh!important;
    overflow: hidden;
}

#background-video1 {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
#background-video2 {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
@media only screen and (max-width : 767px) {
  .video-card1 {
    display:none;
}

}
@media only screen and (min-width : 767px) {
  .video-card {
    display:none;
}

}
</style>

<div class="row justify-content-center text-center agency-wrapper">
    <div class="col-lg-7">
        <div class="sectionHeading -lg">
            <h3 class="sectionHeading__title section-heading">
                Agencies
            </h3>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
<div class="video-card">
    <video autoplay muted loop id="background-video1">
      <source src="<?=BASEURL?>assets/video/desktop.mp4" type="video/mp4">
     
    </video>

  </div>
  
  <div class="video-card1">
    <video autoplay muted loop id="background-video2">
      <source src="<?=BASEURL?>assets/video/mobile.mp4" type="video/mp4">
     
    </video>

  </div>
  </div>
  </div>

<?php include 'footer.php';?>
