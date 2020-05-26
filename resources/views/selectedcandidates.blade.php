@include('shared.styles',['title' => 'Pre-selected Candidate','description'=>'Miss Career Africa',
'activity'=>'Visit pre-selected Candidate page'])

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">


            <div id="fh5co-header">

                @include('shared.header')

            </div>
            <!-- end:fh5co-header -->
            <div class="fh5co-parallax-1" style="background-image: url(images/past-candidate.jpeg);"
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

           

            <div id="fh5co-blog-section">
                <div class="container" id="contact">

                    <div class="card border-success mb-3" style="max-width: 100%">
                        <h1 class="text-center"><b>Online Voting Open Now -Till Tues, 2nd June 2020</b></h1>

                        <img class="img-fluid" src="/images/final-sa.jpeg" style="width:100%;">

                        <div class="card-footer bg-transparent border-success">
                   
                        <div class="col-12 mb-2">
                                   
                                   <a href="/donate" class="donate text-center  btn-block">#Donate2HerProject</a>
                               
                            </div>
                            <div class="col-12 mb-1">
                            <a href="https://theeventx.com/view-event/44" class="btn btn-info btn-block btn-sm">
                                Get Ticket
                            </a>
                            </div>
                            <div class="col-12 mb-1">
                                 <a href="https://hireherapp.com/candidates/Female" style="background:#000;border-color:#000" class="btn btn-info btn-block btn-sm">
                                 Hire Her
                                 </a>
                             </div>

                        </div>

                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="row can-voting" id="selected_candidates">

                    </div>
                    <!-- <div class="card border-success mb-3" style="max-width: 100%">
                        <h1 class="text-center"><b>VOTES CLOSED</b></h1>
                        <div class="card-footer bg-transparent border-success">
                            <a href="https://theeventx.com/view-event/30" class="btn btn-success btn-block btn-sm">
                                Get Ticket
                            </a>

                        </div>
                        <img class="img-fluid" src="/images/buy-ticket.jpeg" style="width:100%;">



                    </div> -->
                </div>

            </div>
        </div>
        @include('shared.footer')

</body>

</html>
