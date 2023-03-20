@include('layouts.navbar')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a style="color: white" href="{{ route('welcome') }}">Home</a></li>
          <li style="color: white">About Us</li>
        </ol>
        <h2>Our Values</h2>

      </div>
    </section><!-- End Breadcrumbs -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
            <h2>Our Core Values </h2>
            <p>We are characterised by our core values and we therefore hold on dearly onto them. <br/> We do not comprise on these values as far business operations are concern.</p>
        </div>
        <div class="row no-gutters">

          <div class="col-lg-4 box">
            <!--<h3>Free</h3>-->
            <h4><i class="bi bi-cash"></i><span>Affordability</span></h4>
            <p>We always take into consideration
              purchasing power of our customers.
              Therefore, with cost-effective production,
              our nutritious and high-quality products
              are very affordable to all.  </p>
           
          </div>
          
          <div class="col-lg-4 box featured">
           
            <h4><i class="bi bi-hand-thumbs-up-fill"></i><span>High-Quality</span></h4>
          
            <p>Our products are of high-quality.
              We always seek to ensure that
              our cherished customers are served
              the best products and are
              satisfied whenever they buy from us. </p>
           
          </div>
          
          <div class="col-lg-4 box">
            
            <h4><i class="bi bi-water"></i><span>Sustainability</span></h4>
            <p>
              We make sure our daily operations
              do not deteriment the environment
              and the people we are serving. We strive
              to protect the natural environment from
              any form of degration.  </p>
            
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

@include('layouts.footer')