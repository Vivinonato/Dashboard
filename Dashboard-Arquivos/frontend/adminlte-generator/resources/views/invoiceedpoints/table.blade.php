<div class="table-responsive">
    <table class="table" id="invoiceedpoints-table">
        <thead>
            <tr>
                <th>Should Query</th>
        <th>Customer Code</th>
        <th>All Invoices Customer</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($invoiceedpoints as $invoiceedpoint)
            <tr>
                <td>{!! $invoiceedpoint->shouldquery !!}</td>
            <td>{!! $invoiceedpoint->customercode !!}</td>
            <td>{!! $invoiceedpoint->allinvoicescustomer !!}</td>
                <td>
                    {!! Form::open(['route' => ['invoiceedpoints.destroy', $invoiceedpoint->Codigo], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('invoiceedpoints.show', [$invoiceedpoint->Codigo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('invoiceedpoints.edit', [$invoiceedpoint->Codigo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
