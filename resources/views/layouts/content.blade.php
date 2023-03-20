<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url({{ asset('template/assets/img/slide/hen.jpg') }})">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Anidaso Farms</span></h2>
                <p class="animate__animated animate__fadeInUp">Anidaso farms produce and sell nutritious, high-quality and healthy chicken and eggs to corporate businessess and households at affordable prices. We are the best choice for all your poultry needs. </p>
                <a href="about.html" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url({{ asset('template/assets/img/slide/chicks.jpg') }})">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated fanimate__adeInDown">Karibu, <span>Anidaso Farms</span></h2>
                <p class="animate__animated animate__fadeInUp">We produce our eggs and chicken by incoporating best cultural practices on the farm. We ensure sustainable consumption and production patterns by using natural resources and the natural environment in a proper manner.</p>
                <a href="about.html" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url( {{ asset('template/assets/img/slide/newChicks.jpg') }})">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Akwaaba, <span>Anidaso Farms</span></h2>
                <p class="animate__animated animate__fadeInUp">As part of our hybrid model, we provide an avenue for individuals who are interested to start their poultry farm. This is made possible through our internship program and well-drafted blog post about poultry farm.</p>
                <a href="about.html" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="icon-box">
              <i class="bi bi-egg"></i>
              <h3><a href="">Egg Production</a></h3>
              <p>We produce and sell nutritious
                and healthy eggs to Ghanaians at
                affordable prices. </p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-egg-fried"></i>
              <h3><a href="">Manure Production</a></h3>
              <p>We make local manure for all crop and
                vegetable farmers. Our manure are richly
                organic with no chemical, purely natural. </p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h3><a href="">Chicken Production</a></h3>
              <p>We provide you with high-quality
                locally bred chicken both broilers
                cockerels to our customers, all at
                affordable prices. </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->
    <br />
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
           <!---<img src="assets/img/about.jpg" class="img-fluid" alt="">-->
           <!-- <iframe width="640" height="360" src="assets/img/slide/video_anidaso.mp4" frameborder="0" allowfullscreen></iframe>-->
           <br />
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

    <br />
    
    <br />
    <!-- ======= Services Section ======= -->
    <section id="services" class="services" style="background-color: rgb(226, 247, 232)">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
             <div><img  src="{{ asset('template/assets/img/slide/egg-picture.png') }}" width="150px" height="130px"/></div>
              <br />
              <h4><a href="">Nutritious Eggs</a></h4>
              <p>Our eggs are loaded with high-quality proteins, vitamins, minerals, good fats and various trace nutrients. </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div><img src="{{ asset('template/assets/img/slide/chicken.jpeg') }}" width="150px" height="130px"/></div>
              <br />
              <h4><a href="">Healthy Chicken</a></h4>
              <p>Our chicken are healthy and less-fatty for consumption by households and corporate businesses. </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div><img src="{{ asset('template/assets/img/slide/manure.png') }}" width="150px" height="130px"/></div>
              <br />
              <h4><a href="">Organic Manure</a></h4>
              <p>Our organic manure is more efficient and effective for vegetable and crop farming.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
    <br />
    <br />
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Clients</h2>
          <p>Since our inception, we have been able to serve our clients with nutritious, healthy and high-quality chicken and eggs.</p>
        </div>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('template/assets/img/clients/client-1.jpeg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('template/assets/img/clients/client-2.jpeg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('template/assets/img/clients/avi.jpeg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('template/assets/img/clients/akonnor.jpeg') }}" class="img-fluid" alt=""></div>
            <!--<div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>-->
            <div class="swiper-slide"><img src="{{ asset('template/assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('template/assets/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
           <!--<div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>-->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

  </main><!-- End #main -->