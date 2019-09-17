<div class="table-responsive">
    <table class="table" id="callmetadatas-table">
        <thead>
            <tr>
                <th>Nome</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Duration</th>
        <th>Phone</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($callmetadatas as $callmetadata)
            <tr>
                <td>{!! $callmetadata->Nome !!}</td>
            <td>{!! $callmetadata->Starttime !!}</td>
            <td>{!! $callmetadata->Endtime !!}</td>
            <td>{!! $callmetadata->Duration !!}</td>
            <td>{!! $callmetadata->Phone !!}</td>
                <td>
                    {!! Form::open(['route' => ['callmetadatas.destroy', $callmetadata->Codigo], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('callmetadatas.show', [$callmetadata->Codigo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('callmetadatas.edit', [$callmetadata->Codigo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
