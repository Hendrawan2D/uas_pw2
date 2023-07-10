@extends('layouts.template')

@section('Jajanan')

@endsection

@section('main')

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">

    <div class="container" data-aos="fade-up">
  
      <header class="section-header">
        <P>OLEH OLEH JAJANAN KHAS TEGAL</P>
        <br>
        <h2> Merekomendasikan Jajanan Khas Tegal</h2>
      </header>
  
      <div class="row gy-4" data-aos="fade-left">
  
        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="box">
            <h3 style="color: #07d5c0;">Manisan Pepaya</h3>
            <div class="price"><sup>RP 10.000<span> / Bumgkus</span></div>
            <img src="{{asset('tema/img/pepaya.jpg')}}" class="img-fluid" alt="">
            <ul>
              <li>Manisan Yang berwarna Warni seperti pelangi</li>
            </ul>
           <a href="https://wa.me/6285998028730" class="btn-buy">PESAN</a>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="box">
            <h3 style="color: #65c600;">Tahu Aci Benjaran
              <br>
              (Rekomendasi)</h3>
            <div class="price"><sup>RP 1.000<span> / Butir</span></div>
            <img src="{{asset('tema/img/tahu.jpg')}}" class="img-fluid" alt="">
            <ul>
              <li>Kegurihan Yang amat Dalam</li>
            </ul>
            <a href="https://wa.me/6285998028730" class="btn-buy">PESAN</a>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="box">
            <h3 style="color: #ff901c;">Kerupuk Jatilawang</h3>
            <div class="price"><sup>RP 55.000 <span> / Ball</span></div>
            <img src="{{asset('tema/img/kerupuk.jpg')}}" class="img-fluid" alt="">
            <ul>
              <li>Kerupuk Bukan sembarang Kerupuk</li>
            </ul>
            <a href="https://wa.me/6285998028730" class="btn-buy">PESAN</a>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="box">
            <h3 style="color: #ff0071;">Bakpia</h3>
            <div class="price"><sup>RP 20.000 <span> / Bungkus</span></div>
            <img src="{{asset('tema/img/bakpia.jpg')}}" class="img-fluid" alt="">
            <ul>
              <li>Makin kedalam Makin Lembut</li>
            
            </ul>
            <a href="https://wa.me/6285998028730" class="btn-buy">PESAN</a>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="box">
            <h3 style="color: #07d5c0;">SIGRA</h3>
            <div class="price"><sup>RP. 350.000 <span> / 24 Jam</span></div>
            <img src="{{asset('tema/img/sigra.png')}}" class="img-fluid" alt="">
            <ul>
              <li>Kapasitas 7 Orang</li>
            </ul>
            <a href="https://wa.me/6285998028730" class="btn-buy">PESAN</a>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="box">
            <h3 style="color: #cb07d5;">MOBILIO</h3>
            <div class="price"><sup>RP. 400.000 <span> / 24 Jam</span></div>
            <img src="{{asset('tema/img/mobilio.png')}}" class="img-fluid" alt="">
            <ul>
              <li>Kapasitas 7 Orang</li>
            </ul>
            <a href="https://wa.me/6285998028730" class="btn-buy">PESAN</a>
          </div>
        </div>
      </div>

    </div>
  
  </section><!-- End Pricing Section -->
 
<!-- ======= Testimonial Konsumen ======= -->
<section id="testimonials" class="testimonials">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <p>TESTIMONI</p>
      <br>
      <h2>Beberapa Pelanggan yang telah merasakan kepuasan layanan kami</h2>
    </header>

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- End Testimonials Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <p>HUBUNGI KAMI</p>
    </header>

    <div class="row gy-4">

      <div class="col-lg-6">

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>Jln.Teuku Umar<br>Tegal, No. 187-203</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-telephone"></i>
              <h3>Telephone</h3>
              <p>+6285998028730</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>ziirentalmobil12@gmail.com</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-clock"></i>
              <h3>Jam Buka</h3>
              <p>Senin - Jumat<br>9:00 - 19.00</p>
              <br>
              <p> Sabtu - Minggu<br>08.00 - 22.00</p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" class="php-email-form">
          <div class="row gy-4">
           <img src="{{asset('tema/img/rental-mobil.png')}}" alt="">
             
@endsection