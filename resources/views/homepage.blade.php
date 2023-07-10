@extends('layouts.template')

@section('judul')
Home
@endsection

@section('hero')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Menyediakan Jasa Top-up game</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Untuk pengguna berbagai macam pengguna game </h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Lanjutkan</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('tema/img/header-blog-promo-voucher-game-gopay-1.jpg')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
@endsection

@section('main')


<main id="main">
<!-- ======= About Section ======= -->
<section id="about" class="about">

  <div class="container" data-aos="fade-up">
    <div class="row gx-0">

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h2>TENTANG KAMI</h2>
          <p>
          Supplier Top Up dari berbagai macam platform dan voucher termurah, terpercaya, tercepat di Indonesia. Gabung menjadi reseller untuk mendapatkan uang dari rumah. Tersedia berbagai macam pembayaran, mulai dari DANA, OVO, GOPAY, QRIS, BCA, dan banyak lainnya.
          </p>
          <div class="text-center text-lg-start">

            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{asset('tema/img/3135715.png')}}" class="img-fluid" alt="">
      </div>

    </div>
  </div>

</section><!-- End About Section -->

<!-- ======= Values Section ======= -->
<section id="values" class="values">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Rekomendasi Top Up Game</h2>
      <p>LAYANAN KAMI</p>
    </header>

    <div class="row">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="box">
          <img src="{{asset('tema/img/415-4153126_promotion-icon-png.png')}}" class="img-fluid" alt="">
          <h3>HARGA MURAH</h3>
          <p>Harga yang kami berikan merupakan harga yang terjangkau di berbagai kalangan dan tentunya dapat menyesuaikan budget anda.</p>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
        <div class="box">
          <img src="{{asset('tema/img/kisspng-percentage-computer-icons-percent-sign-symbol-percentage-5ac0fb0b43cd38.3735099915225966192777.png')}}" class="img-fluid" alt="">
          <h3>PROMOSI-PROMOSI MENARIK</h3>
          <p>Penggemar game dapat bergantung pada Paparazzi karena kami memberikan penawaran menarik, diskon dan kode item dari promosi game yang disukai kamu.</p>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
        <div class="box">
          <img src="{{asset('tema/img/pngwing.com (2).png')}}" class="img-fluid" alt="">
          <h3>BAYAR DALAM HITUNGAN DETIK</h3>
          <p>Hanya dibutuhkan beberapa detik saja untuk menyelesaikan pembayaran di Paparazzi karena situs kami berfungsi dengan baik dan mudah untuk digunakan.</p>
        </div>
      </div>
      
      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
        <div class="box">
          <img src="{{asset('tema/img/wallet-png-25148.png')}}" class="img-fluid" alt="">
          <h3>METODE PEMBAYARAN TERBAIK</h3>
          <p>
          Kami menawarkan begitu banyak pilihan pembayaran mulai dari potong pulsa, e-wallet, bank transfer, dan pembayaran di mini market terdekat.</p>
        </div>
      </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <img src="{{asset('tema/img/kisspng-diamond-stock-photography-clip-art-black-diamond-png-5ab14f98dd0861.6690286315215696889054.png')}}" class="img-fluid" alt="">
            <h3>PENGIRIMAN INSTAN</h3>
            <p>Ketika kamu melakukan top-up di Paparazzi, item atau barang yang kamu beli akan selalu dikirim ke akun kamu secara instan dan cepat, tanpa tertunda.
            </p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
      <div class="box">
        <img src="{{asset('tema/img/customer-service-icon.png')}}" class="img-fluid" alt="">
        <h3>LAYANAN PELANGGAN CEPAT & RAMAH</h3>
        <p>Tim CS terbaik kami selalu siap membantumu kapanpun, di manapun.</p>
      </div>
    </div>

  </div>

</section><!-- End Values Section -->


<!-- ======= Review Konsumen ======= -->
<section id="counts" class="counts">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-emoji-smile"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Konsumen yang suka</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Rating</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-headset" style="color: #15be56;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pelayanan</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-people" style="color: #bb0852;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p></p>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- End Review konsumen -->  

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
              Tempat Top-up terpercaya!! Jangan lupa guys topup hanya di Paparazzi Store. Prosesnya gak ribet dan dipandu sama admin yang fast respon
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
              <h3>Robby Genshin</h3>
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
              First experience topup disini bagus! Cepat, lebih murah, gampang banget stepnya.  Adminnya juga goks wkwk. Bisa langganan nih kedepannya.
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
              <h3>Ayya</h3>
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
              Respon Cepat! adminpun ramah! akhirnya bisa lengkapin skin Project !! makasih min
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
              <h3>Adit</h3>
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
              Hampir setahun topup disini dan terercaya banget, gak nyesel sudah topup disini
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
              <h3>Yanuardi</h3>
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
              Mantul, proses cepat dan aman. Admin juga ramah dan sigap dalam pembalasan pesan
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
              <h3>Bagas</h3>
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
              <p>Jln.Rambutan<br>Tegal, No. 187-203</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-telephone"></i>
              <h3>Telephone</h3>
              <p>+62895422998015</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>paparazzi21@gmail.com</p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" class="php-email-form">
          <div class="row gy-4">
           <img src="{{asset('tema/img/Situs-Top-Up-Game-1.jpg')}}" alt="">
           
@endsection