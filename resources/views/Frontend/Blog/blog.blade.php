@extends('layouts.app')
@section('content')
    

    <!-- HEADER -->
    <header>
       
        <!-- NAVBAR TOP -->
        @include('layouts.top-header')
        <!-- END NAVBAR TOP -->
        <!-- NAVBAR -->
      @include('layouts.header')
        <!-- END NAVBAR -->
        <!-- BREADCRUMB -->
        <div class="bg-theme-overlay">
            <section class="section__breadcrumb">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 text-center">
                            <h2 class="text-capitalize text-white">blog</h2>
                            <ul class="list-inline ">
                                <li class="list-inline-item">
                                    <a href="{{route('home')}}" class="text-white">
                                        home
                                    </a>
                                </li>
                        
                                <li class="list-inline-item">
                                    <a href="{{route('blog')}}" class="text-white">
                                        blog
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END BREADCRUMB -->
    </header>
    <div class="clearfix"></div>

    <!-- BLOG -->
    <section>
        <div class="container">
            <div class="row">
                <!-- BLOG START -->
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="blog__grid mt-0">
                                <!-- BLOG  -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <a href="{{route('detailProperty')}}">
                                        <img src="{{asset('assets/images/blog3.jpg')}}" alt="" class="img-fluid w100 img-transition">
                                    </a>
                                        <div class="info"> event</div>
                                    </div>
                                    <div class="card__image-body">
                                        <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019
                                        </span> -->
                                        <h6 class="text-capitalize">
                                            <a href='{{route('DetailBlog')}}'>Happy family with new house </a>
                                        </h6>
                                        <p class=" mb-0">
                                            Real estate festival is one of the famous feval for explain to you how all
                                            this mistaolt deand praising pain
                                            wasnad I will give complete

                                        </p>

                                        
                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="{{asset('assets/images/profile-blog-2.jpg')}}" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item">

                                                <a href="{{route('agent')}}">
                                                    tom wilson
                                                </a>

                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item">
                                                <a href="{{route('DetailBlog')}}" class="btn btn-sm btn-primary "><small class="text-white ">read more <i class="fa fa-angle-right ml-1"></i></small></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOG -->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 ">
                            <div class="blog__grid mt-0">
                                <!-- BLOG  -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <a href="{{route('detailProperty')}}">
                                        <img src="{{asset('assets/images/gallery17-3.jpg')}}" alt="" class="img-fluid w100 img-transition">
                                        </a>
                                        <div class="info"> event</div>
                                    </div>
                                    <div class="card__image-body">
                                        <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019
                                        </span> -->
                                        <h6 class="text-capitalize">
                                            <a href='{{route('DetailBlog')}}'>Best Interior Oppertunity </a>
                                        </h6>
                                        <p class=" mb-0">
                                            Real estate festival is one of the famous feval for explain to you how all
                                            this mistaolt deand praising pain
                                            wasnad I will give complete

                                        </p>


                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="{{asset('assets/images/profile-blog-2.jpg')}}" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item ">
                                                <a href="{{route('agent')}}">
                                                    tom wilson
                                                </a>

                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item ">
                                                <a class='btn btn-sm btn-primary ' href='{{route('DetailBlog')}}'><small class="text-white ">read more <i class="fa fa-angle-right ml-1"></i></small></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOG -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="blog__grid">
                                <!-- BLOG  -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <a href="{{route('detailProperty')}}">
                                        <img src="{{asset('assets/images/blog4.jpg')}}" alt="" class="img-fluid w100 img-transition">
                                        </a>
                                        <div class="info"> event</div>
                                    </div>
                                    <div class="card__image-body">
                                      
                                        <h6 class="text-capitalize">
                                            <a href='{{route('DetailBlog')}}'> where to invest in real estate</a>
                                        </h6>
                                        <p class=" mb-0">
                                            Real estate festival is one of the famous feval for explain to you how all
                                            this mistaolt deand praising pain
                                            wasnad I will give complete

                                        </p>


                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="{{asset('assets/images/profile-blog-2.jpg')}}" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item">

                                                <a href="{{route('agent')}}">
                                                    tom wilson
                                                </a>

                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item">
                                                <a href="{{route('DetailBlog')}}" class="btn btn-sm btn-primary "><small class="text-white ">read more <i class="fa fa-angle-right ml-1"></i></small></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOG -->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="blog__grid">
                                <!-- BLOG  -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <a href="{{route('detailProperty')}}">
                                        <img src="{{asset('assets/images/gallery22.png')}}" alt="" class="img-fluid w100 img-transition">
                                        </a>
                                        <div class="info"> event</div>
                                    </div>
                                    <div class="card__image-body">
                                        <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019
                                        </span> -->
                                        <h6 class="text-capitalize">
                                            <a href='{{route('DetailBlog')}}'> Happy family with new house </a>
                                        </h6>
                                        <p class=" mb-0">
                                            Real estate festival is one of the famous feval for explain to you how all
                                            this mistaolt deand praising pain
                                            wasnad I will give complete

                                        </p>


                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="{{asset('assets/images/profile-blog-2.jpg')}}" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item">
                                                <a href="{{route('agent')}}">
                                                    tom wilson
                                                </a>

                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item">
                                                <a href="{{route('DetailBlog')}}" class="btn btn-sm btn-primary "><small class="text-white ">read more <i class="fa fa-angle-right ml-1"></i></small></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOG -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="blog__grid">
                                <!-- BLOG  -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <a href="{{route('detailProperty')}}">
                                        <img src="{{asset('assets/images/gallery23-1.png')}}" alt="" class="img-fluid w100 img-transition">
                                        </a>
                                        <div class="info"> event</div>
                                    </div>
                                    <div class="card__image-body">
                                    
                                        <h6 class="text-capitalize">
                                            <a href='{{route('DetailBlog')}}'> we are ready to give the keys</a>
                                        </h6>
                                        <p class=" mb-0">
                                            Real estate festival is one of the famous feval for explain to you how all
                                            this mistaolt deand praising pain
                                            wasnad I will give complete

                                        </p>


                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="{{asset('assets/images/profile-blog-2.jpg')}}" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item">

                                                <a href="{{route('agent')}}">
                                                    tom wilson
                                                </a>

                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item">
                                                <a href="{{route('DetailBlog')}}" class="btn btn-sm btn-primary "><small class="text-white ">read more <i class="fa fa-angle-right ml-1"></i></small></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOG -->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="blog__grid">
                                <!-- BLOG  -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <a href="{{route('detailProperty')}}">
                                        <img src="{{asset('assets/images/gallery6-1.jpg')}}" alt="" class="img-fluid w100 img-transition">
                                        </a>
                                        <div class="info"> event</div>
                                    </div>
                                    <div class="card__image-body">
                                     
                                        <h6 class="text-capitalize">
                                            <a href='{{route('DetailBlog')}}'>New property for you</a>
                                        </h6>
                                        <p class=" mb-0">
                                            Real estate festival is one of the famous feval for explain to you how all
                                            this mistaolt deand praising pain
                                            wasnad I will give complete

                                        </p>


                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="{{asset('assets/images/profile-blog-2.jpg')}}" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item">

                                                <a href="{{route('agent')}}">
                                                    tom wilson
                                                </a>

                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item">
                                                <a href="{{route('DetailBlog')}}" class="btn btn-sm btn-primary "><small class="text-white ">read more <i class="fa fa-angle-right ml-1"></i></small></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOG -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="blog__grid">
                                <!-- BLOG  -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <a href="{{route('detailProperty')}}">
                                        <img src="{{asset('assets/images/gallery7.jpg')}}" alt="" class="img-fluid w100 img-transition">
                                        </a>
                                        <div class="info"> event</div>
                                    </div>
                                    <div class="card__image-body">
                                        <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019
                                        </span> -->
                                        <h6 class="text-capitalize">
                                            <a href='{{route('DetailBlog')}}'> tips & trick in real estate</a>
                                        </h6>
                                        <p class=" mb-0">
                                            Real estate festival is one of the famous feval for explain to you how all
                                            this mistaolt deand praising pain
                                            wasnad I will give complete

                                        </p>


                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="{{asset('assets/images/profile-blog-2.jpg')}}" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item">

                                                <a href="{{route('agent')}}">
                                                    tom wilson
                                                </a>
                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item">
                                                <a href="{{route('DetailBlog')}}" class="btn btn-sm btn-primary "><small class="text-white ">read more <i class="fa fa-angle-right ml-1"></i></small></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOG -->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="blog__grid">
                                <!-- BLOG  -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <a href="{{route('detailProperty')}}">
                                        <img src="{{asset('assets/images/gallery9-3.jpg')}}" alt="" class="img-fluid w100 img-transition">
                                        </a>
                                        <div class="info"> event</div>
                                    </div>
                                    <div class="card__image-body">
                                      
                                        <h6 class="text-capitalize">
                                            <a href='{{route('DetailBlog')}}'>find dream house with us</a>
                                        </h6>
                                        <p class=" mb-0">
                                            Real estate festival is one of the famous feval for explain to you how all
                                            this mistaolt deand praising pain
                                            wasnad I will give complete

                                        </p>


                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="{{asset('assets/images/profile-blog-2.jpg')}}" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item">

                                                <a href="{{route('agent')}}">
                                                    tom wilson
                                                </a>

                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item">
                                                <a href="{{route('DetailBlog')}}" class="btn btn-sm btn-primary "><small class="text-white ">read more <i class="fa fa-angle-right ml-1"></i></small></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOG -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END BLOG  -->

                <!-- WIDGET BLOG -->
                <div class="col-lg-4">
                    <div class="sticky-top">
                        <aside>
                            <div class="widget__sidebar mt-0">
                                <div class="widget__sidebar__header">
                                    <h6 class="text-capitalize">search</h6>
                                </div>
                                <div class="widget__sidebar__body">
                                    <div class="input-group">
                                        <input type="text" name="search_term_string" class="form-control" placeholder="Search article . . .">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn-search btn"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </aside>
                        <aside>
                            <div class="widget__sidebar">
                                <div class="widget__sidebar__header">
                                    <h6 class="text-capitalize">category</h6>
                                </div>
                                <div class="widget__sidebar__body">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#" class="text-capitalize">
                                                apartement
                                                <span class="badge badge-primary">14</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-capitalize">
                                                villa
                                                <span class="badge badge-primary">4</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-capitalize">
                                                family house
                                                <span class="badge badge-primary">2</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-capitalize">
                                                modern villa
                                                <span class="badge badge-primary">8</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-capitalize">
                                                town house
                                                <span class="badge badge-primary">10</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-capitalize">
                                                office
                                                <span class="badge badge-primary">12</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </aside>
                        <aside>
                            <div class="widget__sidebar">
                                <div class="widget__sidebar__header">
                                    <h6 class="text-capitalize">recents news</h6>
                                </div>
                                <div class="widget__sidebar__body">
                                    <!-- ONE -->
                                    <div class="widget__sidebar__body-img">
                                        <img src="{{asset('assets/images/gallery-2.jpg')}}" alt="" class="img-fluid">

                                        <div class="widget__sidebar__body-heading">
                                            <h6 class="text-capitalize">
                                                tips memilih rumah bagi kelurga muda
                                            </h6>

                                        </div>
                                        <span class="badge badge-secondary p-1 text-capitalize mb-1">May 08, 2019
                                        </span>
                                    </div>
                                    <!-- TWO -->
                                    <div class="widget__sidebar__body-img">
                                        <img src="{{asset('assets/images/gallery1-1.jpg')}}" alt="" class="img-fluid">

                                        <div class="widget__sidebar__body-heading">
                                            <h6 class="text-capitalize">
                                                tips memilih rumah bagi kelurga muda
                                            </h6>

                                        </div>
                                        <span class="badge badge-secondary p-1 text-capitalize mb-1">May 08, 2019
                                        </span>
                                    </div>
                                    <!-- THREE -->
                                    <div class="widget__sidebar__body-img">
                                        <img src="{{asset('assets/images/gallery2-2.jpg')}}" alt="" class="img-fluid">
                                        <div class="widget__sidebar__body-heading">
                                            <h6 class="text-capitalize">
                                                twe are experience more than 10 years
                                            </h6>

                                        </div>
                                        <span class="badge badge-secondary p-1 text-capitalize mb-1">May 08, 2019
                                        </span>
                                    </div>
                                    <!-- FOUR -->
                                    <div class="widget__sidebar__body-img">
                                        <img src="{{asset('assets/images/gallery3-3.jpg')}}" alt="" class="img-fluid">

                                        <div class="widget__sidebar__body-heading">
                                            <h6 class="text-capitalize">
                                                tips & trick in real estate
                                            </h6>

                                        </div>
                                        <span class="badge badge-secondary p-1 text-capitalize mb-1">May 08, 2019
                                        </span>
                                    </div>

                                    <div class="widget__sidebar__body-img">
                                        <img src="{{asset('assets/images/gallery4-2.jpg')}}" alt="" class="img-fluid">

                                        <div class="widget__sidebar__body-heading">
                                            <h6 class="text-capitalize">
                                                how buy real estate dream house
                                            </h6>
                                        </div>
                                        <span class="badge badge-secondary p-1 text-capitalize mb-1">May 08, 2019
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        {{-- <aside>
                            <div class="widget__sidebar">
                                <div class="widget__sidebar__header">
                                    <h6 class="text-capitalize">tags</h6>
                                </div>
                                <div class="widget__sidebar__body">
                                    <div class="blog__tags p-0">
                                        <ul class="list-inline">

                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #property
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #wfh
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #estate
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #real estate
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #listing
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #rent
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #sell
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #family
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #happy
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #agents
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #promo
                                                </a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </aside> --}}
                    </div>
                </div>
                <!-- END WIDGET BLOG -->
            </div>
        </div>
    </section>
    <!-- END LISTING LIST -->



   
    @endsection