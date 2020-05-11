<?php $session=\App\Models\DonateSessions::where('can_start_application_system',true); $sess=$session->first(); ?>
@include('shared.styles',['title' => 'Apply For Danation | '.$sess->title,'description'=>$sess->description,
'activity'=>'Visit Apply Donation Page'])

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">


            <div id="fh5co-header">

                @include('shared.header')

            </div>
            <!-- end:fh5co-header -->
            <div class="fh5co-parallax" style="background-image: url(images/fund.jpg);"
                data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">

                        <div
                            class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                            <div class="fh5co-intro fh5co-table-cell">
                                <br /><br /><br /><br />
                                <!-- <h1 class="text-center">Become a volunteer</h1> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php if($session->count() > 0){ ?>
            <div id="fh5co-blog-section m-5">
                <div class="m-5" id="contact">
                    <div class="row">

                    <div class="col-md-6">
                            <div class="col-md-12">
                                @include('flash::message')
                                <h1 class="h1">DONATION APPLICATION FORM</h1>
                            </div>
                            <div class="content">
                                @include('adminlte-templates::common.errors')
                                <div class="col-md-12">

                                    <div class="box-body">
                                        <div class="row">
                                            {!! Form::open(['route' => 'donationApplicants.store','files'=>'true']) !!}

                                            @include('donation_applicants.fields',['session_id'=>$sess->id])

                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <div class="col-md-6">
                         
                            
                            <div class="card border-success mb-3" style="max-width: 100%">
                                <div class="card-header bg-transparent border-success">   <h1 class=" text-center">{{$sess->title}}</h1></div>
                                <img class="img-fluid" src="{{$sess->image}}" style="width:100%;">
                                <div class="card-body text-success">
                               
                                    <b class="card-text">
                                        <hr />
                                        {{$sess->description}}
                                    </b>
                                </div>

                            </div>

                        </div>
                     
                    </div>
                </div>


            </div>
            <?php }else{ ?>
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="alert alert-warning text-center" role="alert">
                    <strong>APPLICATION CLOSED!</strong>
                </div>
            </div>
            <div class="col-sm-3"></div>
            <?php } ?>

        </div>

        @include('shared.footer')
</body>

</html>
