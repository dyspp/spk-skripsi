<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <title>@yield('title', 'Admin Page')</title>

      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
   </head>
   <body>
      <div class="wrapper">
         <!-- Sidebar -->
         <nav id="sidebar" class="shadow">
            <div class="sidebar-header">
               <div id="sidebar-header-text">
                  <a href="{{ route('dashboard') }}">SPK - Skripsi</a>
               </div >
            </div>

            <ul class="list-unstyled components">
               <li class="{{ setActive('dashboard') }}">
                     <a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
               </li>
               <li>
                  <a href="#masterDataList" data-toggle="collapse" aria-expanded="{{request()->segment(2) == 'criteria' ? 'true' : 'false'}}" class="dropdown-toggle"><i class="fas fa-database mr-2"></i>Master Data</a>
                  <ul class="collapse list-unstyled {{ showDropdown('criteria') }}" id="masterDataList">
                     <li class="{{ setActive('criteria') }}">
                        <a href="{{ route('criteria.index')}}">
                           <i class="fas fa-circle-notch fa-rotate-90 mr-2"></i>Criteria
                        </a>
                     </li>
                     <li><a href="#"><i class="fas fa-circle-notch fa-rotate-90 mr-2"></i>Criteria Score</a></li>
                  </ul>
               </li>
               <li>
                  <a href="#adminSettings" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user-cog mr-2"></i>Admin</a>
                  <ul class="collapse list-unstyled {{ showDropdown('settings') }}" id="adminSettings">
                     <li class="{{ setActive('settings') }}"><a href="{{ route('settings') }}"><i class="fas fa-cog mr-2"></i>Settings</a></li>
                     <li><a href="#"><i class="fas fa-power-off mr-2"></i>Logout</a></li>
                  </ul>
               </li>
               <li class="{{ setActive('about') }}">
                  <a href="{{ route('about') }}"><i class="fas fa-info-circle mr-2"></i>About</a>
               </li>
               <li>
               <li class="{{ setActive('contact') }}">
                  <a href="{{ route('contact') }}"><i class="fas fa-at mr-2"></i>Contact</a>
               </li>
               <li class="{{ setActive('test') }}">
                  <a href="{{ route('test') }}">Test</a>
               </li>
            </ul>
         </nav>
         <!-- /Sidebar -->

         <!-- Content -->
         <div id="content">
            <div class="">
               <nav class="navbar navbar-expand-lg shadow-sm" id="navbar">
                  <div class="">
                     <button type="button" id="sidebarCollapse" class="sibebarButton">
                        <i class="fas fa-align-justify"></i>
                        <!-- <span>Toggle Sidebar</span> -->
                     </button>
                  </div>
               </nav>
            </div>
            <div class="container-fluid mt-3 text-nowrap">
               @yield('content')
            </div>
         </div>
         <!-- /Content -->
      </div>
      <!-- Script -->
      <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
      <!-- !Script -->
   </body>
</html>