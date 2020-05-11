@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Donation Applicants
        </h1>
        <a href="/donateSessions/{{$donationApplicants->donation_session_id }}" class="btn btn-default pull-right">Back</a>
    </section>
    <br>
    <br>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('donation_applicants.show_fields')
                   
                </div>
            </div>
        </div>
    </div>
@endsection
