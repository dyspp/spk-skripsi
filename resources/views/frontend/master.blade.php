<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title')</title>

   <!-- Styles -->
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
</head>
<body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-md navbar-dy shadow-sm fixed-top">
      <div class="navbar-el">
         <a class="navbar-brand" href="#">dy-laptops</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <i class="fas fa-align-justify"></i>
         </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link active" href="#">Catalog</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Rate</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Compare</a>
            </li> 
            <li class="nav-item">
               <a class="nav-link" href="#">Help</a>
            </li> 
            <li class="nav-item">
               <a class="nav-link" href="#">About</a>
            </li> 
         </ul>
      </div>  
   </nav>
   <!-- Contents -->
   <div id="publicContent" class="container">
      @yield('content')
   </div>
   <!-- Scripts -->
   <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
   <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>