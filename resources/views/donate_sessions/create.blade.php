@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Donate Sessions
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'donateSessions.store','files'=>'true']) !!}

                        @include('donate_sessions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
