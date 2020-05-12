<nav id="sidebar" class="active shadow-sm">
   <div class="sidebar-header">
      <a href="{{ route('admin.dashboard') }}">dy-laptops</a>
   </div>
   <ul class="list-unstyled components">
      {{-- Brand --}}
      <li class="{{ setActive('dashboard') }}">
            <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
      </li>
      {{-- Master Data --}}
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
      {{-- Manage Admins --}}
      <li>
         <a href="#" class="{{ setActive('manage-admins') }}"><i class="fas fa-users mr-2"></i>Manage Admins</a>
      </li>
      {{-- Homepage --}}
      <li>
         <a href="#"><i class="fas fa-home mr-2"></i>Homepage</a>
      </li>
   </ul>
</nav>