@extends('layouts.app')

@section('content')
<?php $visitorss=\App\Models\Vistors::where('id','!=',0)->count(); ?>
    <section class="content-header">
        <h1 class="pull-left">{{$visitorss}} Vistor(s)</h1>
        <h1 class="pull-right">
           <!-- <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('sessions.create') !!}">Add New</a> -->
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('vistors.table')
            </div>
        </div>
        <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $vistors])

        </div>
    </div>
@endsection


