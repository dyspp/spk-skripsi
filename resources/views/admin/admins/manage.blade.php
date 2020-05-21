@extends('admin.master')

@section('title', 'Manage Admins')

@section('content')
@if(Session::has('added'))
    <div class="alert alert-success mt-3">
        <strong>{{ session('added') }}</strong>
    </div>
@endif
<div class="toolbars">
   <div class="toolbar-inputs shadow-sm">
      <div class="input-group">
         <div class="input-group-prepend">
            <span id="searchIcon" class="input-group-text show"><i class="fas fa-search"></i></span>
            <span id="searchLoading" class="spinner-border spinner-border-sm text-secondary-dy"></span>
         </div>
         <input data-name="dataTableSearch" data-url="{{ route('admin.manage-admins') }}" type="text" name="search" class="form-control" placeholder='Search data'>
      </div>
      <a href="{{ route('admin.add') }}" class="btn btn-purple"><i class="fas fa-plus mr-2"></i>Add</a>
   </div>
   <div class="toolbar-filters"></div>
</div>
<div class="card shadow-sm">
    <div class="card-body">
        <h3>Admin Data</h3>
        <hr class="hr-purple">
        @if($users->isNotEmpty())
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead id="dataTableHead" class="table-border-none">
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Privilege</th>
                        </tr>
                    </thead>
                    <tbody class="tr-align-middle">
                        @foreach($users as $index => $user)
                        <tr>
                            <td>{{ $number++ }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ formatPrivilegeText($user->privilege) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-border alert-warning text-center">
                <strong>No data found.</strong>
            </div>
        @endif
    </div>
</div>
@endsection