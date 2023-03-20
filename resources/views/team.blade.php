@include('layouts.navbar')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a style="color: white" href="{{ route('welcome') }}">Home</a></li>
          <li style="color: white">Team</li>
        </ol>
        <h2>Team</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
            <h2>Meet Our Team</h2>
            <p>From diverse backgrounds with unique skill set and expertise to drive the vision of Anidaso farms. <br/> We are motivated to make food accessible to all.</p>
        </div>
        
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img width="160px" src="{{ asset('template/assets/img/team/abraham-removebg-preview.png') }}" alt="">
              <h4 style="color: #009961">Abraham Junior Abbey</h4>
              <span style="font-size: 0.95rem ;font-weight: bold">Founder & CEO</span>
              <p>
                Agriprenuer with over 2 years experience in <br/>
                building agribusinesses in Ghana. Equipped<br>
                with entrepreneurship skills, he oversees <br/>
                the vision and implementations of Anidaso farms.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
                <img width="160px" src="{{ asset('template/assets/img/team/mary-removebg-preview.png') }}" alt="">
              <h4 style="color: #009961">Mary Domfeh</h4>
              <span style="font-size: 0.95rem ; font-weight: bold">Partner</span>
              <p>
                A software engineer and agriculture enthusiast. <br/>
                She is a co-founder of yonko pig farms. She works <br/>
                as a software engineer at Goldman Sachs, UK. <br/>
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
                <img width="160px" src="{{ asset('template/assets/img/team/honest-removebg-preview.png') }}" alt="">
              <h4 style="color: #009961">Abraham Honest</h4>
              <span style="font-size: 0.95rem ; font-weight: bold">Farm Manager</span>
              <p>
                Expert crop and poultry farmer with over 20 <br />
                years experience in farm management. He currently <br/>
                manages the day-to-day activities at Anidaso farms.<br/>
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
                <img width="160px" src="{{ asset('template/assets/img/team/grace_yawson-removebg-preview.png') }}" alt="">
              <h4 style="color: #009961">Grace Yawson</h4>
              <span style="font-size: 0.95rem ; font-weight: bold">Marketing & Sales</span>
              <p>
                A marketing and sales expert with over 2 <br/> 
                years experience. She holds a diploma in<br /> 
                Marketing. She handles Anidaso farms marketing <br/>
                and sales tasks. 
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img width="160px" src="{{ asset('template/assets/img/team/angie-removebg-preview.png') }}" alt="">
              <h4 style="color: #009961">Angelina Asenso-Addo, MBA</h4>
              <span style="font-size: 0.95rem ; font-weight: bold">Advisor</span>
              <p>
                Experienced Human Capital Management <br/> Professional with over 15 years of hands-on <br/> experience in Business Administration, Process <br/> improvement and Business Strategy for start-ups.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img width="160px" src="{{ asset('template/assets/img/team/jude-removebg-preview.png') }}" alt="">
              <h4 style="color: #009961">Jude Samuel Acquah</h4>
              <span style="font-size: 0.95rem ; font-weight: bold">Advisor</span>
              <p>
                Education, Public Policy and Development expert. He<br/>
                is also an outreach and experential manager at <br/> 
                Ashesi Univeristy. He currently serves as an <br/>
                advisor for Anidaso farms. 
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

@include('layouts.footer')