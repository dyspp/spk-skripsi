@extends('admin.master')

@section('title', 'Criteria')

@section('content')
<!-- Form -->
<div class="row">
   <!-- Criteria List -->
   <div class="col-lg-6">
      <div class="card shadow-sm">
         <div class="card-body minimize-element-container">
            <div class="minimize-element-title">
               <h3>Criterion Data</h3>
               <button id="showMinimizeElement" class="btn btn-purple">Show</button>
            </div>
            <hr class="hr-purple">
            <div class="table-responsive minimize-element">
               <table class="table">
                  <thead class="table-border-none">
                     <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Attribute</th>
                        <th>Weight</th>
                     </tr>
                  </thead>
                  <tbody>
                  @foreach($criteria as $criterion)
                     <tr>
                        <td>{{ $num++ }}</td>
                        <td>
                           <a href="{{ route('criteria.edit', $criterion->id) }}">
                              {{ $criterion->name }}
                           </a>
                        </td>
                        <td>{{ setAttribute($criterion->attribute) }}</td>
                        <td>{{ $criterion->weight }}</td>
                     </tr>
                  @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <!-- Create Form -->
   <div class="col-lg-6 sticky-element">
      <div class="card shadow-sm">
         <div class="card-body">
            <h3>Add Criterion Form</h3>
            <hr class="hr-purple">
            <form action="{{ route('criteria.store') }} " method="POST">
            @csrf
               <!-- Name Input-->
               <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Ex: Price, Processor, etc.">
                  @error('name')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- Attribute Input-->
               <div class="form-group">
                  <label for="attribute">Attribute:</label>
                  <div class="custom-control custom-radio">
                     <input type="radio" name="attribute" id="cost" class="custom-control-input" value="0" {{ (old('attribute') == 0) ? 'checked' : '' }}>
                     <label for="cost" class="custom-control-label">Cost</label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input type="radio" name="attribute" id="benefit" class="custom-control-input" value="1" {{ (old('attribute') == 1) ? 'checked' : '' }}>
                     <label for="benefit" class="custom-control-label">Benefit</label>
                  </div>
                  @error('attribute')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- Weight Input-->
               <div class="form-group">
                  <label for="weight">Weight:</label>
                  <input type="text" name="weight" id="weight" class="form-control @error('weight') is-invalid @enderror" value="{{ old('weight') }}" placeholder="Between 0 and 1. Ex: 0.1, 0.02, etc.">
                  @error('weight')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <div class="d-flex justify-content-end">
                  <button id="cancelButton" type="button" class="btn btn-danger mr-2" data-toggle="modal" data-target="#modalCancel" data-url="{{ route('criteria.index') }}"><i class="fas fa-times mr-2"></i>Cancel</button>
                  <button class="btn btn-purple" type="submit"><i class="fas fa-check mr-2"></i>Add</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Modal -->
   @include('admin.partials.modals.modal-cancel')
</div>
@endsection('content')