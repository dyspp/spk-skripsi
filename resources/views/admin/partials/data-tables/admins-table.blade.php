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
                        <th colspan="2">Privilege</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $index => $user)
                    <tr>
                        <td>{{ $number++ }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ formatPrivilegeText($user->privilege) }}</td>
                        {{--<td>
                            <button class="btn btn-sm btn-info btn-change-privilege"
                                    data-toggle="modal"
                                    data-url="{{ route('admin.change_privilege', $user->id) }}" data-target="#modalChangePrivilege"
                                    data-admin-name="{{ $user->name }}"
                                    data-privilege="{{ $user->privilege }}"
                                    {{ Auth::user()->id == $user->id ? 'disabled' : '' }}>
                                    <i class="fas fa-edit mr-2"></i>Change
                            </button>
                        </td>--}}
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