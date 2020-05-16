<div class="card-body">
    <h3>Criterion Data</h3>
    <hr class="hr-purple">
    @if($criteria->isNotEmpty())
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
        <thead class="table-border-none">
            <tr>
                <th class="w-5p">No.</th>
                <th>Name</th>
                <th>Attribute</th>
                <th>Weight (%)</th>
                <th class="w-15p">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($criteria as $index => $criterion)
        <tr>
            <td>{{ $criteria->firstItem() + $index }}</td>
            <td>{{ $criterion->name }}</td>
            <td>{{ setAttribute($criterion->attribute) }}</td>
            <td>{{ $criterion->weight }}</td>
            <td>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('criteria.edit', $criterion->id) }}" class="btn btn-sm btn-primary mr-2"><i class="far fa-edit mr-2"></i>Edit</a>
                    <button type="button" class="btn btn-sm btn-danger btn-delete" data-toggle="modal" data-url="{{ route('criteria.destroy', $criterion->id) }}" data-target="#modalDelete"><i class="far fa-trash-alt mr-2"></i>Delete</button>
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
<!-- Pagination -->
@if($criteria->total() > $criteria->perPage())
<div class="card-footer">
    <div class="pagination-admin">
        {{ $criteria->links() }}
    </div>
</div>
@endif