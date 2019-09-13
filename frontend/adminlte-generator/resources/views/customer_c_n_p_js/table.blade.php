<div class="table-responsive">
    <table class="table" id="customerCNPJs-table">
        <thead>
            <tr>
                <th>Cnpj</th>
        <th>Social Reason</th>
        <th>Municipal Registration</th>
        <th>State Registration</th>
        <th>Email Cnpj</th>
        <th>Phone Cnpj</th>
        <th>Address Cnpj</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customerCNPJs as $customerCNPJ)
            <tr>
                <td>{!! $customerCNPJ->CNPJ !!}</td>
            <td>{!! $customerCNPJ->Social_reason !!}</td>
            <td>{!! $customerCNPJ->Municipal_registration !!}</td>
            <td>{!! $customerCNPJ->State_registration !!}</td>
            <td>{!! $customerCNPJ->Email_cnpj !!}</td>
            <td>{!! $customerCNPJ->Phone_cnpj !!}</td>
            <td>{!! $customerCNPJ->Address_cnpj !!}</td>
                <td>
                    {!! Form::open(['route' => ['customerCNPJs.destroy', $customerCNPJ->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('customerCNPJs.show', [$customerCNPJ->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('customerCNPJs.edit', [$customerCNPJ->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
