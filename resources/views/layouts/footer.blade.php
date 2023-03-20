  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Kindly subscribe to our monthly Newsletter</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('welcome') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about-us')}}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('products')}}">Products</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('our-core-values') }}">Core Values</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Products</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Egg Production</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Manure Production</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Chicken Production</a></li>
            
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Nana Antri Dede Street <br>
              Berekuso, Adjacent The Clinic<br>
              Berekuso-Akwapim, E/R <br><br>
              <strong>Phone:</strong> +233 504489207<br>
              <strong>Email:</strong> anidaso.farms21@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <!--<h3>About Eterna</h3>-->
            <a href="index.php"><img src="{{ asset('template/assets/img/anidaso-logo.png') }}" alt="" class="img-fluid" width="80px" height="70px"></a>
            <br />
            <p><strong>Anidaso Farms</strong> is a commercial poultry farm that engages in the production and sales of high-quality and healthy chicken and eggs to households and businessess.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://web.facebook.com/anidasofarms" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/anidaso_farms/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.linkedin.com/company/anidaso-farms/?viewAsMember=true" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Anidaso Farms</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
    
        Powered by <strong style="color:green"> Anidaso Technologies</strong>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('template/assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('template/assets/js/main.js') }}"></script>

  <!--Start of Tawk.to Script-->
	<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/61ae6a8fc82c976b71bfeb48/1fm8l0gbl';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
<!--End of Tawk.to Script-->

</body>

</html>