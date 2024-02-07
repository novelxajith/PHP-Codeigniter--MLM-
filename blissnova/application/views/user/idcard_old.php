<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/open-sauce-one" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      
                
    <title>ID Card</title>
<!--     
    So lets start -->


</head>
<style>

.btn-primary {
    color: #ffffff;
    border-color: #b6bcc6;
    background: #5a5edf;
}
.btn:hover, .btn-large:hover, .btn-small:hover {
    background-color: #4caf50!important;
}
.download {
    display: flex;
    justify-content: center;
}
.btn {
    cursor: pointer;
    display: inline-flex !important;
    align-items: center;
    justify-content: center;
    text-transform: uppercase;
    letter-spacing: 0.4px;
    margin-top: 20px;
    margin-bottom: 20px;
}
    *{
    margin: 00px;
    padding: 00px;
    box-sizing: content-box;
}

.container {
    height: auto;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
    flex-direction: row;
    flex-flow: wrap;
}
.font {
    height: 500px;
    width: 300px;
    position: relative;
    border-radius: 10px;
    border: 2px #5a5edf solid;
}
.top{
    height: 30%;
    width: 100%;
    /*background-color: #8338ec;*/
    position: relative;
    z-index: 5;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}

.bottom {
    height: 70%;
    width: 100%;
    /*background-color: white;*/
    position: absolute;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
}
.top2 img {
    border: #5a5ee1 3px solid;
    height: 130px;
    width: 130px;
    background-color: #e6ebe0;
    border-radius: 20px;
    position: absolute;
    top: 80px;
    left: 25%;
    z-index: 9999;
}
.top img {
    height: 42px;
    width: 190px;
    /* background-color: #8338ec; */
    border-radius: 10px;
    position: absolute;
    top: 22px;
    left: 16%;
}
.bottom p {
    position: relative;
    top: 73px;
    text-align: center;
    text-transform: capitalize;
    font-weight: bold;
    font-size: 20px;
    text-emphasis: spacing;
}
.bottom .desi{
    font-size:12px;
    color: grey;
    font-weight: normal;
}
.bottom .no {
    font-size: 15px;
    margin: 5px;
    font-weight: normal;
    font-family: 'Open Sauce One', sans-serif;
}
.barcode img
{
    height: 65px;
    width: 65px;
    text-align: center;
    margin: 5px;
}
.barcode {
    text-align: center;
    position: relative;
    top: 7px;
}

.back{
    height: 500px;
    width: 300px;
    position: relative;
    border-radius: 10px;
    border: 2px #5a5edf solid;
}
.qr img{
    height: 80px;
    width: 100%;
    margin: 20px;
    background-color: white;
}
.Details {
    color: white;
    text-align: center;
    padding: 10px;
    font-size: 25px;
}


.details-info{
    color: white;
    text-align: left;
    padding: 5px;
    line-height: 20px;
    font-size: 16px;
    text-align: center;
    margin-top: 20px;
    line-height: 22px;
}

.logo {
    
    padding: 40px;
}

.logo img{
    height: 100%;
    width: 100%;
    color: white ;

}

.barcode1 {
    left: 52px;
    bottom: 33px;
    position: absolute;
}
strong {
    font-size: 21px;
    color: #5a5ee1;
    font-weight: 800;
    font-family: 'Poppins', sans-serif;
}


.logo {
    display: flex;
    align-items: center;
    justify-content: center;
}
new {
    color: #5a5ee1;
    font-size: 20px;
    font-family: 'Open Sauce One', sans-serif;
    font-weight: 800;
}
address {
    color: black;
    font-size: 13px;
    font-style: initial;
    font-family: 'Open Sauce One', sans-serif;
}
site {
    color: #5a5ee1;
    font-size: 15px;
    font-weight: bold;
    font-family: 'Open Sauce One', sans-serif;
}
small {
    font-size: 11px;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
}
p.bn {
    top: 64px;
}
.frontborder {
  
    bottom: 0;
    position: absolute;
}
.backborder {
    bottom: 0;
    left: 0;
    position: absolute;
}
.m-2 {
    margin: 10px;
}

@media screen and (max-width:400px)
{
   .container {
    height: auto;
}
    .container .front{
        margin-top: 50px;
    }
   
}
@media screen and (max-width:600px)
{
    .container {
    height: auto;
}
    .container .front{
        margin-top: 50px;
    }
 
}

</style>
<body>
        <div id="download" class="container">
            
             <?php  $id= $this->db->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row_array(); ?>
                <div class="font m-2"  style=" background-color:white; background-size: cover;">
                     <div class="top">
                         <img src="<?=BASEURL?>assets/img/logo/logo1.png" alt="Banner image" class="rounded-top">
                    </div>
                    <div class="top2" >
                        <img src="<?=BASEURL.'assets/images/'.$id['profile_image']?>">
                    </div>
                    <div class="bottom">
                        <p><strong><?=$id['first_name']?>   <?=$id['last_name']?></strong></p>
                        <p><small>BN INDEPENDENT</small></p>
                         <p class="bn"><small>REPRESENTATIVE</small></p>
                        
                        <p class="no"><span>Blissnova ID</span>
                        <span>:</span>
                        <span><?=$id['username']?></span></p>
                   
                         <p class="no">
                         <span>Email ID</span> 
                         <span>:</span>
                         <span><?=$id['email']?></span></p>
                      
                        <p class="no"><span>Mobile</span>
                         <span>:</span>
                        <span>+91  <?=$id['mobile']?></span></p>
                     
                       
                    </div>
                     <div class="barcode1">
                            <img src="<?=BASEURL?>assets/img/logo/barcode.png" style="width:200px;">
                        </div>
                    <div class="frontborder" style="background-image: url(<?=BASEURL?>assets/img/logo/border.png); background-size: cover; z-index: 9999; width: 300px; height: 180px; border-radius:6px;">
                    </div>
                          
                 
                </div>
       
            <div class="back m-2" style="background-color:white; background-size: cover;">

                <div class="details-info">
                     <div class="logo">
                        <svg id="svg1" width="100" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106.8 77.8" style="display: block;"><defs><clipPath id="a"><path style="fill:none" d="M-98.2-708.5h595.3v834.1H-98.2z"></path></clipPath></defs><g style="clip-path:url(#a)"><path d="M65 33.1c-11.8 6.4-24.8 13.4-36.5 20-1.8 1-3.7 2.1-5.5 3.1 4.3-8 8.7-16.1 12.9-24.1l4.6.1c8.4.2 17 .3 25.5.4-.4.2-.7.4-1 .5m9.5-10.3c-5 0-10.1.1-15.1.2 9.1-4.8 18.8-10 27.8-14.9l10.6-5.8c-3.9.2-13.9.5-17.6.7-13.2.6-26.5 1.2-39.7 2.2 11.1 1 22.3 1.8 33.4 2.5-.3.2-.6.3-.9.4-10.6 4.7-21.7 9.7-32.3 14.6 1.4-2.6 2.7-5.3 4.1-7.9-8.4.5-17.2 1-25.5 1.7 5.7.5 11.4 1 17.1 1.4l2.8.2c-1.8 2.6-3.5 5.3-5.3 7.9-1.3 2-2.7 4.1-4 6.1-1.8 2.7-3.6 5.5-5.3 8.2C16.7 52.1 8.5 65.2 1 77.3c10-5 22.1-11 31.9-16C57 49 82 35.6 105.8 22.7c-7.6 0-23.9 0-31.3.1" style="fill:#5a5ee1"></path></g></svg>
                    </div>
                    <p><new>
                        @BlissNovaOnline
                    </new></p>
                     <p><address>
                        BlissNova Pvt. Ltd.<br>
                        Kozhinjampara,<br>
                        Athicode (P.O) - 678554,<br>
                        Palakkad District.<br>
                         <!--blissnovaoffical@gmail.com-->
                     </address></p> 
                     <p><site>
                        www.blissnova.online
                    </site></p>
                    <br>
                     <div class="barcode">
                           <svg width="70" height="70" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#5a5ee1" d="M6 0H0v6h6V0zM5 5H1V1h4v4z"/><path fill="#5a5ee1" d="M2 2h2v2H2V2zM0 16h6v-6H0v6zm1-5h4v4H1v-4z"/><path fill="#5a5ee1" d="M2 12h2v2H2v-2zm8-12v6h6V0h-6zm5 5h-4V1h4v4z"/><path fill="#5a5ee1" d="M12 2h2v2h-2V2zM2 7H0v2h3V8H2zm5 2h2v2H7V9zM3 7h2v1H3V7zm6 5H7v1h1v1h1v-1zM6 7v1H5v1h2V7zm2-3h1v2H8V4zm1 4v1h2V7H8v1zM7 6h1v1H7V6zm2 8h2v2H9v-2zm-2 0h1v2H7v-2zm2-3h1v1H9v-1zm0-8V1H8V0H7v4h1V3zm3 11h1v2h-1v-2zm0-2h2v1h-2v-1zm-1 1h1v1h-1v-1zm-1-1h1v1h-1v-1zm4-2v1h1v1h1v-2h-1zm1 3h-1v3h2v-2h-1zm-5-3v1h3V9h-2v1zm2-3v1h2v1h2V7h-2z"/></svg>
                        </div>
                      <div class="backborder" style="background-image: url(<?=BASEURL?>assets/img/logo/border.png); background-size: cover; z-index: 9999; width: 300px; height: 180px; border-radius: 6px;">
                    </div>  
                    </div>
                </div>
                 
            </div>
       <div class="download" >
                    
                    <button  id="downloadButton"  type="button" class="btn btn-primary waves-effect waves-light">Download</button>
                </div>
</body>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

 <script>
    var downloadButton = document.getElementById('downloadButton');

    downloadButton.addEventListener('click', function() {
      window.print();
    });
  </script>


</html>