@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Gallaries
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($gallaries, ['route' => ['gallaries.update', $gallaries->id], 'method' => 'patch','files'=>'true']) !!}

                        @include('gallaries.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection