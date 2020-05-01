@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Crowned
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($crowned, ['route' => ['crowneds.update', $crowned->id], 'method' => 'patch','files'=>'true']) !!}

                        @include('crowneds.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection