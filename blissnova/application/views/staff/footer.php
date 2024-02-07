   </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <!--<div class="layout-overlay layout-menu-toggle"></div>-->

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

   <?php if ($this->session->flashdata('success_message')) { ?>
<script>
 
$( document ).ready(function() {
    var toast = document.getElementById('my-toast');
      var bsToast = new bootstrap.Toast(toast);
      bsToast.show();
});
  </script>
  <?php
  } ?>
  
    <?php if ($this->session->flashdata('error_message')) { ?>
<script>
 
$( document ).ready(function() {
    var toast = document.getElementById('my-toast1');
      var bsToast = new bootstrap.Toast(toast);
      bsToast.show();
});
  </script>
  <?php
  } ?>



    <script>
const html = document.querySelector("html");
const svg1 = document.getElementById("svg1");
const svg2 = document.getElementById("svg2");
const svg3 = document.getElementById("svg3");
const svg4 = document.getElementById("svg4");
const you1 = document.getElementById("you1");
  const you2 = document.getElementById("you2");
  const insta1 = document.getElementById("insta1");
  const insta2 = document.getElementById("insta2");
  const fb1 = document.getElementById("fb1");
  const fb2 = document.getElementById("fb2");
  const tele1 = document.getElementById("tele1");
  const tele2 = document.getElementById("tele2");
  const twit1 = document.getElementById("twit1");
  const twit2 = document.getElementById("twit2");


svg1.style.display = "none"; // Hide svg1 by default
svg2.style.display = "none"; // Hide svg2 by default
svg3.style.display = "none"; // Hide svg3 by default
svg4.style.display = "none"; // Hide svg4 by default

html.addEventListener("click", function() {
  if (html.classList.contains("light-style")) {
    svg1.style.display = "block"; // Show svg1 when html has class "light-style"
    svg2.style.display = "none"; // Hide svg2 when html has class "light-style"
    svg3.style.display = "block"; // Show svg3 when html has class "light-style"
    svg4.style.display = "none"; // Hide svg4 when html has class "light-style"
    
      you1.style.display = "block";
    you2.style.display = "none";
    insta1.style.display = "block";
    insta2.style.display = "none";
    fb1.style.display = "block";
    fb2.style.display = "none";
    tele1.style.display = "block";
    tele2.style.display = "none";
    twit1.style.display = "block";
    twit2.style.display = "none";
  } else if (html.classList.contains("dark-style")) {
    svg1.style.display = "none"; // Hide svg1 when html has class "dark-style"
    svg2.style.display = "block"; // Show svg2 when html has class "dark-style"
    svg3.style.display = "none"; // Hide svg3 when html has class "dark-style"
    svg4.style.display = "block"; // Show svg4 when html has class "dark-style"
    
    you1.style.display = "none";
    you2.style.display = "block";
    insta1.style.display = "none";
    insta2.style.display = "block";
    fb1.style.display = "none";
    fb2.style.display = "block";
    tele1.style.display = "none";
    tele2.style.display = "block";
    twit1.style.display = "none";
    twit2.style.display = "block";
  } else {
    svg1.style.display = "none"; // Hide svg1 when html does not have any of the active classes
    svg2.style.display = "none"; // Hide svg2 when html does not have any of the active classes
    svg3.style.display = "none"; // Hide svg3 when html does not have any of the active classes
    svg4.style.display = "none"; // Hide svg4 when html does not have any of the active classes
    
     you1.style.display = "none";
    you2.style.display = "none";
    insta1.style.display = "none";
    insta2.style.display = "none";
    fb1.style.display = "none";
    fb2.style.display = "none";
    tele1.style.display = "none";
    tele2.style.display = "none";
    twit1.style.display = "none";
    twit2.style.display = "none";
  }
});

</script>   

<script>
    // Get a reference to the HTML tag with the specified class names
const htmlTag = document.querySelector('html.light-style layout-navbar-fixed layout-menu-fixed');

// Get a reference to the .menu-item.socialmedia element
const menuElement = htmlTag.querySelector('.menu-item.socialmedia');

// Check if the HTML tag has the class .layout-menu-collapsed
if (htmlTag.classList.contains('layout-menu-collapsed')) {
  menuElement.style.flexDirection = 'column';
} else {
  menuElement.style.flexDirection = 'row';
}
</script>


    <!-- Page JS -->
    <script src="<?=BASEURL?>assets/js/dashboards-analytics.js"></script>


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?=BASEURL?>assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/popper/popper.js"></script>
    <script src="<?=BASEURL?>assets/vendor/js/bootstrap.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="<?=BASEURL?>assets/vendor/libs/hammer/hammer.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/i18n/i18n.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="<?=BASEURL?>assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?=BASEURL?>assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/swiper/swiper.js"></script>

    <!-- Main JS -->
    <script src="<?=BASEURL?>assets/js/main.js"></script>

  </body>
</html>
