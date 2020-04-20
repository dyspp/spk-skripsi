<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>@yield('title')</title>

   <!-- Styles -->
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Merienda&family=Nunito&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
   <!-- Navbar -->
   <nav class="public-navbar shadow-sm fixed-top">
      <a href="{{ route('public.index') }}" class="brand">dy-laptops</a>
      <ul class="menu">
         <li class="menu-item {{ setActive('catalog') }}"><a href="{{ route('public.catalog') }}">Catalog</a></li>
         <li class="menu-item {{ setActive('recommendation') }}"><a href="{{ route('public.recommendation') }}">Recommendation</a></li>
         <li class="menu-item"><a href="#">Compare</a></li>
         <li class="menu-item"><a href="#">Help</a></li>
         <li class="menu-item"><a href="#">About</a></li>
      </ul>
      <div class="navbar-toggle">
         <span></span>
         <span></span>
         <span></span>
      </div>
      <div class="backdrop"></div>
   </nav>
   <!-- Contents -->
   <div id="publicContent" class="container-fluid">
      @yield('content')
   </div>
   <footer class="footer-frontend"><p>&copy; 2020 dy-laptops, All Rights Reserved</p></footer>
   <!-- Scripts -->
   <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
   <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>