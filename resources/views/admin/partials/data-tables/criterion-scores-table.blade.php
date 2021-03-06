<div class="card-body">
    <h3>Criterion Score Data</h3>
    <hr class="hr-purple">
    @if($criterionScores->isNotEmpty())
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead id="dataTableHead" class="table-border-none">
                <tr>
                    <th class="w-5p">No.</th>
                    <th>Criterion</th>
                    <th>Description</th>
                    <th>Score</th>
                    <th class="w-15p">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($criterionScores as $index => $criterionScore)
                <tr>
                    <td>{{ $criterionScores->firstItem() + $index }}</td>
                    <td>{{ $criterionScore->criterion->name }}</td>
                    <td>{{ $criterionScore->description }}</td>
                    <td>{{ $criterionScore->score }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('criterionscores.edit', $criterionScore->id) }}" class="btn btn-sm btn-primary mr-2"><i class="far fa-edit mr-2"></i>Edit</a>
                            <button type="button" class="btn btn-sm btn-danger btn-delete" data-toggle="modal" data-url="{{ route('criterionscores.destroy', $criterionScore->id) }}" data-target="#modalDelete"><i class="far fa-trash-alt mr-2"></i>Delete</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">
                        <p class="text-secondary font-italic">Showing <strong>{{ $criterionScores->firstItem() }}</strong> to <strong>{{ $criterionScores->lastItem() }}</strong> of <strong>{{ $criterionScores->total() }}</strong> item(s).</p>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    @else
    <div class="alert alert-border alert-warning text-center">
        <strong>No data found.</strong>
    </div>
    @endif
</div>
<!-- Pagination -->
@if($criterionScores->total() > $criterionScores->perPage())
<div class="card-footer">
    <div class="pagination-admin">
        {{ $criterionScores->links('frontend.partials.pagination') }}
    </div>
</div>
@endif