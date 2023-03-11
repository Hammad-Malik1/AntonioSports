<link href="{{asset('assets/img/favicon.png')}}" rel="icon">
<link href=" {{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

@extends('master')

<section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <span>Casual Wear</span>
        <h2>Casual Wear</h2>
        <p>If You Want More Articles, Contact With Admin</p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-tshirt">T-Shirts</li>
            <li data-filter=".filter-jacket">Jackets</li>
            <li data-filter=".filter-polo">Polo Shirts</li>
            <li data-filter=".filter-trouser">Trousers</li>
            <li data-filter=".filter-hoodie">Hoodies</li>
            <li data-filter=".filter-sweat">Sweat Shirts</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

        <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
          <img src="{{ asset('assets/img/portfolio/casual/AWS-2026.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>T-Shirts</h4>
            <p>Article No. AWS-2026</p>
            <a href="{{ asset('assets/img/portfolio/casual/AWS-2026.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-trouser">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2059.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Trousers</h4>
              <p>Article No. AWS-2059</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2059.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sweat">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2071.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sweat Shirts</h4>
              <p>Article No. AWS-2071</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2071.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-polo">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2050.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Polo Shirts</h4>
              <p>Article No. AWS-2050</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2050.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2081.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2081</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2081.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-hoodie">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2109.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hoodies</h4>
              <p>Article No. AWS-2109</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2109.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2104.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2104</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2104.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2027.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2027</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2027.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-trouser">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2060.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Trousers</h4>
              <p>Article No. AWS-2060</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2060.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sweat">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2072.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sweat Shirts</h4>
              <p>Article No. AWS-2072</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2072.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-polo">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2051.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Polo Shirts</h4>
              <p>Article No. AWS-2051</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2051.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2082.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2082</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2082.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" ><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-hoodie">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2110.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hoodie</h4>
              <p>Article No. AWS-2110</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2110.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2105.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2105</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2105.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2028.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2028</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2028.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-trouser">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2061.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Trousers</h4>
              <p>Article No. AWS-2061</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2061.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sweat">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2073.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sweat Shirts</h4>
              <p>Article No. AWS-2073</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2073.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-polo">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2052.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Polo Shirts</h4>
              <p>Article No. AWS-2052</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2052.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2083.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2083</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2083.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-hoodie">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2111.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hoodies</h4>
              <p>Article No. AWS-2111</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2111.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2106.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2106</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2106.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2029.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2029</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2029.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-trouser">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2062.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Trousers</h4>
              <p>Article No. AWS-2062</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2062.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sweat">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2074.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sweat Shirts</h4>
              <p>Article No. AWS-2074</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2074.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-polo">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2053.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Polo Shirts</h4>
              <p>Article No. AWS-2053</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2053.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2084.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2084</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2084.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-hoodie">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2112.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hoodies</h4>
              <p>Article No. AWS-2112</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2112.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2107.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2107</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2107.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2030.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2030</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2030.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-trouser">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2063.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Trousers</h4>
              <p>Article No. AWS-2063</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2063.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" ><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sweat">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2075.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sweat Shirts</h4>
              <p>Article No. AWS-2075</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2075.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" ><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-polo">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2054.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Polo Shirts</h4>
              <p>Article No. AWS-2054</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2054.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" ><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2085.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2085</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2085.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-hoodie">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2113.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hoodies</h4>
              <p>Article No. AWS-2113</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2113.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2108.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2108</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2108.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2031.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2031</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2031.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-trouser">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2064.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Trousers</h4>
              <p>Article No. AWS-2064</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2064.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sweat">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2076.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sweat Shirts</h4>
              <p>Article No. AWS-2076</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2076.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-polo">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2055.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Polo Shirts</h4>
              <p>Article No. AWS-2055</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2055.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2086.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2086</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2086.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-hoodie">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2114.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hoodies</h4>
              <p>Article No. AWS-2114</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2114.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2032.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2032</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2032.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-trouser">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2065.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Trousers</h4>
              <p>Article No. AWS-2065</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2065.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sweat">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2077.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sweat Shirts</h4>
              <p>Article No. AWS-2077</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2077.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-polo">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2056.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Polo Shirts</h4>
              <p>Article No. AWS-2056</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2056.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2087.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2087</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2087.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-hoodie">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2115.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hoodies</h4>
              <p>Article No. AWS-2115</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2115.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2033.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2033</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2033.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-trouser">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2066.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Trousers</h4>
              <p>Article No. AWS-2066</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2066.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sweat">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2078.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sweat Shirts</h4>
              <p>Article No. AWS-2078</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2078.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-polo">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2057.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Polo Shirts</h4>
              <p>Article No. AWS-2057</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2057.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2088.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2088</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2088.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-hoodie">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2116.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hoodies</h4>
              <p>Article No. AWS-2116</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2116.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2034.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2034</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2034.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-trouser">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2067.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Trousers</h4>
              <p>Article No. AWS-2067</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2067.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sweat">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2079.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sweat Shirts</h4>
              <p>Article No. AWS-2079</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2079.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-polo">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2058.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Polo Shirts</h4>
              <p>Article No. AWS-2058</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2058.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2089.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2089</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2089.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-hoodie">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2117.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hoodies</h4>
              <p>Article No. AWS-2117</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2117.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2035.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2035</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2035.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-trouser">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2068.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Trousers</h4>
              <p>Article No. AWS-2068</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2068.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sweat">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2080.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sweat Shirts</h4>
              <p>Article No. AWS-2080</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2080.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2090.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2090</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2090.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-hoodie">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2118.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hoodies</h4>
              <p>Article No. AWS-2118</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2118.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2036.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2036</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2036.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-trouser">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2069.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Trousers</h4>
              <p>Article No. AWS-2069</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2069.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2091.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2091</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2091.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-hoodie">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2119.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hoodies</h4>
              <p>Article No. AWS-2119</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2119.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2037.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2037</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2037.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-trouser">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2070.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Trousers</h4>
              <p>Article No. AWS-2070</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2070.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2092.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2092</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2092.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-hoodie">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2120.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hoodies</h4>
              <p>Article No. AWS-2120</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2120.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2038.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2038</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2038.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2093.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2093</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2093.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-hoodie">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2121.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hoodies</h4>
              <p>Article No. AWS-2121</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2121.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2039.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2039</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2039.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2094.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2094</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2094.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-hoodie">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2122.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hoodies</h4>
              <p>Article No. AWS-2122</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2122.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2040.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2040</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2040.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2095.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2095</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2095.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2041.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2041</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2041.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2096.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2096</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2096.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2042.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2042</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2042.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2097.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2097</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2097.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2043.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2043</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2043.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2098.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2098</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2098.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2044.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2044</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2044.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2099.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2099</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2099.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2045.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2045</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2045.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2100.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2100</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2100.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2046.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2046</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2046.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2101.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2101</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2101.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2047.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2047</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2047.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2102.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2102</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2102.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tshirt">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2048.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>T-Shirts</h4>
              <p>Article No. AWS-2048</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2048.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jacket">
            <img src="{{ asset('assets/img/portfolio/casual/AWS-2103.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jackets</h4>
              <p>Article No. AWS-2103</p>
              <a href="{{ asset('assets/img/portfolio/casual/AWS-2103.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          



      </div>

    </div>
  </section>
@php
  $a=1
@endphp
  @include('footer')