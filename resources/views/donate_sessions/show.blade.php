@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Donate Sessions
        </h1>
        <a href="{!! route('donateSessions.index') !!}" class="btn btn-default pull-right">Back</a>
    </section>
    
    <div class="content">

    <div id="exTab1" class="">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="#1a" data-toggle="tab">Details</a>
                                </li>
                                <li><a href="#2a" data-toggle="tab">Applicants</a>
                                </li>

                            </ul>

                                <div class="tab-content clearfix">
                                    <div class="tab-pane active" id="1a">
                                        <div class="box box-primary">
                                            <div class="box-body">
                                            @include('donate_sessions.show_fields')
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <div class="tab-pane" id="2a">
                                        <div class="box box-primary">
                                            <div class="box-body">
                                            @include('donation_applicants.table')
                                            </div>

                                            <div class="text-center">

                                            @include('adminlte-templates::common.paginate', ['records' => $donationApplicants])

                                        </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


       
    </div>
@endsection
