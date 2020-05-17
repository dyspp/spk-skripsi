<div class="card-body">
    <h3>Alternative Score Data</h3>
    <hr class="hr-purple">
    @if($alternativeScores->isNotEmpty())
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead id="dataTableHead" class="table-border-none">
                <tr>
                    <th>No.</th>
                    <th>Alternative</th>
                    <th>Image</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="tr-align-middle">
                @foreach($alternativeScores as $index => $alternativeScore)
                <tr>
                    <td>{{ $alternativeScores->firstItem() + $index }}</td>
                    <td>{{ $alternativeScore->alternative->name }}</td>
                    <td>
                        <img src="{{ asset('images/alternatives/' .$alternativeScore->alternative->image) }}" alt="{{ $alternativeScore->alternative->name }}" width="auto" height="75px">
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                        <button id="showScores-{{ $alternativeScore->id }}" class="btn btn-sm btn-success mr-2" data-id="{{ $alternativeScore->id }}" data-toggle="modal" data-target="#alternativeScoresModal"><i class="fas fa-list-ol mr-2"></i>Scores</button>
                        <a href="{{ route('alternativescores.edit', $alternativeScore->id) }}" class="btn btn-sm btn-primary mr-2"><i class="far fa-edit mr-2"></i>Edit</a>
                        <button type="button" class="btn btn-sm btn-danger btn-delete" data-toggle="modal" data-url="{{ route('alternativescores.destroy', $alternativeScore->id) }}" data-target="#modalDelete"><i class="far fa-trash-alt mr-2"></i>Delete</button>
                        </div>
                    </td>
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
@if($alternativeScores->total() > $alternativeScores->perPage())
<div class="card-footer">
    <div class="pagination-admin">
        {{ $alternativeScores->links('frontend.partials.pagination') }}
    </div>
</div>
@endif