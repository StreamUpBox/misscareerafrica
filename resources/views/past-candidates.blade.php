@include('shared.styles',['title' => 'Past Candidates','description'=>'Miss Career Africa'])

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

            <?php 
                $allSessions =  \App\Models\Session::where('view_past_candidate',1)->get();
                ?>
            <div id="fh5co-blog-section">
                <div class="container" id="contact">
                    @foreach($allSessions as $session)
                    <hr>
                    <div class="row">
                        <div class="col-sm-3"  style="background-image: url('{{$candidate->profile}}');
                                    background-repeat: no-repeat;width:100%;min-height:90px;
                                    background-size: cover; background-size: center center">

                        </div>
                        <div class="col-sm-9">
                            <h2 class="text-center">{{$session->title}}-{{$session->country}} </h2>
                            <h4 class="text-center">{{$session->date}} </h4>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <?php
                    $candidates = \App\Models\Candidate::where('is_selected',1)
                    ->where('session_id', $session->id)
                    ->orderBy('votes', 'DESC')->get();
                    ?>
                        @foreach($candidates as $candidate)

                        <div class="col-md-4">
                            <div class="card border-success mb-3" style="max-width: 100%">
                                <div class="card-header bg-transparent border-success"><b>{{$candidate->fname}}
                                        {{$candidate->lname}}</b></div>
                                <a href="past-candidate-page/{{$candidate->id}}">
                                    <div class="img-fluid" style=" background-image: url('{{$candidate->profile}}');
                                    background-repeat: no-repeat;width:100%;min-height:300px;
                                    background-size: cover; background-size: center center"></div>
                                    <div class="card-body text-success">
                                        <h5 class="card-title"><b>{{$candidate->city}} - {{$candidate->country}}</b>
                                        </h5>
                                        <b class="card-text">
                                            <hr />
                                            <a
                                                href="past-candidate-page/{{$candidate->id}}">{{str_limit($candidate->bio, $limit = 100, $end = 'read more ....')}}</a>
                                        </b>
                                    </div>
                                </a>

                                <div class="card-footer bg-transparent border-success">
                                    <a href="book-mca" class="btn btn-success btn-block btn-sm">
                                        BOOK HER
                                    </a>

                                </div>


                            </div>
                        </div>
                        @endforeach

                    </div>
                    @endforeach

                </div>

            </div>
        </div>
        @include('shared.footer')

</body>

</html>
