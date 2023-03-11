@extends('master')

@section('header')
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown"><a href="#services"><span>Products</span><i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="{{ route('leather')}}"><span>Leather Accessories</span></a>
              </li>
              <li class="dropdown"><a href="{{ route('cycling')}}"><span>Cycling Wear</span></a>
              </li>
              <li class="dropdown"><a href="{{ route('other')}}"><span>Boxing Wear</span> </a>
              </li>
              <li class="dropdown"><a href="{{ route('fitness')}}"><span>Fitness Wear</span> </a>
              </li>
              <li class="dropdown"><a href="{{ route('casual')}}"><span>Casual Wear</span></a>
              </li>
              <li class="dropdown"><a href="{{ route('other1')}}">Fighting Wear</a>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
@endsection