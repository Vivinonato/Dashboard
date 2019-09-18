<!-- Shouldquery Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shouldquery', 'Shouldquery:') !!}
    {!! Form::text('shouldquery', null, ['class' => 'form-control']) !!}
</div>

<!-- Customercode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customercode', 'Customercode:') !!}
    {!! Form::text('customercode', null, ['class' => 'form-control']) !!}
</div>

<!-- Allinvoicescustomer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('allinvoicescustomer', 'Allinvoicescustomer:') !!}
    {!! Form::number('allinvoicescustomer', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('invoiceedpoints.index') !!}" class="btn btn-default">Cancel</a>
</div>
