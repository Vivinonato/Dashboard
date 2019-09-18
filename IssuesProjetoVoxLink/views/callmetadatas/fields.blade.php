<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nome', 'Nome:') !!}
    {!! Form::text('Nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Starttime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Starttime', 'Starttime:') !!}
    {!! Form::text('Starttime', null, ['class' => 'form-control']) !!}
</div>

<!-- Endtime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Endtime', 'Endtime:') !!}
    {!! Form::date('Endtime', null, ['class' => 'form-control','id'=>'Endtime']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#Endtime').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Duration', 'Duration:') !!}
    {!! Form::number('Duration', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Phone', 'Phone:') !!}
    {!! Form::text('Phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('callmetadatas.index') !!}" class="btn btn-default">Cancel</a>
</div>
