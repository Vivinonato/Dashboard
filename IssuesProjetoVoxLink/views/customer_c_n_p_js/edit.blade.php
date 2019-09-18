@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Customer C N P J
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($customerCNPJ, ['route' => ['customerCNPJs.update', $customerCNPJ->id], 'method' => 'patch']) !!}

                        @include('customer_c_n_p_js.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection