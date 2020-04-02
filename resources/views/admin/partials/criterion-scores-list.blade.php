<div class="modal-header bg-purple">
   <h5 class="modal-title">{{ $criterion->name }} Scores List</h5>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
   </button>
</div>
<div class="modal-body">
   <table class="table table-bordered table-border-purple">
      <thead class="table-border-bottom-none">
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
<div class="modal-footer">
   <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times mr-2"></i>Close</button>
</div>