@include('layouts.navbar')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a style="color: white" href="{{ route('welcome') }}">Home</a></li>
          <li style="color: white">About Us</li>
        </ol>
        <h2>About Us</h2>

      </div>
    </section><!-- End Breadcrumbs -->

 <!-- ======= About Section ======= -->
 <section id="about" class="about">
  <div class="container">

    <div class="row">
      <div class="col-lg-6">
       
       <br/>
       <br />
       <br />
       <br />
       <div class="embed-responsive embed-responsive-16by9">
            <video controls autoplay loop muted>
            <source src="{{ asset('template/assets/img/slide/anidaso_video.mp4') }}" type="video/mp4">
       </video> </div>
      </div>
      
      <div class="col-lg-6 pt-4 pt-lg-0 content">
      <h3 style="color: #009961">Anidaso Farms Ghana</h3>
        <p class="fst-italic">
          The Best Choice For Your Poultry Products ...
        </p>
        <h5>We seeks to support the UN sustainable Development Goals (SDG)</h4>
        <ul>
          <li><i style="font-size: 30px;" class="bi bi-people"></i> <strong><u>SDG 1 - End Poverty :</u> </strong>  Anidaso farms seeks to employ youths who are willing to work in the poultry industry. These individuals are paid salaries to feed themselves and families hence reducing poverty rate.</li> <br />
          <li><i style="font-size: 30px;" class="bi bi-egg"></i> <strong><u>SDG 2 - Zero Hunger :</u> </strong> Anidaso farms seeks to provide quality and healthy chicken and eggs to consumers at affordable prices</li> <br />
          <li><i style="font-size: 30px;" class="bi bi-gender-ambiguous"></i> <strong><u>SDG 5 - Gender Equality :</u> </strong> Anidaso farms employs a fair number of women on the farm hence ensuring gender equality.</li> <br />
          <li><i style="font-size: 30px;" class="bi bi-infinity"></i> <strong><u>SDG 12 - Responsible Consumption and Production:</u> </strong>Anidaso farms ensure sustainable consumption and production patterns by using natural resources and the natural environment in a proper manner.</li> <br />
        </ul>
        <!--<p>
          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum
        </p>-->
      </div>
    </div>

  </div>
</section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients : </strong> Our clients are  super happy with our products </p><br /> 
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Supplies :</strong> We have supplied substantial number of eggs and chicken to clients </p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Awards :</strong> We have won two awards; Best Agribusiness Awards and Most Promising Business</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Employees : </strong> We have intelligent workers ranging from founders to farmhands</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>These are what customers are saying about our products. We make sure customers' feedbacks are taken into serious consideration. </p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="testimonial-item">
              <img src="{{ asset('template/assets/img/testimonials/jude-removebg-preview.png') }}" class="testimonial-img" alt="">
              <h3>Jude Samuel</h3>
              <h4>Accra, Ghana</h4>
              <p>
                {{-- <i class="bx bxs-quote-alt-right quote-icon-right"></i> --}}
                Healthy chicken, no fats. Keep up the good work!
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="testimonial-item mt-4 mt-lg-0">
              <img src="{{ asset('template/assets/img/testimonials/angie-test.png') }}" class="testimonial-img" alt="">
              <h3>Angie</h3>
              <h4>Accra, Ghana</h4>
              <p>
                The chicken tastes good and natural. Good job.
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="testimonial-item mt-4">
              <img src="{{ asset('template/assets/img/testimonials/bakery-removebg-preview.png') }}" class="testimonial-img" alt="">
              <h3>Auntie Cynthia</h3>
              <h4>Baker, Accra </h4>
              <p>
                The egg yoke is very tick and very good for baking.
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="testimonial-item mt-4">
              <img src="{{ asset('template/assets/img/testimonials/derry-removebg-preview.png') }}" class="testimonial-img" alt="">
              <h3>Derry Wayne</h3>
              <h4>Berekuso</h4>
              <p>
                The eggs are nutritious and healthy and delivery service is top-notch.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->


@include('layouts.footer')