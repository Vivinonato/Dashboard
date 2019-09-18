<div class="table-responsive">
    <table class="table" id="invoices-table">
        <thead>
            <tr>
                <th>Code</th>
        <th>Id Customer</th>
        <th>Created At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($invoices as $invoice)
            <tr>
                <td>{!! $invoice->code !!}</td>
            <td>{!! $invoice->id_customer !!}</td>
            <td>{!! $invoice->created_at !!}</td>
                <td>
                    {!! Form::open(['route' => ['invoices.destroy', $invoice->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('invoices.show', [$invoice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('invoices.edit', [$invoice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
