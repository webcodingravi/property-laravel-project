<div class="topbar d-none d-sm-block">
  <div class="container ">
      <div class="row">
          <div class="col-sm-12 col-md-5">
              <div class="topbar-left">
                  <div class="topbar-text">
                
             
                   {{\Carbon\Carbon::parse(now())->format('D, M d, Y')}}
                      {{-- Monday, March 22, 2020 --}}
                  </div>
              </div>
          </div>
          <div class="col-sm-12 col-md-7">
              <div class="list-unstyled topbar-right">
                  <ul class="topbar-link">
                      <li><a href="{{route('contact')}}" title="">Contact Us</a></li>
                      <li><a href="{{route('Login')}}" title="">Login / Register</a></li>
                  </ul>
                  <ul class="topbar-sosmed">
                      <li>
                          <a href="#"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-instagram"></i></a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>