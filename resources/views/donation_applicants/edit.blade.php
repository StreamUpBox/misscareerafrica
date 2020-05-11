@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Donation Applicants
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($donationApplicants, ['route' => ['donationApplicants.update', $donationApplicants->id],
                    'method' => 'patch','files'=>'true']) !!}

                        @include('donation_applicants.fields',['donationApplicants'=>$donationApplicants,'session_id'=>$donationApplicants->donation_session_id])

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection