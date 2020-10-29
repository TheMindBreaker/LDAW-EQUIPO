<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Username</th>
        <th>Useremail</th>
        <th>Userpassword</th>
        <th>Userrol</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $users)
            <tr>
                <td>{{ $users->userName }}</td>
            <td>{{ $users->userEmail }}</td>
            <td>{{ $users->userPassword }}</td>
            <td>{{ $users->userRol }}</td>
                <td>
                    {!! Form::open(['route' => ['users.destroy', $users->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$users->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('users.edit', [$users->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
