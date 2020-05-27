<div class="card-body">
    <h3>Alternative Data</h3>
    <hr class="hr-purple">
    @if($alternatives->isNotEmpty())
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
        <thead id="dataTableHead" class="table-border-none">
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Image</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody class="tr-align-middle">
            @foreach ($alternatives as $index => $alternative)
            <tr>
                <td>{{ $alternatives->firstItem() + $index }}</td>
                <td>{{ $alternative->name }}</td>
                <td>
                    <img src="{{ asset('images/alternatives/'.$alternative->image) }}" alt="{{ $alternative->name }}" width="auto" height="75px">
                </td>
                <td>
                    <div class="d-flex justify-content-center">
                    <button id="showDetails-{{ $alternative->id }}" class="btn btn-sm btn-success mr-2" data-id="{{ $alternative->id }}" data-toggle="modal" data-target="#alternativeDetailsModal"><i class="fas fa-list-ul mr-2"></i>Details</button>
                    <a href="{{ route('alternatives.edit', $alternative->id) }}" class="btn btn-sm btn-primary mr-2"><i class="far fa-edit mr-2"></i>Edit</a>
                    <button type="button" class="btn btn-sm btn-danger btn-delete" data-toggle="modal" data-url="{{ route('alternatives.destroy', $alternative->id) }}" data-target="#modalDelete"><i class="far fa-trash-alt mr-2"></i>Delete</button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">
                    <p class="text-secondary font-italic">Showing item(s) from <strong>{{ $alternatives->firstItem() }}</strong> to <strong>{{ $alternatives->lastItem() }}</strong> of <strong>{{ $alternatives->total() }}</strong> item(s).</p>
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
@if($alternatives->total() > $alternatives->perPage())
<div class="card-footer">
    <div class="pagination-admin">
        {{ $alternatives->links('frontend.partials.pagination') }}
    </div>
</div>
@endif