<div class="modal-header">
   <div class="modal-header-text">
      <i class="fas fa-align-justify mr-2"></i>
      <h5 class="modal-title">{{ $criterion->name }} Scores List</h5>
   </div>
</div>
<div class="modal-body">
   <div class="card shadow-sm">
      <div class="card-body">
         <table class="table table-border-purple">
            <thead class="table-border-none">
               <tr>
                  <th>No.</th>
                  <th>Description</th>
                  <th>Score</th>
               </tr>
            </thead>
            <tbody>
            @foreach($scores as $score)
               <tr>
                  <td>{{ $number++ }}</td>
                  <td>{{ $score->description }}</td>
                  <td>{{ $score->score }}</td>
               </tr>
            @endforeach
            </tbody>
         </table>
      </div>
   </div>
   
</div>
<div class="modal-footer d-flex justify-content-center">
   <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times mr-2"></i>Close</button>
</div>