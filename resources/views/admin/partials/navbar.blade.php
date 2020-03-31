<nav id="sidebar" class="shadow active">
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
         <a href="#masterDataList" data-toggle="collapse" aria-expanded="{{ ariaExpandedValue(request()->segment(2)) }}" class="dropdown-toggle {{ dropdownActive(request()->segment(2)) }}"><i class="fas fa-database mr-2"></i>Master Data</a>
         <ul class="collapse list-unstyled {{ showDropdown(request()->segment(2)) }}" id="masterDataList">
            <li class="{{ setActive('criteria') }}">
               <a href="{{ route('criteria.index')}}"><i class="fas fa-circle-notch fa-rotate-90 mr-2"></i>Criteria</a>
            </li>
            <li class="{{ setActive('criterionscores') }}">
               <a href="{{ route('criterionscores.index') }}"><i class="fas fa-circle-notch fa-rotate-90 mr-2"></i>Criterion Scores</a>
            </li>
            <li class="{{ setActive('alternatives') }}">
               <a href="{{ route('alternatives.index') }}"><i class="fas fa-circle-notch fa-rotate-90 mr-2"></i>Alternatives</a>
            </li>
            <li class="{{ setActive('alternativescores') }}">
               <a href="{{ route('alternativescores.index') }}"><i class="fas fa-circle-notch fa-rotate-90 mr-2"></i>Alternative Scores</a>
            </li>
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