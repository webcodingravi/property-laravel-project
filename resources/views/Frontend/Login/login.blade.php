@extends('layouts.app')
@section('content')

  <!-- NAVBAR TOP -->
  @include('layouts.top-header')
  <!-- END NAVBAR TOP -->
  <!-- NAVBAR -->
@include('layouts.header')
  <!-- END NAVBAR -->
  <!-- BREADCRUMB -->

<div class="bg-theme-overlay">
  <section class="section__breadcrumb ">
      <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="col-md-8 text-center">
                  <h2 class="text-capitalize text-white">login</h2>
                  <ul class="list-inline ">
                      <li class="list-inline-item">
                          <a href="{{route('home')}}" class="text-white">
                              home
                          </a>
                      </li>
                  
                      <li class="list-inline-item">
                          <a href="{{route('Login')}}" class="text-white">
                              login
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

<!-- LISTING LIST -->
<section>
<div class="container">
  <div class="row">
      <div class="col-lg-12">
          <!-- Form Login -->
          <div class="card mx-auto" style="max-width: 380px;">
              <div class="card-body">
                  <h4 class="card-title mb-4">Sign in</h4>
                  <form action="#">
                      {{-- <a href="#" class="btn btn-facebook btn-block mb-2 text-white"> <i class="fa fa-facebook"></i> &nbsp; Sign
                          in
                          with
                          Facebook</a>
                      <a href="#" class="btn btn-primary btn-block mb-4"> <i class="fa fa-google"></i> &nbsp;
                          Sign in with
                          Google</a> --}}
                      <div class="form-group">
                          <input class="form-control" placeholder="Username" type="text">
                      </div> <!-- form-group// -->
                      <div class="form-group">
                          <input class="form-control" placeholder="Password" type="password">
                      </div> <!-- form-group// -->

                      <div class="form-group">
                          <a href="#" class="float-right">Forgot password?</a>
                          <label class="float-left custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked="">
                              <span class="custom-control-label"> Remember </span>
                          </label>
                      </div> <!-- form-group form-check .// -->
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-block"> Login </button>
                      </div> <!-- form-group// -->
                  </form>
              </div> <!-- card-body.// -->
          </div> <!-- card .// -->

          <p class="text-center mt-4">Don't have account? <a href="{{route('register')}}">Sign up</a></p>
      </div>
  </div>
</div>
</section>
<!-- END LISTING LIST -->

  
@endsection