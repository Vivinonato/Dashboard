@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Customer C P F
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'customerCPFs.store']) !!}

                        @include('customer_c_p_fs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
