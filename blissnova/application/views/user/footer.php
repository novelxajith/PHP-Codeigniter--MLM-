    </div>
  </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
  
  




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

    <!-- Page JS -->
    <script src="<?=BASEURL?>assets/js/dashboards-analytics.js"></script>

   <script>
    document.addEventListener("DOMContentLoaded", function() {
      const html = document.querySelector("html");
      const image1 = document.getElementById("image1");
      const image2 = document.getElementById("image2");
      const image3 = document.getElementById("image3");
      const image4 = document.getElementById("image4");
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

      function updateDisplay() {
        if (html.classList.contains("light-style")) {
          image1.style.display = "block";
          image2.style.display = "none";
          image3.style.display = "block";
          image4.style.display = "none";

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
          image1.style.display = "none";
          image2.style.display = "block";
          image3.style.display = "none";
          image4.style.display = "block";

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
          image1.style.display = "none";
          image2.style.display = "none";
          image3.style.display = "none";
          image4.style.display = "none";

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
      }

      html.addEventListener("click", updateDisplay);
      updateDisplay();
    });
  </script> 
   

  
   <?php 
     $this->session->unset_userdata('error_message');
     $this->session->unset_userdata('success_message');?> 
  </body>
</html>
