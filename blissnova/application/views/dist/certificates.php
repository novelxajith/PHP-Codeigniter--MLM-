<?php include 'header.php';?>







<style>
     .section-heading{
        margin:35px 2px;
        font-size:40px !important;
    }
    .certificate-container{
        margin:10px;
        margin-bottom:30px;
    }
    .card{
        box-shadow: rgb(0 0 0 / 41%) 1px 1px 8px !important;
    }

    .card-title{
        padding:10px;
        color:#E12244;
    }
    .card-body{
        padding:15px;
    }
    
    .header.-dark .header__menu .icon {
    color: var(--bg-dark-2);
}

    @media screen and (max-width:500px){
        
        .certificate-container .certificate-column{
        margin: 1px !important;
        margin-bottom:20px !important;
        padding-left: 5px !important;
        padding-right: 5px !important;
    }
    }
    
    .certificate-img{
        width:fit-content !important;
        overflow:hidden !important;
    }
    
</style>






<div class="row justify-content-center text-center">
            <div class="col-lg-7">
              <div class="sectionHeading -lg">
                <h3 class="sectionHeading__title section-heading">
                    Certificates
                </h3>
              </div>
            </div>
</div>


    <div class="row certificate-container">
        <div class="col-lg-4 col-md-4 certificate-column">
            <div class="card">
                <div class="card-header text-center">
                    <h5 class="card-title">Incorporation Certificate</h5>
                </div>
                <div class="card-body">
                    <div style="margin-bottom:10px;" class="d-flex justify-content-center">
                        <img class="img-responsive certificate-img" src="<?=BASEURL?>assets/images/Incorporation-certificate.jpg">
                    </div>
                </div>
            </div>
        </div>
         <div class="col-lg-4 col-md-4 certificate-column">
            <div class="card">
                <div class="card-header text-center">
                    <h5 class="card-title">Master Data</h5>
                </div>
                <div class="card-body">
                      <div style="margin-bottom:10px;" class="d-flex justify-content-center">
                        <img class="img-responsive certificate-img" src="<?=BASEURL?>assets/images/master-data.jpg">
                    </div>
                </div>
            </div>
        </div>
         <div class="col-lg-4 col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    <h5 class="card-title">PAN</h5>
                </div>
                <div class="card-body">
                      <div style="margin-bottom:10px;" class="d-flex justify-content-center">
                        <img class="img-responsive certificate-img" src="<?=BASEURL?>assets/images/bn-pan.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Row Ends here-->





















<?php include 'footer.php';?>
