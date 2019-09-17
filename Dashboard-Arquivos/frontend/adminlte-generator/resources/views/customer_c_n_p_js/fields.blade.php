<!-- Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CNPJ', 'Cnpj:') !!}
    {!! Form::text('CNPJ', null, ['class' => 'form-control']) !!}
</div>

<!-- Social Reason Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Social_reason', 'Social Reason:') !!}
    {!! Form::text('Social_reason', null, ['class' => 'form-control']) !!}
</div>

<!-- Municipal Registration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Municipal_registration', 'Municipal Registration:') !!}
    {!! Form::text('Municipal_registration', null, ['class' => 'form-control']) !!}
</div>

<!-- State Registration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('State_registration', 'State Registration:') !!}
    {!! Form::text('State_registration', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Email_cnpj', 'Email Cnpj:') !!}
    {!! Form::text('Email_cnpj', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Phone_cnpj', 'Phone Cnpj:') !!}
    {!! Form::text('Phone_cnpj', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Address_cnpj', 'Address Cnpj:') !!}
    {!! Form::text('Address_cnpj', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('customerCNPJs.index') !!}" class="btn btn-default">Cancel</a>
</div>
