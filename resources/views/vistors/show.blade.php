@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Vistors</h1>
      
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('vistors.show_fields')
            </div>
        </div>
        <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $vistors])

        </div>
    </div>
@endsection


