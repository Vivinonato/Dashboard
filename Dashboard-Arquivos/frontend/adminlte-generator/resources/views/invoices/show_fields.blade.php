<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $invoice->id !!}</p>
</div>

<!-- Code Field -->
<div class="form-group">
    {!! Form::label('code', 'Code:') !!}
    <p>{!! $invoice->code !!}</p>
</div>

<!-- Id Customer Field -->
<div class="form-group">
    {!! Form::label('id_customer', 'Id Customer:') !!}
    <p>{!! $invoice->id_customer !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $invoice->created_at !!}</p>
</div>

