@include('layouts.navbar')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a style="color: white" href="{{ route('welcome') }}">Home</a></li>
          <li style="color: white">Portfolio</li>
        </ol>
        <h2>Portfolio</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Exhibition</li>
              <li data-filter=".filter-card"> Farm Photos</li>
              <li data-filter=".filter-web">Engagements</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('template/assets/img/portfolio/exhibit1.jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Exhibition 1</h4>
                <p>Exhibition</p>
                <div class="portfolio-links">
                  <a href="{{ asset('template/assets/img/portfolio/exhibit1.jpeg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('template/assets/img/portfolio/awards.jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Engagements 1</h4>
                <p>Engagements</p>
                <div class="portfolio-links">
                  <a href="{{ asset('template/assets/img/portfolio/awards.jpeg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('template/assets/img/portfolio/exhibit1.JPG') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Exhibition 2</h4>
                <p>Exhibition</p>
                <div class="portfolio-links">
                  <a href="{{ asset('template/assets/img/portfolio/exhibit1.JPG') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('template/assets/img/portfolio/IMG_3784.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Farm Photo</h4>
                <p>Farm Photo</p>
                <div class="portfolio-links">
                  <a href="{{ asset('template/assets/img/portfolio/IMG_3784.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('template/assets/img/portfolio/avi.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Engagements 2</h4>
                <p>Engagements</p>
                <div class="portfolio-links">
                  <a href="{{ asset('template/assets/img/portfolio/avi.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('template/assets/img/portfolio/exhibit2.jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Exhibition 3</h4>
                <p>Exhibition</p>
                <div class="portfolio-links">
                  <a href="{{ asset('template/assets/img/portfolio/exhibit2.jpeg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('template/assets/img/portfolio/IMG_3783.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Farm Photo 1</h4>
                <p>Farm Photo</p>
                <div class="portfolio-links">
                  <a href="{{ asset('template/assets/img/portfolio/IMG_3783.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('template/assets/img/portfolio/IMG_4094.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Farm Photo 3</h4>
                <p>Farm Photo</p>
                <div class="portfolio-links">
                  <a href="{{ asset('template/assets/img/portfolio/IMG_4094.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('template/assets/img/portfolio/flyer.jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Engagements 3</h4>
                <p>Engagements</p>
                <div class="portfolio-links">
                  <a href="{{ asset('template/assets/img/portfolio/flyer.jpeg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->


  </main><!-- End #main -->
@include('layouts.footer')