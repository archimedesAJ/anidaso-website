@include('layouts.navbar')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a style="color: white" href="{{ route('welcome') }}">Home</a></li>
          <li style="color: white">Products</li>
        </ol>
        <h2>Products</h2>

      </div>
    </section><!-- End Breadcrumbs -->
    <br />
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
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

    <!-- ======= Our Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container">

        <div class="section-title">
          <!--<h2>Our Skills</h2>-->
          <p> Anidaso Farms intend to add new product portfolio such as <strong style="color: #009961;">Guinea fowl</strong> and <strong style="color:#009961;">turkey</strong> in the coming years. Kindly expect more from Anidaso farms as we strive to serve you better.</p>
        </div>

      </div>
    </section><!-- End Our Skills Section -->

  </main><!-- End #main -->


@include('layouts.footer')