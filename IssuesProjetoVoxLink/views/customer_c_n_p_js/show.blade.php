@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Customer C N P J
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('customer_c_n_p_js.show_fields')
                    <a href="{!! route('customerCNPJs.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
