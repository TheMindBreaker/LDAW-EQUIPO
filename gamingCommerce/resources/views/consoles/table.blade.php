<div class="table-responsive">
    <table class="table" id="consoles-table">
        <thead>
            <tr>
                <th>Conname</th>
        <th>Conbrand</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($consoles as $consoles)
            <tr>
                <td>{{ $consoles->conName }}</td>
            <td>{{ $consoles->conBrand }}</td>
                <td>
                    {!! Form::open(['route' => ['consoles.destroy', $consoles->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('consoles.show', [$consoles->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('consoles.edit', [$consoles->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
