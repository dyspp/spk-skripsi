<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <title>Admin - @yield('title')</title>

      <!-- Styles -->
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
   </head>
   <body>
      <div class="wrapper">
         <!-- Navbar (Sidebar) -->
         @include('admin.partials.navbar')

         <!-- Content -->
         <div id="content">
            <nav class="navbar navbar-expand-lg shadow-sm" id="navbar">
               <div class="">
                  <button type="button" id="sidebarCollapse" class="sibebarButton">
                     <i class="fas fa-align-justify"></i>
                     <!-- <span>Toggle Sidebar</span> -->
                  </button>
               </div>
            </nav>
            <div class="content-body">
               @yield('content')
            </div>
            <footer class="admin-footer">
               <p>&copy; 2020 dy-laptops, All Rights Reserved</p>
            </footer>
         </div>
      </div>
      
      <!-- Scripts -->
      <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
   </body>
</html>