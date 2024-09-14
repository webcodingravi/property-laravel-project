<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rethouse - Real Estate HTML Template">
    <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency">
    <meta name="author" content="mardianto - retenvi.com">
    <title>Rethouse - Real Estate HTML Template</title>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:url" content="">
    <meta name="twitter:card" content="">

    <link rel="manifest" href="site-10.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{asset('assets/icon-10.png')}}">
    <meta name="theme-color" content="#3454d1">
    <link href="{{asset('assets/css/styles-10.css')}}" rel="stylesheet">
</head>

<body>
 
  @yield('content')


      <!-- Footer  -->
      @include('layouts.footer')
    <!-- SCROLL TO TOP -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TO TOP -->
    <script src="{{asset('assets/js/index.bundle-10.js')}}"></script>
</body>

</html>