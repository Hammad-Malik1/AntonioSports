<link href="{{asset('assets/img/favicon.png')}}" rel="icon">
<link href=" {{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

@extends('master')

<section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <span>Cycling wear</span>
        <h2>Cycling wear</h2>
        <p>If You Want More Articles, Contact With Admin</p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-Short">Shorts</li>
            <li data-filter=".filter-Glove">Gloves</li>
            <li data-filter=".filter-Bib">Bib-Shorts</li>
            <li data-filter=".filter-jer">Jersey</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

        <div class="col-lg-4 col-md-6 portfolio-item filter-Glove">
          <img src="{{ asset('assets/img/portfolio/cycling/AWS-1934.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Gloves</h4>
            <p>Article No. AWS-1934</p>
            <a href="{{ asset('assets/img/portfolio/cycling/AWS-1934.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-Short">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1947.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4> Shorts</h4>
              <p>Article No. AWS-1947</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1947.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Bib">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1960.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bib-Shorts</h4>
              <p>Article No. AWS-1960</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1960.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Glove">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1935.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Gloves</h4>
              <p>Article No. AWS-1935</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1935.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jer">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1971.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>jersey</h4>
              <p>Article No. AWS-1971</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1971.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Short">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1948.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Shorts</h4>
              <p>Article No. AWS-1948</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1948.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Bib">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1961.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bib-Shorts</h4>
              <p>Article No. AWS-1961</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1961.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Glove">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1936.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Gloves</h4>
              <p>Article No. AWS-1936</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1936.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Short">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1949.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Shorts</h4>
              <p>Article No. AWS-1949</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1949.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Bib">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1962.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bib-Shorts</h4>
              <p>Article No. AWS-1962</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1962.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Glove">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1937.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Gloves</h4>
              <p>Article No. AWS-1937</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1937.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Short">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1950.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Shorts</h4>
              <p>Article No. AWS-1950</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1950.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Bib">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1963.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bib-Shorts</h4>
              <p>Article No. AWS-1963</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1963.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Glove">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1938.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Gloves</h4>
              <p>Article No. AWS-1938</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1938.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Short">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1951.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Shorts</h4>
              <p>Article No. AWS-1951</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1951.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Bib">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1964.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bib-Shorts</h4>
              <p>Article No. AWS-1964</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1964.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Glove">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1939.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Gloves</h4>
              <p>Article No. AWS-1939</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1939.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" ><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Short">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1952.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Shorts</h4>
              <p>Article No. AWS-1952</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1952.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Bib">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1965.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bib-Shorts</h4>
              <p>Article No. AWS-1965</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1965.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Glove">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1940.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Gloves</h4>
              <p>Article No. AWS-1940</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1940.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Short">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1953.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Shorts</h4>
              <p>Article No. AWS-1953</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1953.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Bib">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1966.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bib-Shorts</h4>
              <p>Article No. AWS-1966</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1966.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Glove">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1941.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Gloves</h4>
              <p>Article No. AWS-1941</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1941.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Short">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1954.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Shorts</h4>
              <p>Article No. AWS-1954</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1954.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Bib">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1967.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bib-Shorts</h4>
              <p>Article No. AWS-1967</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1967.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Glove">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1942.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Gloves</h4>
              <p>Article No. AWS-1942</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1942.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Short">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1955.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Shorts</h4>
              <p>Article No. AWS-1955</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1955.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Bib">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1968.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bib-Shorts</h4>
              <p>Article No. AWS-1968</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1968.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Glove">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1943.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Gloves</h4>
              <p>Article No. AWS-1943</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1943.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Short">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1956.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Shorts</h4>
              <p>Article No. AWS-1956</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1956.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Bib">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1969.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bib-Shorts</h4>
              <p>Article No. AWS-1969</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1969.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Glove">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1944.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Gloves</h4>
              <p>Article No. AWS-1944</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1944.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Short">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1957.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Shorts</h4>
              <p>Article No. AWS-1957</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1957.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Bib">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1970.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bib-Shorts</h4>
              <p>Article No. AWS-1970</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1970.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Glove">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1945.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Gloves</h4>
              <p>Article No. AWS-1945</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1945.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" ><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Short">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1958.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Shorts</h4>
              <p>Article No. AWS-1958</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1958.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" ><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Glove">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1946.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Gloves</h4>
              <p>Article No. AWS-1946</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1946.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" ><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Short">
            <img src="{{ asset('assets/img/portfolio/cycling/AWS-1959.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Shorts</h4>
              <p>Article No. AWS-1959</p>
              <a href="{{ asset('assets/img/portfolio/cycling/AWS-1959.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>



      </div>

    </div>
  </section>
  @php
  $a=1
@endphp
  @include('footer')