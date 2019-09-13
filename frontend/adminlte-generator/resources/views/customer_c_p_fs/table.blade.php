<div class="table-responsive">
    <table class="table" id="customerCPFs-table">
        <thead>
            <tr>
                <th>Search Client Code</th>
        <th>Cpf</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customerCPFs as $customerCPF)
            <tr>
                <td>{!! $customerCPF->search_client_code !!}</td>
            <td>{!! $customerCPF->CPF !!}</td>
            <td>{!! $customerCPF->Name !!}</td>
            <td>{!! $customerCPF->Email !!}</td>
            <td>{!! $customerCPF->Phone !!}</td>
            <td>{!! $customerCPF->Address !!}</td>
                <td>
                    {!! Form::open(['route' => ['customerCPFs.destroy', $customerCPF->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('customerCPFs.show', [$customerCPF->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('customerCPFs.edit', [$customerCPF->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
