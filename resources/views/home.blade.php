@extends('master')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Welcome to E M A</h1>
      <h2>We are looking for the largest and most successful companies around the world</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="bi bi-emoji-smile"></i>
                  <span data-purecounter-start="0" data-purecounter-end="65" class="purecounter">0</span>
                  <p>Writers</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="bi bi-journal-richtext"></i>
                  <span data-purecounter-start="0" data-purecounter-end="85" class="purecounter">0</span>
                  <p>companies</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box pb-5 pt-0 pt-lg-5">
                  <i class="bi bi-clock"></i>
                  <span data-purecounter-start="0" data-purecounter-end="27" class="purecounter">0</span>
                  <p>Years of experience</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box pb-5 pt-0 pt-lg-5">
                  <i class="bi bi-award"></i>
                  <span data-purecounter-start="0" data-purecounter-end="22" class="purecounter">0</span>
                  <p>Awards</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline position-relative">
            <img src="{{  asset('assetss/img/about.jpg')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
            <h3>Big Company Around The World</h3>
            <p class="fst-italic">
                The search for the largest companies in the world has become popular among researchers, so we offer these huge data on the most successful companies around the world
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> The largest technology company in the world.</li>
              <li><i class="bx bx-check-double"></i> The largest car companies in the world.</li>
              <li><i class="bx bx-check-double"></i> The largest mobile phone company in the world.</li>
              <li><i class="bx bx-check-double"></i> We will provide you with huge content about these companies in our blog Website.</li>
            </ul>
            
          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services ">
      <div class="container">

        <div class="section-title pt-5" data-aos="fade-up">
          <h2>Our Category</h2>
        </div>

        <div class="row">
            @foreach ($categories as $category)
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <h4 class="title"><a href="{{'category/' . $category->name}}">{{$category->name}}</a></h4>
              <p class="description">{{$category->discription}}</p>

            </div>
          </div>
          @endforeach          
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
@endsection
