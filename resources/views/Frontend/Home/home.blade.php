@extends('layouts.app')
@section('content')
    

    <!-- HEADER -->
    <header class="jumbotron bg-theme-v5">
      <div class="bg-overlay"></div>
      <!-- NAVBAR -->
      @include('layouts.header')
      <!-- END NAVBAR -->
           <!-- HERO -->
           <div class="wrap__intro d-flex align-items-md-center  ">
            <div class="container  ">
                <div class="row align-items-center justify-content-start flex-wrap">
                    <div class="col-lg-12 mx-auto">
                        <div class="wrap__intro-heading" data-aos="fade-up">
      
                            <h1 class="text-capitalize">
                                Find your dream house </h1>
                            <p>Your Property, Our Priority and From as low as $10 per day with limited time offer
                                discounts</p>
      
                            <div class="bg__overlay-black p-4">
                                <div class="search__property">
                                    <div class="position-relative">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade active show" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                                                <div class=" search__container">
                                                    <div class="row input-group no-gutters">
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option selected="">Type Property</option>
                                                                <option>House</option>
                                                                <option>Apartement </option>
                                                                <option>Hotel</option>
                                                                <option>Residential</option>
                                                                <option>Land</option>
                                                                <option>Luxury</option>
      
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Area From">Area From </option>
                                                                <option>1500</option>
                                                                <option>1200</option>
                                                                <option>900</option>
                                                                <option>600</option>
                                                                <option>300</option>
                                                                <option>100</option>
      
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Bedrooms">Bedrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
      
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Bathrooms">Bathrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
      
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Locations">Locations</option>
                                                                <option>United Kingdom</option>
                                                                <option>American Samoa</option>
                                                                <option>Belgium</option>
                                                                <option>Canada</option>
                                                                <option>Delaware</option>
      
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 input-group-append">
                                                            <button class="btn btn-primary btn-block" type="submit">
                                                                <i class="fa fa-search"></i> <span class="ml-1 text-uppercase">search</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                                                <div class=" search__container">
                                                    <div class="row input-group no-gutters">
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option selected="">Type Property</option>
                                                                <option>House</option>
                                                                <option>Apartement </option>
                                                                <option>Hotel</option>
                                                                <option>Residential</option>
                                                                <option>Land</option>
                                                                <option>Luxury</option>
      
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Area From">Area From </option>
                                                                <option>1500</option>
                                                                <option>1200</option>
                                                                <option>900</option>
                                                                <option>600</option>
                                                                <option>300</option>
                                                                <option>100</option>
      
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Bedrooms">Bedrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
      
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Bathrooms">Bathrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
      
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Locations">Locations</option>
                                                                <option>United Kingdom</option>
                                                                <option>American Samoa</option>
                                                                <option>Belgium</option>
                                                                <option>Canada</option>
                                                                <option>Delaware</option>
      
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 input-group-append">
                                                            <button class="btn btn-primary btn-block" type="submit">
                                                                <i class="fa fa-search"></i> <span class="ml-1 text-uppercase">search</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
             <!--End HERO -->
    </header>
    <!-- END HEADER -->

    {{-- Conten section --}}
        <!-- POPULAR CITY -->
        <section class="popular__city-large">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <div class="title__head-v2">
                          <h2 class="text-capitalize">popular city</h2>
                          <p class="text-capitalize mb-0">Find Properties In These Cities.</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6 col-lg-3">
                      <!-- CARD IMAGE -->
                      <a href="#">
                          <div class="card__image-hover-style-v3">
                              <div class="card__image-hover-style-v3-thumb h-230">
                                  <img src="{{asset('assets/images/city4-1.jpg')}}"  alt="" class="img-fluid w-100">
                              </div>
                              <div class="overlay">
                                  <div class="desc">
                                      <h6 class="text-capitalize">rome</h6>
                                      <p class="text-capitalize">70 properties</p>
                                  </div>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-3">
                      <!-- CARD IMAGE -->
                      <a href="#">
                          <div class="card__image-hover-style-v3">
                              <div class="card__image-hover-style-v3-thumb h-230">
                                  <img src="{{asset('assets/images/city5-1.jpg')}}" alt="" class="img-fluid w-100">
                              </div>
                              <div class="overlay">
                                  <div class="desc">
                                      <h6 class="text-capitalize">australia</h6>
                                      <p class="text-capitalize">70 properties</p>
                                  </div>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-3">
                      <!-- CARD IMAGE -->
                      <a href="#">
                          <div class="card__image-hover-style-v3">
                              <div class="card__image-hover-style-v3-thumb h-230">
                                  <img src="{{asset('assets/images/city6-1.jpg')}}" alt="" class="img-fluid w-100">
                              </div>
                              <div class="overlay">
                                  <div class="desc">
                                      <h6 class="text-capitalize">indonesia</h6>
                                      <p class="text-capitalize">70 properties</p>
                                  </div>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-3">
                      <!-- CARD IMAGE -->
                      <a href="#">
                          <div class="card__image-hover-style-v3">
                              <div class="card__image-hover-style-v3-thumb h-230">
                                  <img src="{{asset('assets/images/city7-1.jpg')}}" alt="" class="img-fluid w-100">
                              </div>
                              <div class="overlay">
                                  <div class="desc">
                                      <h6 class="text-capitalize">paris</h6>
                                      <p class="text-capitalize">70 properties</p>
                                  </div>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
      </section>
      <!-- END POPULAR CITY -->
  
  
  
      <!-- FEATURED PROPERTY -->
      <section class="recent__property pt-0">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <div class="title__head-v2">
                          <h2 class="text-capitalize">featured property</h2>
                          <p class="text-capitalize">Handpicked Exclusive Properties By Our Team.</p>
                      </div>
                  </div>
              </div>
              <div class="recent__property-carousel owl-carousel owl-theme">
                  <div class="item">
                      <!-- CARD IMAGE -->
  
                      <a href="{{route('detailProperty')}}">
                          <div class="card__image-hover h-250">
                              <div class="card__image-hover-overlay">
                                  <div class="listing-badges">
                                      <span class="featured">
                                          Featured
                                      </span>
                                      <span>
                                          For Rent
                                      </span>
                                  </div>
                                  <div class="card__image-content">
                                      <div class="card__image-content-desc">
                                          <h6> Citra Garden Estate</h6>
                                          <p class="mb-0"> $1300 / monthly</p>
                                      </div>
                                      <ul class="list-inline card__hidden-content">
                                          <li class="list-inline-item">
                                              Baths
                                              <span>
                                                  <i class="fa fa-bath"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Beds
                                              <span>
                                                  <i class="fa fa-bed"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Rooms
                                              <span>
                                                  <i class="fa fa-inbox"></i> 3
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Area
                                              <span>
                                                  <i class="fa fa-map"></i> 1450 sq ft
                                              </span>
                                          </li>
  
                                      </ul>
                                  </div>
                                  <img alt="" src="{{asset('assets/images/gallery18-3.jpg')}}" class="img-fluid h-40 ">
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="item">
                      <!-- CARD IMAGE -->
                      <a href="{{route('detailProperty')}}">
                          <div class="card__image-hover h-250">
                              <div class="card__image-hover-overlay">
                                  <div class="listing-badges">
                                      <span class="featured">
                                          Featured
                                      </span>
                                      <span>
                                          For Rent
                                      </span>
                                  </div>
                                  <div class="card__image-content">
                                      <div class="card__image-content-desc">
                                          <h6> Ample Apartment At Last Floor</h6>
                                          <p class="mb-0"> $1300 / monthly</p>
                                      </div>
                                      <ul class="list-inline card__hidden-content">
                                          <li class="list-inline-item">
                                              Baths
                                              <span>
                                                  <i class="fa fa-bath"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Beds
                                              <span>
                                                  <i class="fa fa-bed"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Rooms
                                              <span>
                                                  <i class="fa fa-inbox"></i> 3
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Area
                                              <span>
                                                  <i class="fa fa-map"></i> 1450 sq ft
                                              </span>
                                          </li>
  
                                      </ul>
                                  </div>
                                  <img alt="" src="{{asset('assets/images/gallery16-3.jpg')}}" class="img-fluid h-40 ">
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="item">
                      <a href="#">
                          <div class="card__image-hover h-250">
                              <div class="card__image-hover-overlay">
                                  <div class="listing-badges">
                                      <span class="featured">
                                          Featured
                                      </span>
                                      <span>
                                          For Rent
                                      </span>
                                  </div>
                                  <div class="card__image-content">
                                      <div class="card__image-content-desc">
                                          <h6> Contemporary Apartment</h6>
                                          <p class="mb-0"> $1300 / monthly</p>
                                      </div>
                                      <ul class="list-inline card__hidden-content">
                                          <li class="list-inline-item">
                                              Baths
                                              <span>
                                                  <i class="fa fa-bath"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Beds
                                              <span>
                                                  <i class="fa fa-bed"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Rooms
                                              <span>
                                                  <i class="fa fa-inbox"></i> 3
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Area
                                              <span>
                                                  <i class="fa fa-map"></i> 1450 sq ft
                                              </span>
                                          </li>
  
                                      </ul>
                                  </div>
                                  <img alt="" src="{{asset('assets/images/gallery17-4.jpg')}}" class="img-fluid h-40 ">
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="item">
                      <a href="{{route('detailProperty')}}">
                          <div class="card__image-hover h-250">
                              <div class="card__image-hover-overlay">
                                  <div class="listing-badges">
                                      <span class="featured">
                                          Featured
                                      </span>
                                      <span>
                                          For Rent
                                      </span>
                                  </div>
                                  <div class="card__image-content">
                                      <div class="card__image-content-desc">
                                          <h6> Family Home For Sale</h6>
                                          <p class="mb-0"> $1300 / monthly</p>
                                      </div>
                                      <ul class="list-inline card__hidden-content">
                                          <li class="list-inline-item">
                                              Baths
                                              <span>
                                                  <i class="fa fa-bath"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Beds
                                              <span>
                                                  <i class="fa fa-bed"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Rooms
                                              <span>
                                                  <i class="fa fa-inbox"></i> 3
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Area
                                              <span>
                                                  <i class="fa fa-map"></i> 1450 sq ft
                                              </span>
                                          </li>
  
                                      </ul>
                                  </div>
                                  <img alt="" src="{{asset('assets/images/gallery2-4.jpg')}}" class="img-fluid h-40 ">
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="item">
                      <a href="{{route('detailProperty')}}">
                          <div class="card__image-hover h-250">
                              <div class="card__image-hover-overlay">
                                  <div class="listing-badges">
                                      <span class="featured">
                                          Featured
                                      </span>
                                      <span>
                                          For Rent
                                      </span>
                                  </div>
                                  <div class="card__image-content">
                                      <div class="card__image-content-desc">
                                          <h6> Luxury Villa With Pool</h6>
                                          <p class="mb-0"> $1300 / monthly</p>
                                      </div>
                                      <ul class="list-inline card__hidden-content">
                                          <li class="list-inline-item">
                                              Baths
                                              <span>
                                                  <i class="fa fa-bath"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Beds
                                              <span>
                                                  <i class="fa fa-bed"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Rooms
                                              <span>
                                                  <i class="fa fa-inbox"></i> 3
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Area
                                              <span>
                                                  <i class="fa fa-map"></i> 1450 sq ft
                                              </span>
                                          </li>
  
                                      </ul>
                                  </div>
                                  <img alt="" src="{{asset('assets/images/gallery9-4.jpg')}}" class="img-fluid h-40 ">
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="item">
                      <a href="{{route('detailProperty')}}">
                          <div class="card__image-hover h-250">
                              <div class="card__image-hover-overlay">
                                  <div class="listing-badges">
                                      <span class="featured">
                                          Featured
                                      </span>
                                      <span>
                                          For Rent
                                      </span>
                                  </div>
                                  <div class="card__image-content">
                                      <div class="card__image-content-desc">
                                          <h6> 184 Lexington Avenue</h6>
                                          <p class="mb-0"> $1300 / monthly</p>
                                      </div>
                                      <ul class="list-inline card__hidden-content">
                                          <li class="list-inline-item">
                                              Baths
                                              <span>
                                                  <i class="fa fa-bath"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Beds
                                              <span>
                                                  <i class="fa fa-bed"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Rooms
                                              <span>
                                                  <i class="fa fa-inbox"></i> 3
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Area
                                              <span>
                                                  <i class="fa fa-map"></i> 1450 sq ft
                                              </span>
                                          </li>
  
                                      </ul>
                                  </div>
                                  <img alt="" src="{{asset('assets/images/gallery10-3.jpg')}}" class="img-fluid h-40 ">
                              </div>
                          </div>
                      </a>
                  </div>
  
              </div>
          </div>
      </section>
      <!-- END FEATURED PROPERTY -->
  
  
  
      <!-- RECENTS CITY -->
      <section class="recent__property pt-0">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <div class="title__head-v2">
                          <h2 class="text-capitalize">recent property</h2>
                          <p class="text-capitalize">Handpicked Exclusive Properties By Our Team.</p>
                      </div>
                  </div>
              </div>
              <div class="recent__property-carousel owl-carousel owl-theme">
                  <div class="item">
                      <a href="#">
                          <div class="card__image-hover h-250">
                              <div class="card__image-hover-overlay">
                                  <div class="listing-badges">
                                      <span class="featured">
                                          Featured
                                      </span>
                                      <span>
                                          For Rent
                                      </span>
                                  </div>
                                  <div class="card__image-content">
                                      <div class="card__image-content-desc">
                                          <h6> 184 Lexington Avenue</h6>
                                          <p class="mb-0"> $1300 / monthly</p>
                                      </div>
                                      <ul class="list-inline card__hidden-content">
                                          <li class="list-inline-item">
                                              Baths
                                              <span>
                                                  <i class="fa fa-bath"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Beds
                                              <span>
                                                  <i class="fa fa-bed"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Rooms
                                              <span>
                                                  <i class="fa fa-inbox"></i> 3
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Area
                                              <span>
                                                  <i class="fa fa-map"></i> 1450 sq ft
                                              </span>
                                          </li>
  
                                      </ul>
                                  </div>
                                  <img alt="" src="{{asset('assets/images/gallery10-3.jpg')}}" class="img-fluid h-40 ">
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="item">
                      <a href="{{route('detailProperty')}}">
                          <div class="card__image-hover h-250">
                              <div class="card__image-hover-overlay">
                                  <div class="listing-badges">
                                      <span class="featured">
                                          Featured
                                      </span>
                                      <span>
                                          For Rent
                                      </span>
                                  </div>
                                  <div class="card__image-content">
                                      <div class="card__image-content-desc">
                                          <h6> Luxury Villa With Pool</h6>
                                          <p class="mb-0"> $1300 / monthly</p>
                                      </div>
                                      <ul class="list-inline card__hidden-content">
                                          <li class="list-inline-item">
                                              Baths
                                              <span>
                                                  <i class="fa fa-bath"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Beds
                                              <span>
                                                  <i class="fa fa-bed"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Rooms
                                              <span>
                                                  <i class="fa fa-inbox"></i> 3
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Area
                                              <span>
                                                  <i class="fa fa-map"></i> 1450 sq ft
                                              </span>
                                          </li>
  
                                      </ul>
                                  </div>
                                  <img alt="" src="{{asset('assets/images/gallery9-4.jpg')}}" class="img-fluid h-40 ">
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="item">
                      <a href="{{route('detailProperty')}}">
                          <div class="card__image-hover h-250">
                              <div class="card__image-hover-overlay">
                                  <div class="listing-badges">
                                      <span class="featured">
                                          Featured
                                      </span>
                                      <span>
                                          For Rent
                                      </span>
                                  </div>
                                  <div class="card__image-content">
                                      <div class="card__image-content-desc">
                                          <h6> Family Home For Sale</h6>
                                          <p class="mb-0"> $1300 / monthly</p>
                                      </div>
                                      <ul class="list-inline card__hidden-content">
                                          <li class="list-inline-item">
                                              Baths
                                              <span>
                                                  <i class="fa fa-bath"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Beds
                                              <span>
                                                  <i class="fa fa-bed"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Rooms
                                              <span>
                                                  <i class="fa fa-inbox"></i> 3
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Area
                                              <span>
                                                  <i class="fa fa-map"></i> 1450 sq ft
                                              </span>
                                          </li>
  
                                      </ul>
                                  </div>
                                  <img alt="" src="{{asset('assets/images/gallery2-4.jpg')}}" class="img-fluid h-40 ">
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="item">
                      <a href="{{route('detailProperty')}}">
                          <div class="card__image-hover h-250">
                              <div class="card__image-hover-overlay">
                                  <div class="listing-badges">
                                      <span class="featured">
                                          Featured
                                      </span>
                                      <span>
                                          For Rent
                                      </span>
                                  </div>
                                  <div class="card__image-content">
                                      <div class="card__image-content-desc">
                                          <h6> Contemporary Apartment</h6>
                                          <p class="mb-0"> $1300 / monthly</p>
                                      </div>
                                      <ul class="list-inline card__hidden-content">
                                          <li class="list-inline-item">
                                              Baths
                                              <span>
                                                  <i class="fa fa-bath"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Beds
                                              <span>
                                                  <i class="fa fa-bed"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Rooms
                                              <span>
                                                  <i class="fa fa-inbox"></i> 3
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Area
                                              <span>
                                                  <i class="fa fa-map"></i> 1450 sq ft
                                              </span>
                                          </li>
  
                                      </ul>
                                  </div>
                                  <img alt="" src="{{asset('assets/images/gallery17-4.jpg')}}" class="img-fluid h-40 ">
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="item">
                      <!-- CARD IMAGE -->
                      <a href="{{route('detailProperty')}}">
                          <div class="card__image-hover h-250">
                              <div class="card__image-hover-overlay">
                                  <div class="listing-badges">
                                      <span class="featured">
                                          Featured
                                      </span>
                                      <span>
                                          For Rent
                                      </span>
                                  </div>
                                  <div class="card__image-content">
                                      <div class="card__image-content-desc">
                                          <h6> Ample Apartment At Last Floor</h6>
                                          <p class="mb-0"> $1300 / monthly</p>
                                      </div>
                                      <ul class="list-inline card__hidden-content">
                                          <li class="list-inline-item">
                                              Baths
                                              <span>
                                                  <i class="fa fa-bath"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Beds
                                              <span>
                                                  <i class="fa fa-bed"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Rooms
                                              <span>
                                                  <i class="fa fa-inbox"></i> 3
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Area
                                              <span>
                                                  <i class="fa fa-map"></i> 1450 sq ft
                                              </span>
                                          </li>
  
                                      </ul>
                                  </div>
                                  <img alt="" src="{{asset('assets/images/gallery16-3.jpg')}}" class="img-fluid h-40 ">
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="item">
                      <!-- CARD IMAGE -->
  
                      <a href="{{route('detailProperty')}}">
                          <div class="card__image-hover h-250">
                              <div class="card__image-hover-overlay">
                                  <div class="listing-badges">
                                      <span class="featured">
                                          Featured
                                      </span>
                                      <span>
                                          For Rent
                                      </span>
                                  </div>
                                  <div class="card__image-content">
                                      <div class="card__image-content-desc">
                                          <h6> Citra Garden Estate</h6>
                                          <p class="mb-0"> $1300 / monthly</p>
                                      </div>
                                      <ul class="list-inline card__hidden-content">
                                          <li class="list-inline-item">
                                              Baths
                                              <span>
                                                  <i class="fa fa-bath"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Beds
                                              <span>
                                                  <i class="fa fa-bed"></i> 2
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Rooms
                                              <span>
                                                  <i class="fa fa-inbox"></i> 3
                                              </span>
                                          </li>
                                          <li class="list-inline-item">
                                              Area
                                              <span>
                                                  <i class="fa fa-map"></i> 1450 sq ft
                                              </span>
                                          </li>
  
                                      </ul>
                                  </div>
                                  <img alt="" src="{{asset('assets/images/gallery18-3.jpg')}}" class="img-fluid h-40 ">
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
      </section>
      <!-- END RECENTS CITY -->
  
  
      <!-- ABOUT -->
      <section class="home__about bg-theme-v7">
          <div class="container">
              <div class="row">
                  <div class="col-md-7">
                      <div class="title__leading">
                          <!-- <h6 class="text-uppercase">trusted By thousands</h6> -->
                          <h2 class="text-capitalize">why choose use?</h2>
                          <p>
                              The first step in selling your property is to get a valuation from local experts. They will
                              inspect your home and take into account its unique features, the area and market conditions
                              before providing you with the most accurate valuation.
                          </p>
                          <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                              laboris nisi ut aliquip ex ea commodo consequat.
                          </p>
                          <a href="{{route('about')}}" class="btn btn-primary mt-3 text-capitalize"> read more
                              <i class="fa fa-angle-right ml-3 "></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- END ABOUT -->
  
      <!-- OUR TEAM -->
      <section class="our__team">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 ">
                      <div class="title__head-v2">
                          <h2 class="text-capitalize">
                              meet our team
                          </h2>
                          <p class="text-capitalize">see our top of the month teams</p>
  
                      </div>
                  </div>
                  <div class="clearfix"></div>
              </div>
              <div class="row">
                  <div class="col-md-6 col-lg-4">
                      <div class="wrap-agent">
                          <div class="team-member">
                              <div class="team-img">
                                  <img alt="team member" class="img-fluid w-100" src="{{asset('assets/images/team11-2.jpg')}}">
                              </div>
                              <div class="team-hover">
                                  <div class="desk">
                                      <h5>
                                          Hi There !
                                      </h5>
                                      <p>
                                          I am Senior Agent Property
                                      </p>
                                      <a class="btn btn-primary" href="{{route('agent')}}">
                                          Agent Profile
                                      </a>
                                  </div>
                                  <ul class="list-inline s-link mb-0">
                                      <li class="list-inline-item">
                                          <a href="#">
                                              <i class="fa fa-facebook">
                                              </i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a href="#">
                                              <i class="fa fa-twitter">
                                              </i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a href="#">
                                              <i class="fa fa-google-plus">
                                              </i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="team-title">
                                  <h6>
                                      Martin Smith
                                  </h6>
                                  <span>
                                      Agent Real Estate
                                  </span>
                              </div>
                          </div>
                      </div>
                  </div>
  
                  <div class="col-md-6 col-lg-4">
                      <div class="wrap-agent">
                          <div class="team-member">
                              <div class="team-img">
                                  <img alt="team member" class="img-fluid w-100" src="{{asset('assets/images/team12-2.jpg')}}">
                              </div>
                              <div class="team-hover">
                                  <div class="desk">
                                      <h5>
                                          Hi There !
                                      </h5>
                                      <p>
                                          I am Senior Agent Property
                                      </p>
                                      <a class="btn btn-primary" href="{{route('agent')}}">
                                          Agent Profile
                                      </a>
                                  </div>
                                  <ul class="list-inline s-link mb-0">
                                      <li class="list-inline-item">
                                          <a href="#">
                                              <i class="fa fa-facebook">
                                              </i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a href="#">
                                              <i class="fa fa-twitter">
                                              </i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a href="#">
                                              <i class="fa fa-google-plus">
                                              </i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="team-title">
                                  <h6>
                                      Felica Angel
                                  </h6>
                                  <span>
                                      Agent Real Estate
                                  </span>
                              </div>
                          </div>
                      </div>
                  </div>
  
                  <div class="col-md-6 col-lg-4">
                      <div class="wrap-agent">
                          <div class="team-member">
                              <div class="team-img">
                                  <img alt="team member" class="img-fluid w-100" src="{{asset('assets/images/team13-2.jpg')}}">
                              </div>
                              <div class="team-hover">
                                  <div class="desk">
                                      <h5>
                                          Hi There !
                                      </h5>
                                      <p>
                                          I am Senior Agent Property
                                      </p>
                                      <a class="btn btn-primary" href="{{route('agent')}}">
                                          Agent Profile
                                      </a>
                                  </div>
                                  <ul class="list-inline s-link mb-0">
                                      <li class="list-inline-item">
                                          <a href="#">
                                              <i class="fa fa-facebook">
                                              </i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a href="#">
                                              <i class="fa fa-twitter">
                                              </i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a href="#">
                                              <i class="fa fa-google-plus">
                                              </i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="team-title">
                                  <h6>
                                      Sara libson
                                  </h6>
                                  <span>
                                      Agent Real Estate
                                  </span>
                              </div>
                          </div>
                      </div>
                  </div>
  
  
              </div>
          </div>
      </section>
      <!-- END TEAM -->
  
  >
       
 {{-- end Conten section --}}

  

    @endsection