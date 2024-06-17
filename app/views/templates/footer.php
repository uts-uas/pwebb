 <!-- Bootstrap core JavaScript-->
 <script src="<?= BURL ?>/vendor/jquery/jquery.min.js"></script>
 <script src="<?= BURL ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="<?= BURL ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="<?= BURL ?>/js/sb-admin-2.min.js"></script>

 <!-- Page level plugins -->
 <script src="<?= BURL ?>/vendor/chart.js/Chart.min.js"></script>

 <!-- Page level custom scripts -->
 <script src="<?= BURL ?>/js/demo/chart-area-demo.js"></script>
 <script src="<?= BURL ?>/js/demo/chart-pie-demo.js"></script>

 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script>
     AOS.init();
 </script>

 <script>
     $(document).ready(function() {
         // Add smooth scrolling to all links
         $("a.nav-link").on('click', function(event) {
             if (this.hash !== "") {
                 event.preventDefault();
                 var hash = this.hash;
                 $('html, body').animate({
                     scrollTop: $(hash).offset().top
                 }, 800, function() {
                     window.location.hash = hash;
                 });
             }
         });

         // Change navbar transparency on scroll
         $(window).scroll(function() {
             if ($(this).scrollTop() > 50) {
                 $('.navbar').removeClass('transparent').addClass('solid');
             } else {
                 $('.navbar').removeClass('solid').addClass('transparent');
             }
         });
     });
 </script>
 </body>

 </html>