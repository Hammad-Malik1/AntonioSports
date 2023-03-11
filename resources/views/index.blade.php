<link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href=" {{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="">antoniosportswell@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +92 320 7804828
      </div>
      <div class="social-links d-none d-md-block"> 
        {{-- <a href="#" class="facebook"><i class="bi bi-facebook"></i></a> --}}
        <a href="https://wa.me/+923207804828" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
        <a href="https://instagram.com/antonio_sports_well?igshid=YmMyMTA2M2Y=" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
</section>

@include('header')

<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <!-- <img src="assets/img/favicon.png" alt=""> -->
      <h1>Antonio Sports Well</h1>
      <h2>A unique sense of style like you</h2>
    </div>
  </section>


@include('about')
@include('product')
@include('contact')
@php
  $a=0
@endphp
@include('footer')