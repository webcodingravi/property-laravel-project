
@if (Request::segment(1) == '')
    

<nav class="navbar navbar-hover navbar-expand-lg navbar-soft navbar-transparent">
    <div class="container">
       
        <a class='navbar-brand' href='/homepage-v1'>
      
            <img src="{{asset('assets/images/logo-blue-10.png')}} " alt="">
         
                <img src="{{asset('assets/images/logo-blue-stiky-4.png')}}" alt="" class="img-fluid">
     
        
        </a>
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav99">
 
            <ul class="navbar-nav mx-auto ">

              <li class="nav-item">
                  <a class="nav-link {{(Request::segment(1) == '') ? 'active' : ''}}" href="{{route('home')}}"> Home </a>
            
              </li>
    
                <li class="nav-item">
                  <a class="nav-link  {{(Request::segment(1) == 'about') ? 'active' : ''}}" href="{{route('about')}}"> About Us </a>
       

                <li class="nav-item">
                  <a class="nav-link {{(Request::segment(1) == 'property') ? 'active' : ''}}" href="{{route('property')}}"> Property </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link {{(Request::segment(1) == 'agent') ? 'active' : ''}}" href="{{route('agent')}}">Agent</a>
              </li>

         
                <li class="nav-item">
                  <a class="nav-link {{(Request::segment(1) == 'blog') ? 'active' : ''}}" href="{{route('blog')}}"> Blog </a>
              </li>

                <li class="nav-item">
                  <a class='nav-link {{(Request::segment(1) == 'contact') ? 'active' : ''}}' href='{{route('contact')}}'> contact </a>
              </li>
            </ul>


            <!-- Search bar.// -->
            <ul class="navbar-nav ">
                <li>
                    <a href="#" class="btn btn-primary text-capitalize">
                        <i class="fa fa-plus-circle mr-1"></i> add listing</a>
                </li>
            </ul>
            <!-- Search content bar.// -->
            <div class="top-search navigation-shadow">
                <div class="container">
                    <div class="input-group ">
                        <form action="#">

                            <div class="row no-gutters mt-3">
                                <div class="col">
                                    <input class="form-control border-secondary border-right-0 rounded-0" type="search" value="" placeholder="Search " id="example-search-input4">
                                </div>
                                <div class="col-auto">
                                    <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right" href="/search-result.html">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- Search content bar.// -->
        </div> <!-- navbar-collapse.// -->
    </div>
</nav>

@else

{{-- other page header  --}}

<nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{asset('assets/images/logo-blue-stiky-4.png')}}" alt="" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav99">
         
            <ul class="navbar-nav mx-auto ">

                <li class="nav-item">
                    <a class="nav-link {{(Request::segment(1) == '') ? 'active' : ''}}" href="{{route('home')}}">Home </a>
              
                </li>
      
                  <li class="nav-item">
                    <a class="nav-link  {{(Request::segment(1) == 'about') ? 'active' : ''}}" href="{{route('about')}}">About Us </a>
         
  
                  <li class="nav-item">
                    <a class="nav-link {{(Request::segment(1) == 'property') ? 'active' : ''}}" href="{{route('property')}}">Property </a>
                </li>
  
                <li class="nav-item">
                    <a class="nav-link {{(Request::segment(1) == 'agent') ? 'active' : ''}}" href="{{route('agent')}}">Agent</a>
                </li>
  
                  <li class="nav-item">
                    <a class="nav-link {{(Request::segment(1) == 'blog') ? 'active' : ''}}" href="{{route('blog')}}">Blog </a>
                </li>
  
                  <li class="nav-item">
                    <a class='nav-link {{(Request::segment(1) == 'contact') ? 'active' : ''}}' href="{{route('contact')}}">contact </a>
                </li>
              </ul>


            <!-- Search bar.// -->
            <ul class="navbar-nav">
                <li>
                    <a href="#" class="btn btn-primary text-capitalize">
                        <i class="fa fa-plus-circle mr-1"></i> add listing</a>
                </li>
            </ul>
            <!-- Search content bar.// -->
            <div class="top-search navigation-shadow">
                <div class="container">
                    <div class="input-group ">
                        <form action="#">

                            <div class="row no-gutters mt-3">
                                <div class="col">
                                    <input class="form-control border-secondary border-right-0 rounded-0" type="search" value="" placeholder="Search " id="example-search-input4">
                                </div>
                                <div class="col-auto">
                                    <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right" href="/search-result.html">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- Search content bar.// -->
        </div> <!-- navbar-collapse.// -->
    </div>
</nav>
@endif

