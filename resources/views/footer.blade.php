<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Antonio Sports Well</h3>
              <p>
                Sialkot,Punjab,Pakistan<br><br>
                <strong>Phone:</strong> +92 320 7804828<br>
                <strong>Email:</strong> antoniosportswell@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                
                {{-- <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> --}}
                <a href="https://wa.me/+923207804828" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                <a href="https://instagram.com/antonio_sports_well?igshid=YmMyMTA2M2Y=" class="instagram"><i class="bx bxl-instagram"></i></a>
                
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Information</h4>
            <ul>
              
              @if ($a==0)
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact us</a></li> 
              @endif
              @if ($a==1)
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('index')}}">Home</a></li>  
              @endif
              
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Products</h4>
            <ul>
                <li><i class="bx bx-chevron-right"></i><a href="{{ route('leather')}}">Leather Accessories</a></li>
                <li><i class="bx bx-chevron-right"></i><a href="{{ route('cycling')}}">Cycling Wear</a></li>
                <li><i class="bx bx-chevron-right"></i><a href="{{ route('other')}}">Boxing Wear</a></li>
                <li><i class="bx bx-chevron-right"></i><a href="{{ route('fitness')}}">Fitness Wear</a></li>
                <li><i class="bx bx-chevron-right"></i><a href="{{ route('casual')}}">Casual Wear</a></li>
                <li><i class="bx bx-chevron-right"></i><a href="{{ route('other1')}}">Fighting Wear</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Antonio Sports Well</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>