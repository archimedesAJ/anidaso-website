@include('layouts.navbar')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a style="color: white" href="{{ route('welcome') }}">Home</a></li>
          <li style="color: white">Blog</li>
        </ol>
        <h2>Blog</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="{{ asset('template/assets/img/blog/avi.jpg') }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Congratulation 🎉, Anidaso farm has been accepted into Ashesi Venture Incubator (AVI) Program</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ route('our-blog') }}">Grace Yawson</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('our-blog') }}"><time datetime="2020-01-01">August 10, 2022</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{ route('our-blog') }}">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  The Ashesi Venture Incubator is a program of the Ashesi Entrepreneurship Centre (AEC) with funding from the Master Card Fellowship.
                  It is designed with the intention of developing hybrid businesses that are aligned with the Sustainable Development Goals.
                  The incubator model is intentional about the development of hybrid entrepreneurs because it is not enough to just equip this new age of
                  entrepreneurs with the skills to be profitable. To meet the urgent matter of sustainable development in emerging economies, businesses 
                  must also be in the position to deliver some level of social impact, be it through their supply chain processes, sourcing, or inclusive employment practices.
                  
                </p>
                <div class="read-more">
                  <a href="{{ route('our-blog')}}">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="entry-img">
                <img src="{{ asset('template/assets/img/blog/awards.jpeg') }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Anidaso farms wins best Agribusiness at the AEC Business Exhibition</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ route('our-blog')}}">Grace Yawson</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('our-blog') }}"><time datetime="2020-01-01">August 14, 2022</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{ route('our-blog') }}">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Ashesi Entreprenuer Center (AEC) holds a yearly Business Exhibition to provide a platform for alumni businesses to showcase
                  their products and services to potential investors, industry experts and other entreprenuers. On 14th August, 2022, the AEC held
                  a business exhibtion at SB Incubator. At the end of the exhibition, Anidaso farms was adjudged the best Agribusiness with a prize of GHS 10,000.00.
                  
                </p>
                <div class="read-more">
                  <a href="{{ route('our-blog')}}">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            {{-- <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis.
                  Doloremque est saepe laborum aut. Ipsa cupiditate ex harum at recusandae nesciunt. Ut dolores velit.
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry --> --}}

            {{-- <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog/blog-4.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius exercitationem.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Aspernatur rerum perferendis et sint. Voluptates cupiditate voluptas atque quae. Rem veritatis rerum enim et autem. Saepe atque cum eligendi eaque iste omnis a qui.
                  Quia sed sunt. Ea asperiores expedita et et delectus voluptates rerum. Id saepe ut itaque quod qui voluptas nobis porro rerum. Quam quia nesciunt qui aut est non omnis. Inventore occaecati et quaerat magni itaque nam voluptas. Voluptatem ducimus sint id earum ut nesciunt sed corrupti nemo.
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry --> --}}

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

        
        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->


@include('layouts.footer')