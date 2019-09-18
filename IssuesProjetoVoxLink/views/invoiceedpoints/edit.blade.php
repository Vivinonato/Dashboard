@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Invoice Edpoint
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($invoiceedpoint, ['route' => ['invoiceedpoints.update', $invoiceedpoint->Codigo], 'method' => 'patch']) !!}

                        @include('invoiceedpoints.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
