@extends('layouts.app')
<div class="container">
@section('content')
    <section class="content-header">
        <h1>
            Vote Candidate
        </h1>
    </section>
    <div class="content">
    <?php  $vistor=new App\Models\Vistors; $vistor->saveVistor('Visit Voted') ?>
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                @include('flash::message')

                    {!! Form::open(['route' => 'candiateVoters.store']) !!}

                        @include('candiate_voters.fields')

                    {!! Form::close() !!}
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
</div>
